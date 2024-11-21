<?= $this->section('header') ?>

<header class="masthead" style="background-image: url('<?= base_url()?>assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>
                        <?= $publicacion->titulo ?>
                    </h1>
                    <span class="meta">
                        Posted by
                        <a href="#!">Start Bootstrap</a>
                        on August 24, 2023
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>

<?= $this->endSection() ?>

<?= $this->section('contenido') ?>


<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">

    <?= $publicacion->contenido ?>

    </div>
</div>

<?= $this->endSection() ?>

<?= $this->extend('blog/base') ?>