<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url()?>css/styles.css" rel="stylesheet" />

        <?= $this->renderSection('css') ?>

    </head>
    <body>

        <!-- Navigation-->

        <?= $this->include('blog/layouts/nav') ?>

        <!-- Page Header-->
  

        <?= $this->renderSection('header') ?>
         
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">

        <?= $this->renderSection('contenido'); ?>

        </div>

        <!-- Footer-->

      
        <?= $this->include('blog/layouts/footer') ?>


        <?= $this->include('blog/layouts/scripts') ?>

        <?= $this->renderSection('js') ?>


    </body>
</html>
