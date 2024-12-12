<?php

require_once './App/Config/Class.php';

define('CONFIG', [
    'config_modulo' => 'painel',
    'config_title' => 'Registro de Criança',
    'config_detail' => 'Visualização do Registro e Edição.',
    'config_icone' => 'fas fa-user-plus'
]);

$criancaData = $useDatabase->mysqlExe("SELECT *FROM crianca WHERE crianca_codigo = :crianca_codigo", ['crianca_codigo'=>$_GET['code']])[0];

require_once './App/Shared/App/TemplateAppShared.php';
?>

<?php if(isset($_SESSION['message'])):?>

<div class="alert alert-<?php echo $_SESSION['message']['status']; ?>" role="alert">
    <?php echo $_SESSION['message']['data']; ?>
</div>

<?php endif; $_SESSION['message'] = null; ?>

<div class="row">

<div class="col-md-2">
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title">Foto da Criança</h5>
        </div>
        <div class="card-body text-center">
            <!-- Exibição da Foto Atual -->
            <div class="mb-3">
                <div 
                    id="preview_foto" 
                    class="rounded" 
                    style="width: 150px; height: 150px; border-radius: 50%; background-size: cover; background-position: center; background-repeat: no-repeat; margin: 0 auto; background-image: url('<?php echo !empty($criancaData['crianca_foto']) && file_exists('./app/server/crianca/' . $criancaData['crianca_foto']) 
                        ? BASE . './app/server/crianca/' . $criancaData['crianca_foto'] 
                        : 'https://static.vecteezy.com/system/resources/thumbnails/009/292/244/small/default-avatar-icon-of-social-media-user-vector.jpg'; ?>');
                    "
                ></div>
            </div>

            <!-- Formulário de Upload -->
            <form action="<?php echo BASE; ?>service/crianca-service/crianca-file-service?code=<?php echo $_GET['code']; ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="crianca_id" value="<?php echo $criancaData['crianca_id']; ?>">
                <input type="hidden" name="crianca_codigo" value="<?php echo $criancaData['crianca_codigo']; ?>">

                <div class="mb-3">
                    <div class="file-upload-wrapper">
                        <input 
                            type="file" 
                            class="form-control form-control-sm file-upload-input" 
                            id="crianca_foto" 
                            name="crianca_foto" 
                            accept="image/*"
                            disabled
                        >
                        <label for="crianca_foto" class="custom-file-upload">
                            <i class="fa fa-upload"></i> Selecionar
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm mb-2" disabled>Salvar Foto</button>
                <button type="button" class="btn btn-light btn-sm mb-2 mx-2" disabled><i class="fa fa-download"></i></button>
            </form>
        </div>
    </div>
</div>

<script>
    // Seleciona o input de arquivo e a div de pré-visualização
    const inputFoto = document.getElementById('crianca_foto');
    const previewFoto = document.getElementById('preview_foto');

    // Adiciona um ouvinte de eventos para mudanças no input de arquivo
    inputFoto.addEventListener('change', function(event) {
        const file = event.target.files[0]; // Obtém o arquivo selecionado

        // Verifica se um arquivo foi selecionado e se é uma imagem
        if (file && file.type.startsWith('image/')) {
            const reader = new FileReader(); // Cria um leitor de arquivos

            // Define o que fazer quando o arquivo for carregado
            reader.onload = function(e) {
                previewFoto.style.backgroundImage = `url('${e.target.result}')`; // Atualiza a imagem de fundo
            };

            reader.readAsDataURL(file); // Lê o arquivo como uma URL de dados
        } else {
            // Caso o arquivo não seja uma imagem, opcionalmente você pode exibir uma mensagem de erro
            alert('Por favor, selecione um arquivo de imagem válido.');
        }
    });
</script>

<style>
    .file-upload-wrapper {
        position: relative;
        display: inline-block;
    }

    .file-upload-input {
        display: none; /* Esconde o input de arquivo */
    }

    .custom-file-upload {
        display: inline-block;
        background-color: #F1F5F9;
        color: black;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        text-align: center;
        width: auto;
    }

    .custom-file-upload:hover {
        background-color: #E9EFF5;
    }

    .fa-upload {
        margin-right: 8px;
    }
</style>


<div class="col-md-10">

<div class="card">
    <div class="">
        <div class="p-3">
            
        <div class="d-flex justify-content-between align-items-center mb-4 card-header">
            <h5 class="card-title">Dados da Criança</h5>
            <a href="<?php echo BASE; ?>page/app/crianca-lista-page" class="btn btn-secondary text-white">
                <i class="fas fa-arrow-left"></i> Voltar para lista
            </a>
            
        </div>

            
    <form action="<?php echo BASE; ?>service/crianca-service/crianca-update-service?code=<?php echo $_GET['code']; ?>" method="POST" enctype="multipart/form-data">
    
    <!-- Campo oculto para a conta ID -->
    <input type="hidden" name="conta_id" value="<?php echo $_SESSION['conta']['conta_id']; ?>">
    <input type="hidden" name="crianca_id" value="<?php echo $criancaData['crianca_id']; ?>">

    <div class="row">

        <!-- Nome da Criança -->
        <div class="col-md-4 mb-3">
            <label for="crianca_nome" class="form-label">Nome da Criança</label>
            <input type="text" class="form-control form-control-sm" id="crianca_nome" name="crianca_nome" value="<?php echo $criancaData['crianca_nome'] ?? ''; ?>" required disabled>
        </div>

        <!-- Data de Nascimento -->
        <div class="col-md-2 mb-3">
            <label for="crianca_data_nascimento" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control form-control-sm" id="crianca_data_nascimento" name="crianca_data_nascimento" value="<?php echo $criancaData['crianca_data_nascimento'] ?? ''; ?>" disabled>
        </div>

        <!-- Idade -->
        <div class="col-md-2 mb-3">
            <label for="crianca_idade" class="form-label">Idade</label>
            <input type="number" class="form-control form-control-sm" id="crianca_idade" name="crianca_idade" value="<?php echo $criancaData['crianca_idade'] ?? ''; ?>" disabled>
        </div>

        <!-- Sexo -->
        <div class="col-md-2 mb-3">
            <label for="crianca_sexo" class="form-label">Sexo</label>
            <select class="form-select form-select-sm" id="crianca_sexo" name="crianca_sexo" required disabled>
                <option value="" disabled>Selecione</option>
                <option value="Masculino" <?php echo ($criancaData['crianca_sexo'] ?? '') === 'Masculino' ? 'selected' : ''; ?>>Masculino</option>
                <option value="Feminino" <?php echo ($criancaData['crianca_sexo'] ?? '') === 'Feminino' ? 'selected' : ''; ?>>Feminino</option>
            </select>
        </div>

        <!-- Raça -->
        <div class="col-md-2 mb-3">
            <label for="crianca_raca" class="form-label">Raça</label>
            <select class="form-select form-select-sm" id="crianca_raca" name="crianca_raca" disabled>
                <option value="" disabled>Selecione</option>
                <option value="Branca" <?php echo ($criancaData['crianca_raca'] ?? '') === 'Branca' ? 'selected' : ''; ?>>Branca</option>
                <option value="Negra" <?php echo ($criancaData['crianca_raca'] ?? '') === 'Negra' ? 'selected' : ''; ?>>Negra</option>
                <option value="Parda" <?php echo ($criancaData['crianca_raca'] ?? '') === 'Parda' ? 'selected' : ''; ?>>Parda</option>
                <option value="Amarela" <?php echo ($criancaData['crianca_raca'] ?? '') === 'Amarela' ? 'selected' : ''; ?>>Amarela</option>
                <option value="Indígena" <?php echo ($criancaData['crianca_raca'] ?? '') === 'Indígena' ? 'selected' : ''; ?>>Indígena</option>
                <option value="Outra" <?php echo ($criancaData['crianca_raca'] ?? '') === 'Outra' ? 'selected' : ''; ?>>Outra</option>
            </select>
        </div>

        <!-- Número da Cédula -->
        <div class="col-md-2 mb-3">
            <label for="crianca_numero_cedula" class="form-label">Número da Cédula</label>
            <input type="text" class="form-control form-control-sm" id="crianca_numero_cedula" name="crianca_numero_cedula" value="<?php echo $criancaData['crianca_numero_cedula'] ?? ''; ?>" disabled>
        </div>

        <!-- Número do Bilhete -->
<div class="col-md-2 mb-3">
    <label for="crianca_numero_bilhete" class="form-label">Número do Bilhete</label>
    <input type="text" class="form-control form-control-sm" id="crianca_numero_bilhete" name="crianca_numero_bilhete" value="<?php echo $criancaData['crianca_numero_bilhete'] ?? ''; ?>" disabled>
</div>

<!-- Origem -->
<div class="col-md-4 mb-3">
    <label for="crianca_origem" class="form-label">Origem</label>
    <input type="text" class="form-control form-control-sm" id="crianca_origem" name="crianca_origem" value="<?php echo $criancaData['crianca_origem'] ?? ''; ?>" disabled>
</div>

<!-- Filiação -->
<div class="col-md-4 mb-3">
    <label for="crianca_filiacao" class="form-label">Filiação</label>
    <input type="text" class="form-control form-control-sm" id="crianca_filiacao" name="crianca_filiacao" value="<?php echo $criancaData['crianca_filiacao'] ?? ''; ?>" disabled>
</div>

<!-- Estado -->
<div class="col-md-2 mb-3">
    <label for="crianca_estado" class="form-label">Estado</label>
    <select class="form-select form-select-sm" id="crianca_estado" name="crianca_estado" disabled>
        <option value="" disabled>Selecione</option>
        <option value="Acolhida" <?php echo ($criancaData['crianca_estado'] ?? '') === 'Acolhida' ? 'selected' : ''; ?>>Acolhida</option>
        <option value="Desligada" <?php echo ($criancaData['crianca_estado'] ?? '') === 'Desligada' ? 'selected' : ''; ?>>Desligada</option>
    </select>
</div>

<!-- Histórico -->
<div class="col-md mb-3">
    <label for="crianca_historico" class="form-label">Histórico</label>
    <textarea class="form-control form-control-sm" id="crianca_historico" name="crianca_historico" rows="4" disabled><?php echo $criancaData['crianca_historico'] ?? ''; ?></textarea>
</div>

<!-- Motivo de Entrada -->
<div class="col-md mb-3">
    <label for="crianca_motivo_entrada" class="form-label">Motivo de Entrada</label>
    <textarea class="form-control form-control-sm" id="crianca_motivo_entrada" name="crianca_motivo_entrada" rows="4" disabled><?php echo $criancaData['crianca_motivo_entrada'] ?? ''; ?></textarea>
</div>


    </div>

    <!-- Botão de Envio -->
    <div class="d-flex mt-2">
        <button type="submit" class="btn btn-primary me-3" id="submitButton" disabled>Salvar Registros</button>
        <button type="button" class="btn btn-light me-3" disabled><i class="fa fa-print"></i></button>
        <button type="button" class="btn btn-light me-3" disabled><i class="fa fa-trash-can"></i></button>
        <button type="button" id="editButton" class="btn btn-light text-white me-3"><i class="fa fa-lock text-warning"></i></button>
    </div>

</form>

</div>

</div>
</div>
</div>

</div>

</div>

<script>
    document.getElementById("editButton").addEventListener("click", function () {
        // Seleciona todos os campos de input, select, textarea e botões (exceto o botão de editar)
        const inputs = document.querySelectorAll("input, select, textarea, button:not(#editButton)");

        // Verifica o HTML do botão para alternar entre editar e cancelar
        if (this.innerHTML === '<i class="fa fa-lock text-warning"></i>') {
            // Habilita todos os campos
            inputs.forEach(function (input) {
                input.disabled = false;
            });

            // Muda o HTML do botão para "Cancelar"
            this.innerHTML = '<i class="fa fa-lock-open text-warning"></i>';
        } else {
            // Desabilita todos os campos
            inputs.forEach(function (input) {
                input.disabled = true;
            });

            // Muda o HTML do botão para "Editar"
            this.innerHTML = '<i class="fa fa-lock text-warning"></i>';
        }
    });
</script>




