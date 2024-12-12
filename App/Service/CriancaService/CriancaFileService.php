<?php

require_once './App/Config/Class.php';

header('Content-Type: application/json');

// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Método não permitido."]);
    exit;
}

// Verifica se a pasta de uploads existe, caso contrário cria
$uploadDir = './app/server/crianca/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Dados enviados pelo formulário ($_POST)
$criancaId = $_POST['crianca_id'] ?? null;
$criancaCodigo = $_POST['crianca_codigo'] ?? null;

// Verifica se os dados obrigatórios foram enviados
if (empty($criancaId) || empty($criancaCodigo)) {
    $_SESSION['message']['status'] = 'warning';
    $_SESSION['message']['data'] = 'Faltando dados obrigatórios.';
    header('location:' . BASE . 'page/app/crianca-registro-page?code=' . $_GET['code']);
    exit;
}

// Verifica se há um arquivo enviado
if (!isset($_FILES['crianca_foto']) || $_FILES['crianca_foto']['error'] !== UPLOAD_ERR_OK) {
    $_SESSION['message']['status'] = 'danger';
    $_SESSION['message']['data'] = 'Erro ao enviar o arquivo. Verifique e tente novamente.';
    header('location:' . BASE . 'page/app/crianca-registro-page?code=' . $_GET['code']);
    exit;
}

// Recupera o arquivo enviado
$file = $_FILES['crianca_foto'];
$fileTmp = $file['tmp_name'];
$fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION); // Obtém a extensão do arquivo
$fileName = "{$criancaCodigo}.{$fileExtension}"; // Define o nome do arquivo baseado no código da criança
$targetFile = $uploadDir . $fileName;

// Verifica se o arquivo é uma imagem válida
$fileType = mime_content_type($fileTmp);
$validTypes = ['image/jpeg', 'image/png', 'image/gif'];
if (!in_array($fileType, $validTypes)) {
    $_SESSION['message']['status'] = 'danger';
    $_SESSION['message']['data'] = 'O arquivo deve ser uma imagem (JPEG, PNG ou GIF).';
    header('location:' . BASE . 'page/app/crianca-registro-page?code=' . $_GET['code']);
    exit;
}

// Obtém o caminho da foto atual, se existir
$criancaData = $useDatabase->mysqlExe(
    "SELECT crianca_foto FROM crianca WHERE crianca_id = :crianca_id",
    [":crianca_id" => $criancaId]
);
$fotoAtual = $criancaData['crianca_foto'] ?? null;

// Move o novo arquivo para a pasta de uploads
if (move_uploaded_file($fileTmp, $targetFile)) {
    // Exclui a foto anterior, se existir
    if (!empty($fotoAtual) && file_exists($uploadDir . $fotoAtual)) {
        unlink($uploadDir . $fotoAtual);
    }

    // Atualiza os dados no banco de dados
    $criancaUpdate = $useDatabase->mysqlNon(
        "UPDATE crianca 
        SET crianca_foto = :crianca_foto 
        WHERE crianca_id = :crianca_id",
        [
            ":crianca_foto" => $fileName,
            ":crianca_id" => $criancaId
        ]
    );

    // Verifica se a atualização foi bem-sucedida
    if ($criancaUpdate) {
        $_SESSION['message']['status'] = 'success';
        $_SESSION['message']['data'] = 'Dados da criança atualizados com sucesso.';
    } else {
        // Reverte a exclusão do arquivo em caso de falha no banco
        unlink($targetFile);
        $_SESSION['message']['status'] = 'danger';
        $_SESSION['message']['data'] = 'Erro ao atualizar os dados da criança.';
    }
} else {
    $_SESSION['message']['status'] = 'danger';
    $_SESSION['message']['data'] = 'Erro ao salvar o arquivo enviado.';
}

header('location:' . BASE . 'page/app/crianca-registro-page?code=' . $_GET['code']);
exit;
