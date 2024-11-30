<?= $this->section('contenido') ?>


<!-- Table Product -->
<div class="row">
  <div class="col-12">
    <div class="card card-default">
      <div class="card-header">
        <h2>Listado de Categorias</h2>

        <a class="btn  btn-primary" href="<?= base_url(route_to('Categoria::new')) ?>"> Crear Categoria </a>

      </div>
      <div class="card-body">
        <table id="tabla-categoria" class="table table-hover table-product" style="width:100%">
          <thead>
            <tr>
              <th>#</th>
              <th>Categoria</th>
              <th>Descripción</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>

          </tbody>

        </table>

      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>

<?= $this->extend('admin/base') ?>

<?= $this->section('js') ?>

<script src="<?= base_url("admin/scripts/categoria/index.js") ?>"></script>

<?= $this->endSection() ?>
