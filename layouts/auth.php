
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/dashflat/template/demo/vertical-default-light/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2019 18:22:25 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashflat Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= $base_url ?>/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= $base_url ?>/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <?php  

            if(isset($_GET['auth'])) {

                if($_GET['auth']=="register"){

                    include "./pages/auth/register.php";

                  }else if($_GET['auth']=="forgot"){
                    
                    include "./pages/auth/forgot.php";
             
                  }else if($_GET['auth']=="resetpassword" && $_GET['token']!="") {
            
                    include "./pages/auth/resetpassword.php"; 

                  }else if($_GET['auth']=="mobile_resetpassword") {
            
                    include "./pages/auth/mobile_resetpassword.php";
                  
                  
                 }else if($_GET['auth']=="otp"){
                    
                  include "./pages/auth/otp.php";

                }else if($_GET['auth']=="forgot_otp"){
                    
                  include "./pages/auth/forgot_otp.php";
                  

                }else if($_GET['auth']=="login_otp"){
                    
                  include "./pages/auth/login_otp.php";
           
                }else{
                    include "./pages/auth/login.php";
              
                  }

            }else{
                include "./pages/auth/login.php";
              
            }
        


?>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="<?= $base_url ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= $base_url ?>/assets/js/off-canvas.js"></script>
  <script src="<?= $base_url ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?= $base_url ?>/assets/js/template.js"></script>
  <script src="<?= $base_url ?>/assets/js/settings.js"></script>
  <script src="<?= $base_url ?>/assets/js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/dashflat/template/demo/vertical-default-light/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2019 18:22:25 GMT -->
</html>
