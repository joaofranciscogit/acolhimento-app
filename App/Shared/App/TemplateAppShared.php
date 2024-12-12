<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="Codescandy" />
      <title>Gestão Hospitalar</title>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE; ?>App/Asset/logo/icon.svgx" />
      <link href="<?php echo BASE; ?>App/Asset/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
      <link href="<?php echo BASE; ?>App/Asset/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
      <link href="<?php echo BASE; ?>App/Asset/libs/flatpickr/dist/flatpickr.min.css" rel="stylesheet" />
      <link href="<?php echo BASE; ?>App/Asset/fonts/feather/feather.css" rel="stylesheet" />
      <link href="<?php echo BASE; ?>App/Asset/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
      <link href="<?php echo BASE; ?>App/Asset/libs/simplebar/dist/simplebar.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="<?php echo BASE; ?>App/Asset/css/theme.min.css">
      <link rel="stylesheet" href="<?php echo BASE; ?>App/Asset/Asset.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
      
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script src="<?php echo BASE; ?>App/Asset/js/vendors/darkMode.js"></script>



   </head>
   <body>
      <div id="loaderOverlay" style="display: none;">
         <div class="spinner"></div>
      </div>
      <style>
         #loaderOverlay {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.5);
         display: flex;
         justify-content: center;
         align-items: center;
         z-index: 9999;
         }
         .spinner {
         border: 4px solid #f3f3f3;
         border-top: 4px solid #3498db;
         border-radius: 50%;
         width: 40px;
         height: 40px;
         animation: spin 1s linear infinite;
         }
         @keyframes spin {
         0% { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
         }
      </style>


      <div class="header border shadow-none fixed-top">
         <nav class="navbar-default navbar navbar-expand-lg shadow-none" style="height: 50px;">
            <a id="nav-toggle" href="#">
            <i class="fas fa-bars" style="font-weight: bold; font-size: 15px;"></i>
            </a>
             
            <img src="<?php echo BASE; ?>App/Logo/logo.png" class="ml-3 mx-3" width="30px;">

             <a href="#" class="text-dark fw-bold">CACAJ - Centro de Acolhimento Arnaldo Janssen</a>
            

            <div class="ms-auto d-flex">
           
               <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">

                  <li>
                     <!-- Alteração de Tema -->
                     <div class="dropdown mx-3">
                           <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (auto)">
                              <i class="bi theme-icon-active"><i class="bi theme-icon bi-sun-fill"></i></i>
                              <span class="visually-hidden bs-theme-text">Toggle theme</span>
                           </button>
                           <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                              <li>
                                 <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                                       <i class="bi theme-icon bi-sun-fill"></i>
                                       <span class="ms-2">Light</span>
                                 </button>
                              </li>
                              <li>
                                 <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                       <i class="bi theme-icon bi-moon-stars-fill"></i>
                                       <span class="ms-2">Dark</span>
                                 </button>
                              </li>
                              <li>
                                 <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                       <i class="bi theme-icon bi-circle-half"></i>
                                       <span class="ms-2">Auto</span>
                                 </button>
                              </li>
                           </ul>
                     </div>
                  </li>
                 
                   <li class="mt-2">
                    <span style="font-size: 12px;"><?php echo $_SESSION['conta']['conta_nome']; ?></span>
                   </li>

                  <li class="dropdown ms-2">
                     
                     <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md avatar-online">
                        <i class="fas fa-user-circle mt-2" style="font-size: 25px;"></i>
                        </div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        <div class="dropdown-item">
                           <div class="d-flex">
                              <div class="ms-3 lh-1">
                                 <h5 class="mb-1"><?php echo $_SESSION['conta']['conta_nome']; ?></h5>
                                 <p class="mb-0"><?php echo $_SESSION['conta']['conta_email']; ?></p>
                              </div>
                           </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <ul class="list-unstyled">
                           <li>
                              <a class="dropdown-item" href="<?php echo BASE.'service/auth/logout-auth-service'; ?>">
                              <i class="fe fe-power me-2"></i>
                              Terminar Sessão
                              </a>
                           </li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
      <div id="db-wrapper">
      
      <?php require_once './App/Shared/App/SidebarAppShared.php'; ?>

      <main id="page-content">
      <section class="container-fluid p-4" style="margin-top: 65px;">

      
<div class="d-flex align-items-center mb-5">
        <!--<i class="<?php echo CONFIG['config_icone']; ?>  me-3" style="font-size: 34px;"></i>-->
        <div>
            <h1 class="h5" style=""><?php echo CONFIG['config_title']; ?></h1>
            <p class="text-muted mb-0"><?php echo CONFIG['config_detail']; ?></p>
        </div>
</div>