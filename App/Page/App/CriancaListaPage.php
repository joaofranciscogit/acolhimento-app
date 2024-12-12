<?php
require_once './App/Config/Class.php';

$criancaData = $useDatabase->mysqlExe("SELECT * FROM crianca");

define('CONFIG', [
    'config_modulo' => 'painel',
    'config_title' => 'Lista de Crianças',
    'config_detail' => 'Registros de Crianças.',
    'config_icone' => 'fas fa-list-alt'
]);

require_once './App/Shared/App/TemplateAppShared.php';
?>

<!-- LOCAL DA TABELA -->
<div class="card p-3">

<div class="d-flex justify-content-between align-items-center">

    <!-- Campo de Pesquisa Geral -->
    <div class="mb-3 rounded border d-flex mt-2" style="width: 600px;">
        <i class="fas fa-search mt-2 fs-3 mx-2"></i>
        <input type="text" id="generalSearch" class="form-control border-0 border-none" placeholder="Pesquisar">
    </div>

    <div class="mt-0 mb-3">
        <a href="<?php echo BASE; ?>page/app/crianca-formulario-page" class="btn btn-primary text-white">
            <i class="fas fa-plus"></i> Nova Criança
    </a>
    </div>

</div>

    <!-- Tabela -->
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered align-middle" id="dataTable">
            <thead>
                <tr>
                    <th>
                        Nome
                        <span class="sort-icon" data-column="1" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th>
                        Data Nascimento
                        <span class="sort-icon" data-column="2" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th>
                        Idade
                        <span class="sort-icon" data-column="3" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th>
                        Sexo
                        <span class="sort-icon" data-column="4" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th>
                        Número Cedula
                        <span class="sort-icon" data-column="5" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th>
                        Número Bilhete
                        <span class="sort-icon" data-column="6" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th>
                        Raça
                        <span class="sort-icon" data-column="10" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th>
                        Origem
                        <span class="sort-icon" data-column="11" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th>
                        Filiacao
                        <span class="sort-icon" data-column="12" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th>
                        Estado
                        <span class="sort-icon" data-column="13" data-order="asc" style="cursor: pointer;">
                            <i class="fas fa-sort"></i>
                        </span>
                    </th>
                    <th class="text-center">

                        <div class="btn-group dropup">
                            <ul class="dropdown-menu" data-popper-placement="top-start">
                                <li><a class="dropdown-item" id="downloadVisible" href="#"><i class="fas fa-file-csv mx-2"></i> Exportar Exel</a></li>
                                <li><a class="dropdown-item" id="downloadAll" href="#"><i class="fas fa-file-csv mx-2"></i> Exportar Exel (Todos)</a></li>
                            </ul>
                        </div>

                        <button class="btn btn-outline-secondary btn-sm border-0" data-bs-toggle="dropdown" aria-expanded="true"><i class="fas fa-ellipsis-vertical"></i></button>

                    </th>
                </tr>
            </thead>
            <tbody>
            
            <?php foreach ($criancaData as $crianca): ?>
            <tr>
                <td><a href="<?php echo BASE.'page/app/crianca-registro-page?code='.$crianca['crianca_codigo']; ?>"><?= htmlspecialchars($crianca['crianca_nome']) ?></a></td>
                <td><a href="#"><?= htmlspecialchars($crianca['crianca_data_nascimento']) ?></a></td>
                <td><a href="#"><?= htmlspecialchars($crianca['crianca_idade']) ?></a></td>
                <td><a href="#"><?= htmlspecialchars($crianca['crianca_sexo']) ?></a></td>
                <td><a href="#"><?= htmlspecialchars($crianca['crianca_numero_cedula']) ?></a></td>
                <td><a href="#"><?= htmlspecialchars($crianca['crianca_numero_bilhete']) ?></a></td>
                <td><a href="#"><?= htmlspecialchars($crianca['crianca_raca']) ?></a></td>
                <td><a href="#"><?= htmlspecialchars($crianca['crianca_origem']) ?></a></td>
                <td><a href="#"><?= htmlspecialchars($crianca['crianca_filiacao']) ?></a></td>
                <td><a href="#"><?= htmlspecialchars($crianca['crianca_estado']) ?></a></td>
                <td class="text-center" style="width: 5px;">
                    <button class="btn btn-outline-secondary btn-sm border-0"><i class="fas fa-ellipsis-vertical"></i></button>
                </td>
            </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <!-- Limite de Registros por Página -->
    <div class="mb-3 d-flex justify-content-between mt-2">
        <label>
        <div class="border rounded px-1">
        <i class="fas fa-bars-staggered text-secondary"></i>
            <select id="recordsPerPage" class="form-select form-select-sm d-inline-block w-auto border-0">
                <option value="5">5</option>
                <option value="10" selected>10</option>
                <option value="30">30</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
        </label>
        <nav>
            <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
        </nav>
    </div>

</div>

<?php
require_once './App/Shared/App/DatableScriptAppShared.php';
require_once './App/Shared/App/TemplateEndAppShared.php';
?>
