<aside class="left-sidebar sidebar-dark" id="left-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="<?=  base_url(route_to('Panel::index'))  ?>">
                <img src="images/logo.png" alt="Mono">
                <span class="brand-name">Mi BLOG</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-left" data-simplebar style="height: 100%;">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">



                <li class="active">
                    <a class="sidenav-item-link" href="<?=  base_url(route_to('Panel::index'))  ?>">
                        <i class="mdi mdi-briefcase-account-outline"></i>
                        <span class="nav-text"> Inicio </span>
                    </a>
                </li>



                <li class="section-title">
                    Menu
                </li>





                <li>
                    <a class="sidenav-item-link" href="<?=  base_url(route_to('Publicacion::index'))  ?>">
                        <i class="mdi mdi-wechat"></i>
                        <span class="nav-text">Publicaciones</span>
                    </a>
                </li>

                <li>
                    <a class="sidenav-item-link" href="<?=  base_url(route_to('Categoria::index'))  ?>">
                        <i class="mdi mdi-wechat"></i>
                        <span class="nav-text">Categorias</span>
                    </a>
                </li>




                <!-- <li class="has-sub">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email"
                        aria-expanded="false" aria-controls="email">
                        <i class="mdi mdi-email"></i>
                        <span class="nav-text">email</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="email" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li>
                                <a class="sidenav-item-link" href="email-inbox.html">
                                    <span class="nav-text">Email Inbox</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="email-details.html">
                                    <span class="nav-text">Email Details</span>

                                </a>
                            </li>






                            <li>
                                <a class="sidenav-item-link" href="email-compose.html">
                                    <span class="nav-text">Email Compose</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li> -->


            </ul>

        </div>

        <!-- <div class="sidebar-footer">
          <div class="sidebar-footer-content">
            <ul class="d-flex">
              <li>
                <a href="user-account-settings.html" data-toggle="tooltip" title="Profile settings"><i
                    class="mdi mdi-settings"></i></a>
              </li>
              <li>
                <a href="#" data-toggle="tooltip" title="No chat messages"><i class="mdi mdi-chat-processing"></i></a>
              </li>
            </ul>
          </div>
        </div> -->


    </div>
</aside>