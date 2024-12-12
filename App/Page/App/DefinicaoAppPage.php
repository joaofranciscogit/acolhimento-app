<?php

require_once './App/Config/Class.php';

define('CONFIG', [
    'config_modulo' => 'definicao',
    'config_title' => 'Definição',
    'config_detail' => 'Nesse painel, você encontrará todos os serviços de consulta disponíveis.',
    'config_icone' => 'fas fa-list-alt'
]);

require_once './App/Shared/App/TemplateAppShared.php';

$cards = [
    [
        'icon' => 'fas fa-layer-group', // Ícone para Tipos
        'title' => 'Tipos',
        'description' => 'Tipos de Conteúdos',
        'link' => '#'
    ],
    [
        'icon' => 'fas fa-tags', // Ícone para Categorias
        'title' => 'Categorias',
        'description' => 'Categorias de Conteúdos',
        'link' => '#'
    ]
];


?>

<div class="row">

    <?php foreach ($cards as $card): ?>

        <div class="col-auto mb-4">
            <a class="card card-hover-shadow border-0" href="<?php echo $card['link']; ?>">
                <div class="card-body">
                    <div class="d-flex align-items-center mt-1">
                        <div class="flex-shrink-0">
                            <i class="<?php echo $card['icon']; ?> nav-icon mx-3"></i>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5 class="text-inherit mb-0"><?php echo $card['title']; ?></h5>
                            <span class="text-body"><?php echo $card['description']; ?></span>
                        </div>
                        <div class="ms-2 text-end">
                            <i class="fas fa-chevron-right text-body text-inherit mx-2"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    <?php endforeach; ?>

</div>

<?php

require_once './App/Shared/App/TemplateEndAppShared.php';

?>