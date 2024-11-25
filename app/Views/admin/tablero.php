
<?= $this->section('contenido') ?>

        
      <div class="row justify-content-center mb-3">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body ">
              <h3 class="text-center">Bienvenido  <?=  auth()->user()->username  ?>  </h3>
            </div>
          </div>
        </div>
      </div>


          <!-- Top Statistics -->
          <div class="row">
            <div class="col-xl-3 col-sm-6">
              <div class="card card-default ">
                <div class="card-header">
                  <h2>$18,699</h2>
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
                  <div class="sub-title">
                    <span class="mr-1">Sales of this year</span> |
                    <span class="mx-1">45%</span>
                    <i class="mdi mdi-arrow-up-bold text-success"></i>
                  </div>
                </div>

    

              </div>
            </div>

            <div class="col-xl-3 col-sm-6">
              <div class="card card-default ">
                <div class="card-header">
                  <h2>$14,500</h2>
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
                  <div class="sub-title">
                    <span class="mr-1">Expense of this year</span> |
                    <span class="mx-1">50%</span>
                    <i class="mdi mdi-arrow-down-bold text-danger"></i>
                  </div>
                </div>

              </div>
            </div>


            <div class="col-xl-3 col-sm-6">
              <div class="card card-default ">
                <div class="card-header">
                  <h2>$4199</h2>
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
                  <div class="sub-title">
                    <span class="mr-1">Profit of this year</span> |
                    <span class="mx-1">20%</span>
                    <i class="mdi mdi-arrow-down-bold text-danger"></i>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-xl-3 col-sm-6">
              <div class="card card-default ">
                <div class="card-header">
                  <h2>$20,199</h2>
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
                  <div class="sub-title">
                    <span class="mr-1">Revenue of this year</span> |
                    <span class="mx-1">35%</span>
                    <i class="mdi mdi-arrow-up-bold text-success"></i>
                  </div>
                </div>

              </div>
            </div>
          </div>








<?= $this->endSection() ?>

<?= $this->extend('admin/base') ?>