<?php 
   
   if(isset($_SESSION['user'])){
    $exist=$db->query("SELECT * FROM users WHERE email='{$_SESSION['user']}'");
    $user= $exist->fetch_object();
   // print_r($user);
     

   }
   
   ?>
   
   <!-- partial:partials/_settings-panel.html -->
  <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles primary"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div> 
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile dropdown">
            <div>
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown" aria-expanded="false">
                  <div class="d-flex">
                      <img src="<?= $base_url ?>/assets/images/faces/face29.png" alt="profile">
                      <div>
                        <span class="sidebar-profile-name font-weight-bold"><?= $user->name ?></span>
                        <p class="sidebar-profile-designation text-muted text-small"><?= $user->created_at ?></p>
                      </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item">
                    <i class="mdi mdi-settings text-primary"></i>
                    Settings
                  </a>
                  <a href="./pages/auth/logout.php" class="dropdown-item ">
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout
                  </a>
                </div>
              </div>
          </li>
          <li class="nav-item">
            <div class="sidebar-menu-title">
              <img src="http://www.urbanui.com/dashflat/template/images/sidebar/home.svg" alt="" class="sidebar-icon-title"> <span>Navigation</span>
            </div>
              <ul class="nav submenu-wrapper">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                      <span class="menu-title">Dashboard </span>
                    </a>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <div class="sidebar-menu-title">
                <img src="http://www.urbanui.com/dashflat/template/images/sidebar/ui.svg" alt="" class="sidebar-icon-title">  <span>Posts</span>
            </div>
            <ul class="nav submenu-wrapper">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/ekart/?page=all_post">
                  <span class="menu-title">All Posts</span>
                  <i class="menu-arrow"></i>
                </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/ekart/?page=addpost">
                  <span class="menu-title">Add</span>
                  <i class="menu-arrow"></i>
                </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="http://localhost/ekart/?page=editpost">
                  <span class="menu-title">Edit</span>
                  <i class="menu-arrow"></i>
                </a>
                
              </li>
              
              <br>
              <li class="nav-item">
            <div class="sidebar-menu-title">
                <img src="http://www.urbanui.com/dashflat/template/images/sidebar/ui.svg" alt="" class="sidebar-icon-title">  <span>USERS</span>
            </div>
            <ul class="nav submenu-wrapper">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/ekart/?page=all_users">
                  <span class="menu-title">All Users</span>
                  <i class="menu-arrow"></i>
                </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="http://localhost/ekart/?page=product">
                  <span class="menu-title">Product</span>
                  <i class="menu-arrow"></i>
                </a>
  </li>
             
              <li class="nav-item">
                <a class="nav-link"  href="http://localhost/ekart/?page=add_to_cart">
                  <span class="menu-title">Add to cart</span>
                  <i class="menu-arrow"></i>
                </a>
                <br>
              </li>
              
          <li class="nav-item">
            <div class="sidebar-menu-title">
                <img src="http://www.urbanui.com/dashflat/template/images/sidebar/data.svg" alt="" class="sidebar-icon-title">  <span>Data</span>
            </div>
            <ul class="nav submenu-wrapper">
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                  <span class="menu-title">Charts</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                  <span class="menu-title">Tables</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="tables">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                  <span class="menu-title">Maps</span>
                  <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <div class="sidebar-menu-title">
                <img src="http://www.urbanui.com/dashflat/template/images/sidebar/web.svg" alt="" class="sidebar-icon-title">  <span>Web Applications</span>
            </div>
            <ul class="nav submenu-wrapper">
              <li class="nav-item">
                <a class="nav-link" href="pages/apps/calendar.html">
                  <span class="menu-title">Calendar</span>
                  <label class="hightlight-sidebar bg-success"></label>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/apps/email.html">
                  <span class="menu-title">E-mail</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/widgets/widgets.html">
                  <span class="menu-title">Widgets</span>
                  <label class="hightlight-sidebar bg-primary"></label>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/apps/todo.html">
                  <span class="menu-title">Todo List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/apps/gallery.html">
                  <span class="menu-title">Gallery</span>
                  <label class="hightlight-sidebar bg-warning"></label>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
              <div class="sidebar-menu-title">
                  <img src="http://www.urbanui.com/dashflat/template/images/sidebar/pages.svg" alt="" class="sidebar-icon-title">  <span>Pages</span>
              </div>
              <ul class="nav submenu-wrapper">
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                    <span class="menu-title">Error pages</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="error">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                    <span class="menu-title">General Pages</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="general-pages">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                    <span class="menu-title">E-commerce</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="e-commerce">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                      <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                    </ul>
                  </div>
                </li>
              </ul>
          </li>
          <li class="nav-item">
            <div class="sidebar-menu-title">
                <img src="http://www.urbanui.com/dashflat/template/images/sidebar/doc.svg" alt="" class="sidebar-icon-title">  <span>Help</span>
            </div>
            <ul class="nav submenu-wrapper">
              <li class="nav-item">
                <a href="http://www.urbanui.com/dashflat/docs/documentation.html" class="nav-link">
                  <span class="menu-title">Documentation</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>