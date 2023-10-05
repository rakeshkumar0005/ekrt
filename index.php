<?php
 include "./config/db.php";

 if(isset($_SESSION['user'])){

    include "./layouts/app.php";
 }else{

    
    include "./layouts/auth.php";
 }


?>