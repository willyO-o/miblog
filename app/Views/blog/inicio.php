<?= $this->section('header') ?>

<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Bienvenido a Mi Blog</h1>
                    <span class="subheading">Este es un blog desaroolado en Codeigniter 4</span>
                </div>
            </div>
        </div>
    </div>
</header>

<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">
        <!-- Post preview-->

        <?php foreach ($publicaciones as $publicacion) : ?>


            <div class="post-preview">
                <a href="<?= base_url("posts/".$publicacion->id_publicacion) ?>">
                    <h2 class="post-title">
                        <?= $publicacion->titulo ?>
                    </h2>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on September 24, 2023
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />

        <?php endforeach; ?>

        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->extend('blog/base') ?>


<?= $this->section('css') ?>

<style>
    /* body {
        background-color: green !important;
    } */
</style>


<?= $this->endSection() ?>