<?= $this->section('contenido') ?>

<div class="row">

    <div class="col-xl-10">
        <!-- Basic Examples -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Editar Categoria</h2>

            </div>
            <div class="card-body">

                <form id="formulario-editar-categoria" method="POST" action="<?= base_url(route_to('Categoria::update',$categoria->id_categoria)) ?>">

                        <input type="hidden" name="_method" value="PUT">

                    <div class="form-group">
                        <label for="categoria">Nombre de la Categoria</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" placeholder="" value="<?= $categoria->categoria ?>">
                        <!-- <span class="mt-2 d-block"></span> -->
                    </div>

                    <div class="form-group">
                        <label for="descripcion_categoria">Descripción </label>
                        <textarea id="descripcion_categoria" name="descripcion_categoria" class="form-control" rows="3" > 
                        <?= $categoria->descripcion_categoria ?>
                        </textarea>
                    </div>


                    <div class="form-group">
                        <label for="estado_categoria">Estado de la Categoria</label>
                        <select class="form-control" id="estado_categoria" name="estado_categoria">
                            <option value="ACTIVO" <?= ($categoria->estado_categoria == 'ACTIVO' ? "selected" : "" ) ?> >ACTIVO</option>
                            <option value="INACTIVO" <?= ($categoria->estado_categoria == 'INACTIVO' ? "selected" : "" ) ?> >INACTIVO</option>
                        </select>
                    </div>


                    <div class="form-footer mt-6">
                        <button type="submit"   class="btn btn-primary btn-pill">Guardar</button>
                        <a href="<?= base_url(route_to('Categoria::index')) ?>" class="btn btn-light btn-pill">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>




    </div>



</div>

<?= $this->endSection() ?>

<?= $this->extend('admin/base') ?>



<?= $this->section('js') ?>

<script src="<?= base_url("admin/scripts/categoria/nuevo.js") ?>" ></script>

<?= $this->endSection() ?>