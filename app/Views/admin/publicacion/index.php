
<?= $this->section('contenido') ?>

        
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





          <!-- Table Product -->
          <div class="row">
            <div class="col-12">
              <div class="card card-default">
                <div class="card-header">
                  <h2>Products Inventory</h2>
                  <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false"> Yearly Chart
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <table id="productsTable" class="table table-hover table-product" style="width:100%">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Product Name</th>
                        <th>ID</th>
                        <th>Qty</th>
                        <th>Variants</th>
                        <th>Committed</th>
                        <th>Daily Sale</th>
                        <th>Sold</th>
                        <th>In Stock</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      <tr>
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
                        <td>4</td>
                        <td>18</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-02.jpg" alt="Product Image">
                        </td>
                        <td>Toddler Shoes, Gucci Watch</td>
                        <td>24542</td>
                        <td>18</td>
                        <td>7</td>
                        <td>5</td>
                        <td>
                          <div id="tbl-chart-02"></div>
                        </td>
                        <td>1</td>
                        <td>14</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-03.jpg" alt="Product Image">
                        </td>
                        <td>Hat Black Suits</td>
                        <td>24543</td>
                        <td>20</td>
                        <td>3</td>
                        <td>7</td>
                        <td>
                          <div id="tbl-chart-03"></div>
                        </td>
                        <td>6</td>
                        <td>26</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-04.jpg" alt="Product Image">
                        </td>
                        <td>Backpack Gents</td>
                        <td>24544</td>
                        <td>37</td>
                        <td>8</td>
                        <td>3</td>
                        <td>
                          <div id="tbl-chart-04"></div>
                        </td>
                        <td>6</td>
                        <td>7</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-05.jpg" alt="Product Image">
                        </td>
                        <td>Speed 500 Ignite</td>
                        <td>24545</td>
                        <td>8</td>
                        <td>3</td>
                        <td>4</td>
                        <td>
                          <div id="tbl-chart-05"></div>
                        </td>
                        <td>8</td>
                        <td>42</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-06.jpg" alt="Product Image">
                        </td>
                        <td>Olay</td>
                        <td>24546</td>
                        <td>19</td>
                        <td>6</td>
                        <td>6</td>
                        <td>
                          <div id="tbl-chart-06"></div>
                        </td>
                        <td>79</td>
                        <td>12</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-07.jpg" alt="Product Image">
                        </td>
                        <td>Ledger Nano X</td>
                        <td>24547</td>
                        <td>61</td>
                        <td>46</td>
                        <td>18</td>
                        <td>
                          <div id="tbl-chart-07"></div>
                        </td>
                        <td>76</td>
                        <td>36</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-08.jpg" alt="Product Image">
                        </td>
                        <td>Surface Laptop 2</td>
                        <td>24548</td>
                        <td>33</td>
                        <td>56</td>
                        <td>89</td>
                        <td>
                          <div id="tbl-chart-08"></div>
                        </td>
                        <td>38</td>
                        <td>5</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-09.jpg" alt="Product Image">
                        </td>
                        <td>TIGI Bed Head Superstar Queen</td>
                        <td>24549</td>
                        <td>3</td>
                        <td>9</td>
                        <td>15</td>
                        <td>
                          <div id="tbl-chart-09"></div>
                        </td>
                        <td>6</td>
                        <td>46</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-10.jpg" alt="Product Image">
                        </td>
                        <td>Wattbike Atom</td>
                        <td>24550</td>
                        <td>61</td>
                        <td>56</td>
                        <td>68</td>
                        <td>
                          <div id="tbl-chart-10"></div>
                        </td>
                        <td>3</td>
                        <td>19</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-11.jpg" alt="Product Image">
                        </td>
                        <td>Smart Watch</td>
                        <td>24551</td>
                        <td>19</td>
                        <td>76</td>
                        <td>38</td>
                        <td>
                          <div id="tbl-chart-11"></div>
                        </td>
                        <td>3</td>
                        <td>17</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-12.jpg" alt="Product Image">
                        </td>
                        <td>Magic Bullet Blender</td>
                        <td>24552</td>
                        <td>12</td>
                        <td>30</td>
                        <td>14</td>
                        <td>
                          <div id="tbl-chart-12"></div>
                        </td>
                        <td>26</td>
                        <td>9</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-13.jpg" alt="Product Image">
                        </td>
                        <td>Kanana rucksack</td>
                        <td>24553</td>
                        <td>14</td>
                        <td>65</td>
                        <td>39</td>
                        <td>
                          <div id="tbl-chart-13"></div>
                        </td>
                        <td>9</td>
                        <td>55</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-14.jpg" alt="Product Image">
                        </td>
                        <td>Copic Opaque White</td>
                        <td>24554</td>
                        <td>43</td>
                        <td>29</td>
                        <td>75</td>
                        <td>
                          <div id="tbl-chart-14"></div>
                        </td>
                        <td>7</td>
                        <td>15</td>
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

                      <tr>
                        <td class="py-0">
                          <img src="images/products/products-xs-15.jpg" alt="Product Image">
                        </td>
                        <td>Headphones</td>
                        <td>24555</td>
                        <td>17</td>
                        <td>6</td>
                        <td>7</td>
                        <td>
                          <div id="tbl-chart-15"></div>
                        </td>
                        <td>6</td>
                        <td>98</td>
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