<?php
require_once './App/Config/Class.php';

define('CONFIG', [
    'config_modulo' => 'painel',
    'config_title' => 'Cadastro de Criança',
    'config_detail' => 'Formulário para cadastro de crianças.',
    'config_icone' => 'fas fa-user-plus'
]);

require_once './App/Shared/App/TemplateAppShared.php';
?>


<?php if(isset($_SESSION['message'])):?>

<div class="alert alert-<?php echo $_SESSION['message']['status']; ?>" role="alert">
    <?php echo $_SESSION['message']['data']; ?>
</div>

<?php endif; $_SESSION['message'] = null; ?>

<div class="card">
    <div class="">
        <div class="p-3">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title">Cadastro de Criança</h5>
                <a href="<?php echo BASE; ?>page/app/crianca-lista-page" class="btn btn-secondary text-white">
                    <i class="fas fa-arrow-left"></i> Voltar para lista
                </a>
            </div>

            <form action="<?php echo BASE; ?>service/crianca-service/crianca-create-service" method="POST" enctype="multipart/form-data">
                <!-- Linha com três colunas -->
                 <input type="hidden" name="conta_id" value="<?php echo $_SESSION['conta']['conta_id']; ?>">
                <div class="row">
                    <!-- Nome da Criança -->
                    <div class="col-md-4 mb-3">
                        <label for="crianca_nome" class="form-label">Nome da Criança*</label>
                        <input type="text" class=" form-control form-control-sm" id="crianca_nome" name="crianca_nome" required>
                    </div>

                    <!-- Data de Nascimento -->
                    <div class="col-md-2 mb-3">
                        <label for="crianca_data_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class=" form-control form-control-sm" id="crianca_data_nascimento" name="crianca_data_nascimento">
                    </div>

                    <!-- Idade -->
                    <div class="col-md-2 mb-3">
                        <label for="crianca_idade" class="form-label">Idade</label>
                        <input type="number" class=" form-control form-control-sm" id="crianca_idade" name="crianca_idade">
                    </div>

                <!-- Linha com três colunas -->
                    <!-- Sexo -->
                    <div class="col-md-2 mb-3">
                        <label for="crianca_sexo" class="form-label">Sexo*</label>
                        <select class="form-select form-select-sm" id="crianca_sexo" name="crianca_sexo" required>
                            <option value="" disabled selected>Selecione</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>

                    <!-- Raça -->
                    <div class="col-md-2 mb-3">
                        <label for="crianca_raca" class="form-label">Raça</label>
                        <select class="form-select form-select-sm" id="crianca_raca" name="crianca_raca">
                            <option value="" disabled selected>Selecione</option>
                            <option value="Branca">Branca</option>
                            <option value="Negra">Negra</option>
                            <option value="Parda">Parda</option>
                            <option value="Amarela">Amarela</option>
                            <option value="Indígena">Indígena</option>
                            <option value="Outra">Outra</option>
                        </select>
                    </div>

                    <!-- Número da Cédula -->
                    <div class="col-md-2 mb-3">
                        <label for="crianca_numero_cedula" class="form-label">Número da Cédula</label>
                        <input type="text" class=" form-control form-control-sm" id="crianca_numero_cedula" name="crianca_numero_cedula">
                    </div>

                    <div class="col-md-2 mb-3">
                        <label for="crianca_numero_bilhete" class="form-label">Número do Bilhete</label>
                        <input type="text" class=" form-control form-control-sm" id="crianca_numero_bilhete" name="crianca_numero_bilhete">
                    </div>

                <!-- Linha com três colunas -->
                    <!-- Número do Bilhete -->
                    

                    <!-- Origem -->
                    <div class="col-md-4 mb-3">
                        <label for="crianca_origem" class="form-label">Origem</label>
                        <input type="text" class=" form-control form-control-sm" id="crianca_origem" name="crianca_origem">
                    </div>

                    <!-- Filição -->
                    <div class="col-md-4 mb-3">
                        <label for="crianca_filiacao" class="form-label">Filição</label>
                        <input type="text" class=" form-control form-control-sm" id="crianca_filiacao" name="crianca_filiacao">
                    </div>

                <!-- Linha com duas colunas -->
                    <!-- Estado -->
                    <div class="col-md-2 mb-3">
                        <label for="crianca_estado" class="form-label">Estado</label>
                        <select class="form-select form-select-sm" id="crianca_estado" name="crianca_estado">
                            <option value="" disabled selected>Selecione</option>
                            <option value="Acolhida">Acolhida</option>
                            <option value="Desligada">Desligada</option>
                        </select>
                    </div>

                    <div class="col-md mb-3">
                    <!-- Textareas -->
                        <div class="mb-3">
                            <label for="crianca_historico" class="form-label">Histórico</label>
                            <textarea class=" form-control form-control-sm" id="crianca_historico" name="crianca_historico" rows="4"></textarea>
                        </div>
                    </div>

                    <div class="col-md mb-3">
                        <div class="mb-3">
                            <label for="crianca_motivo_entrada" class="form-label">Motivo de Entrada</label>
                            <textarea class=" form-control form-control-sm" id="crianca_motivo_entrada" name="crianca_motivo_entrada" rows="4"></textarea>
                        </div>
                    </div>




                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Salvar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function previewImage(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
        const preview = document.getElementById('foto_preview');
        preview.src = reader.result;
        preview.style.display = 'inline';
    }

    if (file) {
        reader.readAsDataURL(file);
    }
}
</script>

<?php
require_once './App/Shared/App/TemplateEndAppShared.php';
?>
