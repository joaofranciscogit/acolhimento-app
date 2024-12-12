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
      <script>
         function showLoader() {
             
          
             document.getElementById('loaderOverlay').style.display = 'flex';
                 }
         
                 function hideLoader() {
             document.getElementById('loaderOverlay').style.display = 'none';
         }


         

         function go(location){
            setTimeout(function() {
               window.location.href = location;
            }, 2000);
         }
         
      </script>

<main>