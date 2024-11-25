<?= $this->section('contenido') ?>

<div class="row">

    <div class="col-xl-10">
        <!-- Basic Examples -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Crea Publicación</h2>

            </div>
            <div class="card-body">

                <form id="formulario-publicacion" method="POST" action="<?= base_url(route_to('Publicacion::create')) ?>"  enctype="multipart/form-data" >


                    <div class="form-group">
                        <label for="titulo">Titulo de la Publicación</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="">
                        <!-- <span class="mt-2 d-block"></span> -->
                    </div>

                    <div class="form-group">
                        <label for="contenido">Contenido</label>
                        <textarea id="contenido" name="contenido" class="form-control" style="height: 300px"> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="id_categoria">Categoria</label>
                        <select class="form-control" id="id_categoria" name="id_categoria">
                            <option value="">Seleccione</option>
                            <?php foreach ($categorias as $categoria): ?>
                                <option value="<?= $categoria->id_categoria ?>"> <?= $categoria->categoria ?></option>

                            <?php endforeach; ?>

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="estado_publicacion">Estado Publicación</label>
                        <select class="form-control" id="estado_publicacion" name="estado_publicacion">
                            <option value="BORRADOR" selected>BORRADOR</option>
                            <option value="PUBLICADO" selected>PUBLICADO</option>
                            <option value="PENDIENTE" selected>PENDIENTE</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="imagen">Imagen Portada</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen" accept="imagen/jpg, image/png,imagen/jpeg">
                    </div>
                    <div class="form-footer mt-6">
                        <button type="submit"   class="btn btn-primary btn-pill">Guardar</button>
                        <a href="<?= base_url(route_to('Publicacion::index')) ?>" class="btn btn-light btn-pill">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>




    </div>



</div>

<?= $this->endSection() ?>

<?= $this->extend('admin/base') ?>



<?= $this->section('js') ?>

<script src="<?= base_url("admin/scripts/publicacion/nuevo.js") ?>" ></script>

<?= $this->endSection() ?>