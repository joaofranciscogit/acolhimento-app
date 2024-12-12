<?php

require_once './App/Config/Class.php';

define('CONFIG', [
    'config_modulo' => 'conta',
    'config_title' => 'Lista de Conteúdos',
    'config_detail' => 'Registros de Postagens Feitas.',
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
                <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fas fa-plus"></i> Nova Postagem
                </button>
            </div>

        </div>

            

            <!-- Tabela -->
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered align-middle" id="dataTable">
                    <thead class="">
                        <tr>
                            <th>
                                Nome
                                <span class="sort-icon" data-column="1" data-order="asc" style="cursor: pointer;">
                                    <i class="fas fa-sort"></i>
                                </span>

                                <div class="d-flex border rounded">
                                    <i class="fas fa-filter text-secondary mt-2 mx-2"></i>
                                    <input type="text" class="form-control form-control-sm columnFilter border-0" data-column="1" placeholder="Filtrar Nome">
                                </div>
                                
                            </th>
                            <th>
                                Email
                                <span class="sort-icon" data-column="2" data-order="asc" style="cursor: pointer;">
                                    <i class="fas fa-sort"></i>
                                </span>
    
                                <div class="d-flex border rounded">
                                    <i class="fas fa-filter text-secondary mt-2 mx-2"></i>
                                    <input type="text" class="form-control form-control-sm columnFilter border-0" data-column="2" placeholder="Filtrar Email">
                                </div>
                            </th>
                            <th>
                                Telefone
                                <span class="sort-icon" data-column="3" data-order="asc" style="cursor: pointer;">
                                    <i class="fas fa-sort"></i>
                                </span>

                                <div class="d-flex border rounded">
                                    <i class="fas fa-filter text-secondary mt-2 mx-2"></i>
                                    <input type="text" class="form-control form-control-sm columnFilter border-0" data-column="3" placeholder="Filtrar Telefone">
                                </div>
                            </th>
                            <th class="text-center">
                                Ações

                                <div class="btn-group dropup">
                                   
                                    <ul class="dropdown-menu" data-popper-placement="top-start" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -38.6667px, 0px);">
                                    <li><a class="dropdown-item" id="downloadVisible" href="#"><i class="fas fa-file-csv mx-2"></i> Exportar Exel</a></li>
                                    <li><a class="dropdown-item" id="downloadAll" href="#"><i class="fas fa-file-csv mx-2"></i> Exportar Exel (Todos)</a></li>
                                    </ul>
                                </div>

                                <button class="btn btn-outline-secondary btn-sm border-0" data-bs-toggle="dropdown" aria-expanded="true"><i class="fas fa-ellipsis-vertical"></i></button>


                            </th>
                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <td><a href="#">Nome</a></td>
                            <td><a href="#">email@example.com</a></td>
                            <td><a href="#">(+244) 9XX-XXX-8858</a></td>
                            <td class="text-center" style="width: 5px;">
                                <button class="btn btn-outline-secondary btn-sm border-0"><i class="fas fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td><a href="#">Nome</a></td>
                            <td><a href="#">email@example.com</a></td>
                            <td><a href="#">(+244) 9XX-XXX-8858</a></td>
                            <td class="text-center" style="width: 5px;">
                                <button class="btn btn-outline-secondary btn-sm border-0"><i class="fas fa-ellipsis-vertical"></i></button>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

            <!-- Limite de Registros por Página -->
            <div class="mb-3 d-flex justify-content-between">
            
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <!----------FORM------------>

        <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>

        <div class="mb-3">
        <label for="basic-url" class="form-label">Your vanity URL</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
        </div>

        <div class="input-group mb-3">
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">.00</span>
        </div>

        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
        </div>

        <div class="input-group">
        <span class="input-group-text">With textarea</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>

        <!----------END-FORM-------->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php

require_once './App/Shared/App/DatableScriptAppShared.php';

require_once './App/Shared/App/TemplateEndAppShared.php';

?>
