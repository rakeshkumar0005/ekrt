<!DOCTYPE html>
<html lang="en">
 

<!-- Mirrored from www.urbanui.com/dashflat/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Aug 2019 18:17:20 GMT -->
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
  <link rel="stylesheet" href="<?= $base_url ?>/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= $base_url ?>/assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= $base_url ?>/assets/images/favicon.png" /> 
</head>
<body>
  <div class="container-scroller">
    <?php include "./partials/Header.php"; ?>
 
  <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    
    <?php include "./partials/Sidebar.php"; ?>
      <!-- partial -->



      

      
      
      
        
      <?php 

if(isset($_GET['page'])){

      if($_GET['page']=="addpost") {
    include "./pages/post/add.php";

      }else if($_GET['page']=="editpost") {
        include "./pages/post/edit.php";
       
      }else if($_GET['page']=="all_post") {
        include "./pages/post/all_post.php";

      } else if($_GET['page']=="delete") {
          include "./pages/post/delete.php";

      }else if($_GET['page']=="view") {
            include "./pages/post/view.php";

         
      }else if($_GET['page']=="update") {
              include "./pages/post/update.php";
    
            }else if($_GET['page']=="all_users") {
              include "./pages/users/all_users.php"; 
              
            }else if($_GET['page']=="view_user") {
              include "./pages/users/view_user.php"; 

            }else if($_GET['page']=="edit_user") {
              include "./pages/users/edit_user.php";
              
            }else if($_GET['page']=="delete_user") {
              include "./pages/users/delete_user.php"; 

            }else if($_GET['page']=="product") {
              include "./pages/users/product.php";

            }else if($_GET['page']=="add_to_cart") {
              include "./pages/users/add_to_cart.php";

            }else if($_GET['page']=="order") {
              include "./pages/users/order.php";

            }else if($_GET['page']=="delete_product") {
              include "./pages/users/delete_product.php";


            }else if($_GET['page']=="delete_order") {
              include "./pages/users/delete_order.php";
            
  
          }else
          

      include "./pages/Home.php"; 
   
    }else
          

    include "./pages/Home.php"; 
 
      
      ?>




   
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="<?= $base_url ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= $base_url ?>/assets/js/off-canvas.js"></script>
  <script src="<?= $base_url ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?= $base_url ?>/assets/js/template.js"></script>
  <script src="<?= $base_url ?>/assets/js/settings.js"></script>
  <script src="<?= $base_url ?>/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?= $base_url ?>/assets/vendors/flot/jquery.flot.js"></script>
  <script src="<?= $base_url ?>/assets/vendors/flot/jquery.flot.resize.js"></script>
  <script src="<?= $base_url ?>/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= $base_url ?>/assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="<?= $base_url ?>/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script> 
  <!-- End plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="<?= $base_url ?>/assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>