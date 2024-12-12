<?php

$navOptions = [
    [
        'modulo' => 'painel',
        'icon' => 'fa-folder',
        'label' => 'Painel',
        'link' => BASE . 'page/app/painel-app-page',
        'total' => 0
    ],
    [
        'modulo' => 'relatorio',
        'icon' => 'fa-chart-simple',
        'label' => 'Relatório',
        'link' => BASE . 'page/app/relatorio-app-page',
        'total' => 0
    ],
    [
        'modulo' => 'conta',
        'icon' => 'fa-user',
        'label' => 'Conta',
        'link' => BASE . 'page/app/conta-app-page',
        'total' => 0
    ],
    [
        'modulo' => 'definicao',
        'icon' => 'fa-cog',
        'label' => 'Definição',
        'link' => BASE . 'page/app/definicao-app-page',
        'total' => 0
    ]
];
?>

<nav class="navbar-vertical navbar bg-white border shadow-none" style="width: 75px;">
    <div class="vh-100 simplebar-scrollable-y" data-simplebar style="padding-top: 50px;">
        <?php foreach ($navOptions as $option): ?>
            <a href="<?php echo $option['link']; ?>">
                <div class="option-container <?php echo (CONFIG['config_modulo'] === $option['modulo']) ? 'highlight' : ''; ?> pt-2">
                    <i class="fas <?php echo $option['icon']; ?>" style="position: relative;">
                        <!-- Contador de total (só mostra se total for maior que 0) -->
                        <?php if ($option['total'] > 0): ?>
                            <span class="badge bg-primary rounded-circle text-white d-inline-flex align-items-center justify-content-center"
                                  style="width: 16px; height: 16px; font-size: 9px; position: absolute; top: 0px; right: -7px;">
                                <?php echo $option['total']; ?>
                            </span>
                        <?php endif; ?>
                    </i>
                    <br>
                    <span><?php echo $option['label']; ?></span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</nav>