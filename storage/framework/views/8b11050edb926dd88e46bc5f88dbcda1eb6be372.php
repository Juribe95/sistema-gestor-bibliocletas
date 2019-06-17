<html>
    <head>
        <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="w3/w3.css">
        <link rel="stylesheet" href="w3/w3-theme-black.css">
        <link rel="stylesheet" href="w3/fontawesome.css">
        <link rel="stylesheet" href="w3/google-apis.css">
        <style>
                html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
                .w3-sidebar {
                  z-index: 3;
                  width: 250px;
                  top: 43px;
                  bottom: 0;
                  height: inherit;
                }
                </style>
    </head>
    <body>

        <?php $__env->startSection('navbar'); ?>
        <?php echo $__env->yieldSection(); ?>
        <?php $__env->startSection('sidebar'); ?>

        <?php echo $__env->yieldSection(); ?>

        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->yieldSection(); ?>
        </div>
        
    </body>
</html>
<?php /**PATH C:\laragon\www\sgb\resources\views/layaout.blade.php ENDPATH**/ ?>