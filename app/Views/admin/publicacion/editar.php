<?= $this->section('contenido') ?>

<div class="row">

    <div class="col-xl-10">
        <!-- Basic Examples -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Editar Publicación</h2>

            </div>
            <div class="card-body">

                <form id="formulario-editar-publicacion" method="POST" action="<?= base_url(route_to('Publicacion::update', $publicacion->id_publicacion )) ?>"  enctype="multipart/form-data" >


                    <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="titulo">Titulo de la Publicación</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="" value="<?= $publicacion->titulo ?>">
                        <!-- <span class="mt-2 d-block"></span> -->
                    </div>

                    <div class="form-group">
                        <label for="contenido">Contenido</label>
                        <textarea id="contenido" name="contenido" class="form-control" style="height: 300px"> 
                            <?= $publicacion->contenido ?>
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="id_categoria">Categoria</label>
                        <select class="form-control" id="id_categoria" name="id_categoria">
                            <option value="">Seleccione</option>
                            <?php foreach ($categorias as $categoria): ?>

                                <option 
                                value="<?= $categoria->id_categoria ?>" 
                                <?=  ($publicacion->id_categoria ==  $categoria->id_categoria ? "selected" : "" )   ?>
                                > <?= $categoria->categoria ?></option>

                            <?php endforeach; ?>

                        </select>
                    </div>


                    <div class="form-group">
                        <label for="estado_publicacion">Estado Publicación</label>
                        <select class="form-control" id="estado_publicacion" name="estado_publicacion">
                            <option value="BORRADOR" <?= ($publicacion->estado_publicacion == "BORRADOR") ? "selected": ""   ?> >BORRADOR</option>
                            <option value="PUBLICADO" <?= ($publicacion->estado_publicacion == "PUBLICADO") ? "selected": ""   ?>   >PUBLICADO</option>
                            <option value="PENDIENTE"  <?= ($publicacion->estado_publicacion == "PENDIENTE") ? "selected": ""   ?> >PENDIENTE</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <label for="imagen">Imagen Portada</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/jpg, image/png,image/jpeg">
                    </div>
                    <div class="">
                    <label for="">Imagen Actual</label>

                        <img class="w-25" src="<?= base_url("subidas/imagenes/".$publicacion->imagen) ?>" alt="">
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