<?php

require_once './App/Config/Class.php';

define('CONFIG', [
    'config_modulo' => 'painel',
    'config_title' => 'Painel',
    'config_detail' => 'Nesse painel, você encontrará todos tipos de conteúdos a cadastrar.',
    'config_icone' => 'fas fa-list-alt'
]);

require_once './App/Shared/App/TemplateAppShared.php';

$cards = [
    [
        'icon' => 'fas fa-child', // Ícone para crianças
        'title' => 'Crianças',
        'description' => 'Gerenciar dados',
        'link' => BASE.'page/app/crianca-lista-page'
    ],
    [
        'icon' => 'fas fa-tasks', // Ícone para atividades
        'title' => 'Atividades',
        'description' => 'Planejar tarefas',
        'link' => '#'
    ],
    [
        'icon' => 'fas fa-hand-holding-heart', // Ícone para doações
        'title' => 'Doações',
        'description' => 'Registrar apoio',
        'link' => '#'
    ],
    [
        'icon' => 'fas fa-exclamation-circle', // Ícone para situações
        'title' => 'Situações',
        'description' => 'Registrar eventos',
        'link' => '#'
    ],
    [
        'icon' => 'fas fa-sign-out-alt', // Ícone para desligamento
        'title' => 'Desligamento',
        'description' => 'Gerenciar saídas',
        'link' => '#'
    ],
    [
        'icon' => 'fas fa-user-friends', // Ícone para responsáveis
        'title' => 'Responsáveis',
        'description' => 'Cadastrar tutores',
        'link' => '#'
    ],
    [
        'icon' => 'fas fa-exchange-alt', // Ícone para movimentos
        'title' => 'Movimentos',
        'description' => 'Gerir entradas',
        'link' => '#'
    ],
    [
        'icon' => 'fas fa-random', // Ícone para transferências
        'title' => 'Transferências',
        'description' => 'Gerir Tranferências',
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
