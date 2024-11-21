<!DOCTYPE html>

<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- theme meta -->
  <meta name="theme-name" content="mono" />

  <?= $this->include('admin/layouts/css') ?>

</head>


<body class="navbar-fixed sidebar-fixed" id="body">
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>


  <div id="toaster"></div>


  <!-- ====================================
    ——— WRAPPER
    ===================================== -->
  <div class="wrapper">


    <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->

        <?= $this->include('admin/layouts/nav') ?>


    <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
    <div class="page-wrapper">

      <!-- Header -->
      <?= $this->include('admin/layouts/header') ?>
      <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
      <div class="content-wrapper">
        <div class="content">


        <?= $this->renderSection('contenido') ?>




        </div>

      </div>

      <!-- Footer -->
      <?= $this->include('admin/layouts/footer') ?>

    </div>
  </div>



  <?= $this->include('admin/layouts/scripts') ?>


  <!--  -->


</body>

</html>