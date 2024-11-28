
<?= $this->section('contenido') ?>





          <!-- Table Product -->
          <div class="row">
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header">
                  <h2>Products Inventory</h2>

                  <a class="btn btn-primary" href="<?= base_url(route_to('Publicacion::new'))?>" >Nueva Publicación</a>

                </div>
                <div class="card-body">


                  <table id="publicaciones-tabla" class="table table-hover table-product" style="width:100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>imagen</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Categoria</th>
                        <th>Fecha Creación</th>
                        <th>Fecha Publicación</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>

                    <tbody>
                      
                    <tr>
                        <td>1</td>

                        <td class="py-0">
                          <img src="images/products/products-xs-01.jpg" alt="Product Image">
                        </td>
                        <td>Coach Swagger</td>
                        <td>24541</td>
                        <td>27</td>
                        <td>1</td>
                        <td>2</td>
                        <td>
                          <div id="tbl-chart-01"></div>
                        </td>
                        <td>
                          <div class="dropdown">
                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>

                  </table>

                </div>
              </div>
            </div>
          </div>


<?= $this->endSection() ?>

<?= $this->extend('admin/base') ?>

<?= $this->section('js') ?>

<script src="<?= base_url("admin/scripts/publicacion/index.js") ?>" ></script>

<?= $this->endSection() ?>