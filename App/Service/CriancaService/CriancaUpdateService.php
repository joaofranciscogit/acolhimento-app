<?php

require_once './App/Config/Class.php';

header('Content-Type: application/json');

// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Método não permitido."]);
    exit;
}

// Dados enviados pelo formulário ($_POST)
$criancaId = isset($_POST['crianca_id']) ? $_POST['crianca_id'] : null;
$criancaNome = isset($_POST['crianca_nome']) ? $_POST['crianca_nome'] : null;
$criancaDataNascimento = isset($_POST['crianca_data_nascimento']) ? $_POST['crianca_data_nascimento'] : null;
$criancaIdade = isset($_POST['crianca_idade']) ? $_POST['crianca_idade'] : null;
$criancaSexo = isset($_POST['crianca_sexo']) ? $_POST['crianca_sexo'] : null;
$criancaNumeroCedula = isset($_POST['crianca_numero_cedula']) ? $_POST['crianca_numero_cedula'] : null;
$criancaNumeroBilhete = isset($_POST['crianca_numero_bilhete']) ? $_POST['crianca_numero_bilhete'] : null;
$criancaHistorico = isset($_POST['crianca_historico']) ? $_POST['crianca_historico'] : null;
$criancaMotivoEntrada = isset($_POST['crianca_motivo_entrada']) ? $_POST['crianca_motivo_entrada'] : null;
$criancaRaca = isset($_POST['crianca_raca']) ? $_POST['crianca_raca'] : null;
$criancaOrigem = isset($_POST['crianca_origem']) ? $_POST['crianca_origem'] : null;
$criancaFiliacao = isset($_POST['crianca_filiacao']) ? $_POST['crianca_filiacao'] : null;
$criancaEstado = isset($_POST['crianca_estado']) ? $_POST['crianca_estado'] : null;
$contaId = isset($_POST['conta_id']) ? $_POST['conta_id'] : null;

// Verifica se os dados obrigatórios foram enviados
if (
    empty($criancaId) || 
    empty($criancaNome) || 
    empty($criancaSexo) || 
    empty($contaId)
) {
    $_SESSION['message']['status'] = 'warning';
    $_SESSION['message']['data'] = 'Faltando dados obrigatórios';
    header('location:'.BASE.'page/app/crianca-registro-page?code='.$_GET['code']);
    exit;
}

// Atualiza os dados da criança, com ou sem a nova foto
$criancaUpdate = $useDatabase->mysqlNon(
    "UPDATE crianca 
    SET 
        crianca_nome = :crianca_nome,
        crianca_data_nascimento = :crianca_data_nascimento,
        crianca_idade = :crianca_idade,
        crianca_sexo = :crianca_sexo,
        crianca_numero_cedula = :crianca_numero_cedula,
        crianca_numero_bilhete = :crianca_numero_bilhete,
        crianca_historico = :crianca_historico,
        crianca_motivo_entrada = :crianca_motivo_entrada,
        crianca_raca = :crianca_raca,
        crianca_origem = :crianca_origem,
        crianca_filiacao = :crianca_filiacao,
        crianca_estado = :crianca_estado,
        conta_id = :conta_id
    WHERE crianca_id = :crianca_id",
    [
        ":crianca_id" => $criancaId,
        ":crianca_nome" => $criancaNome,
        ":crianca_data_nascimento" => $criancaDataNascimento,
        ":crianca_idade" => $criancaIdade,
        ":crianca_sexo" => $criancaSexo,
        ":crianca_numero_cedula" => $criancaNumeroCedula,
        ":crianca_numero_bilhete" => $criancaNumeroBilhete,
        ":crianca_historico" => $criancaHistorico,
        ":crianca_motivo_entrada" => $criancaMotivoEntrada,
        ":crianca_raca" => $criancaRaca,
        ":crianca_origem" => $criancaOrigem,
        ":crianca_filiacao" => $criancaFiliacao,
        ":crianca_estado" => $criancaEstado,
        ":conta_id" => $contaId
    ]
);

// Verifica se a atualização foi bem-sucedida
if ($criancaUpdate) {
    $_SESSION['message']['status'] = 'success';
    $_SESSION['message']['data'] = 'Dados da criança atualizados com sucesso';
    header('location:'.BASE.'page/app/crianca-registro-page?code='.$_GET['code']);
} else {
    $_SESSION['message']['status'] = 'danger';
    $_SESSION['message']['data'] = 'Erro ao atualizar os dados da criança';
    header('location:'.BASE.'page/app/crianca-registro-page?code='.$_GET['code']);
}