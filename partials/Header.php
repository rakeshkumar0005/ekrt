   <?php 
   
   if(isset($_SESSION['user'])){
    $exist=$db->query("SELECT * FROM users WHERE email='{$_SESSION['user']}'");
    $user= $exist->fetch_object();
   // print_r($user);
      

   }
   
   ?>
   
   
   
   <!-- partial:partials/_navbar.html -->
   <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex align-items-center justify-content-between">
        <a class="navbar-brand brand-logo" href="index.html"><img src="http://www.urbanui.com/dashflat/template/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="http://www.urbanui.com/dashflat/template/images/logo-mini.svg" alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <img src="http://www.urbanui.com/dashflat/template/images/sidebar/menu.svg" alt="" class="">
        </button>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group pl-0">
              <input type="text" class="form-control ml-0" placeholder="Search Projects.." aria-label="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex justify-content-center align-items-center font-weight-medium" id="languageDropdown" href="#" data-toggle="dropdown">
              English
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="languageDropdown">
              <a class="dropdown-item preview-item">
              English
              </a>
              <a class="dropdown-item preview-item">
                Arabic
                </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <img src="http://www.urbanui.com/dashflat/template/images/sidebar/mail.svg" alt="" class="">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                <img src="<?= $base_url ?>/assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?= $base_url ?>/assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    New product launch
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="<?= $base_url ?>/assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                  </h6>
                  <p class="font-weight-light small-text text-muted mb-0">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <img src="http://www.urbanui.com/dashflat/template/images/sidebar/notification.svg" alt="" class="">
              <span class="count-circle"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown-navbar">
              <img src="<?= $base_url ?>/assets/images/faces/face29.png" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown flat-dropdown" aria-labelledby="profileDropdown-navbar">
              <div class="flat-dropdown-header">
                <div class="d-flex">
                    <img src="<?= $base_url ?>/assets/images/faces/face29.png" alt="profile" class="profile-icon mr-2">
                    <div>
                      <span class="profile-name font-weight-bold"><?= $user->name ?></span>
                      <p class="profile-designation"><?= $user->email ?></p>
                    </div>
                </div>
              </div>
              <div class="profile-dropdown-body">
                  <ul class="list-profile-items">
                    <li class="profile-item">
                      <a href="#" class="profile-dropdown-link">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-account-outline text-primary"></i>
                            <div>
                              <h5 class="item-title">My Profile</h5>
                              <p class="item-detail">Account settings and more</p>
                            </div>
                          </div>
                      </a>
                    </li>
                    <li class="profile-item">
                      <a href="#" class="profile-dropdown-link">
                        <div class="d-flex align-items-center">
                            <i class="mdi mdi-email-outline text-info"></i>
                            <div>
                              <h5 class="item-title">My Messages</h5>
                              <p class="item-detail">Inbox and tasks</p>
                            </div>
                          </div>
                      </a>           
                    </li>
                    <li class="profile-item">
                      <a href="#" class="profile-dropdown-link">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-vector-polyline text-danger"></i>
                          <div>
                            <h5 class="item-title">My Activities</h5>
                            <p class="item-detail">Logs and notifications</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="profile-item">
                      <a href="#" class="profile-dropdown-link">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-timer-sand text-success"></i>
                          <div>
                            <h5 class="item-title">My Tasks</h5>
                            <p class="item-detail">latest tasks and projects</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="profile-item">
                      <a href="#" class="profile-dropdown-link">
                        <div class="d-flex align-items-center">
                          <i class="mdi mdi-cash-100 text-warning"></i>
                          <div>
                            <h5 class="item-title">Billing</h5>
                            <p class="item-detail">billing &amp; statements <span class="badge badge-danger ml-2">2 Pending</span></p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="profile-item">
                        <a href="./pages/auth/logout.php" class="profile-dropdown-link">
                          <div class="d-flex align-items-center">
                            <i class="mdi mdi-power text-dark"></i>
                            <div>
                              <h5 class="item-title mt-0">Logout</h5>
                            </div>
                          </div>
                        </a>
                      </li>
                  </ul>
                </div>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <img src="http://www.urbanui.com/dashflat/template/images/sidebar/menu.svg" alt="" class="">
        </button>
      </div>
    </nav>
 