<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="index.html">Mi Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('inicio') ?>">Inicio</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('sobre-mi') ?>">Sobre Mi</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('contacto') ?>">Contacto</a></li>
                <?php if (auth()->loggedIn()) : ?>

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url(route_to('Publicacion::index')) ?>">Administración</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('logout') ?>">Cerrar Sesion</a></li>
                <?php else: ?>

                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= base_url('login') ?>">Login</a></li>

                <?php endif ?>

            </ul>
        </div>
    </div>
</nav>