<html lang="en">
    <head>
        <title> <?php echo $__env->yieldContent('title'); ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="w3/w3.css">
        <link rel="stylesheet" href="w3/w3-theme-black.css">
        <link rel="stylesheet" href="w3/fontawesome.css">
        <link rel="stylesheet" href="w3/google-apis.css">
        <link rel="stylesheet" href="js/app.js">
        <link rel="stylesheet" href="js/bootstrap.js">
        <link rel="stylesheet" href="js/all.js">
        <link rel="stylesheet" href="less/fontawesome.less">
        <link rel="stylesheet" href="scss/fontawesome.scss">
        <link rel="stylesheet" href="sprites/solid.svg">
        <link rel="stylesheet" href="js/jquery-1.10.2.js">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <style>
            html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
            .w3-sidebar {
            z-index: 3;
            width: 250px;
            top: 45px;
            bottom: 0;
            height: inherit;
            }
        </style>
    </head>
    <body>

            <?php $__env->startSection('navbar'); ?>

            <!-- Navbar -->
            <div class="w3-top">
                <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
                    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
                    
                    <a href="inicio-admin" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
                </div>
            </div>
        <?php echo $__env->yieldSection(); ?>


        <?php $__env->startSection('sidebar'); ?>
<!-- Sidebar -->
    <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
        <i class="fa fa-remove"></i>
        </a>
            <h4 class="w3-bar-item"><b>Menu</b></h4>
            <a class="w3-bar-item w3-button w3-hover-black" href="inicio-admin">Inicio</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="administrar-libros-admin">Administrar Libros</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="administrar-voluntarios-admin">Administrar Voluntarios</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="administrar-beneficiarios-admin">Administrar Beneficiarios</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="prestamos-devoluciones">Prestamos y Devoluciones</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="categorias">Categorias</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="autores">Autores</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="editoriales">Editoriales</a>
            <a class="w3-bar-item w3-button w3-hover-black" href="reportes">Reportes</a>
    </nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
 <?php echo $__env->yieldSection(); ?>




 <?php $__env->startSection('content'); ?>
 <!-- Contenido de la pagina -->
 <div class="w3-row w3-padding-64">

            <?php $__env->startSection('parte1'); ?>
            <?php echo $__env->yieldSection(); ?>

        
      </div>

      <div class="w3-row">

            <?php $__env->startSection('parte2'); ?>
            <?php echo $__env->yieldSection(); ?>

        
      </div>

      <div class="w3-row w3-padding-64">
        <div class="w3-twothird w3-container">
          <?php $__env->startSection('parte3'); ?>
        </div>
        
      </div>
        <?php echo $__env->yieldSection(); ?>

        <footer id="myFooter">
            <div class="w3-container w3-theme-l2 w3-padding-32">
              <h4>Agrupacion abanico</h4>
            </div>

            <div class="w3-container w3-theme-l1">
              <p><i class="fa fa-copyright" aria-hidden="true"></i> SGB</a></p>
            </div>
          </footer>



      <!-- script -->
      <script>
        // Get the Sidebar
        var mySidebar = document.getElementById("mySidebar");

        // Get the DIV with overlay effect
        var overlayBg = document.getElementById("myOverlay");

        // Toggle between showing and hiding the sidebar, and add overlay effect
        function w3_open() {
          if (mySidebar.style.display === 'block') {
            mySidebar.style.display = 'none';
            overlayBg.style.display = "none";
          } else {
            mySidebar.style.display = 'block';
            overlayBg.style.display = "block";
          }
        }

        // Close the sidebar with the close button
        function w3_close() {
          mySidebar.style.display = "none";
          overlayBg.style.display = "none";
        }
        </script>

  
        





    </body>
</html>
<?php /**PATH C:\Users\informatica3\Documents\sgb\resources\views/Plantilla-tabla-admin.blade.php ENDPATH**/ ?>