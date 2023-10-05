<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-light">
  

<main class="form-signin col-6 mt-5  m-auto  text-center">
<img class="mb-4" src="http://www.urbanui.com/dashflat/template/images/logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal text-center">OTP</h1>

    <?php

    if(isset($_POST['otpsubmit'])){
        $mobile = $_GET['mobile'];
        $otp = $_POST['otp'];
         
     
         $query=$db->query("SELECT * FROM users  WHERE mobile='{$mobile}' AND otp ='{$otp}'");
        
         if(mysqli_num_rows($query)==1){
     
           $db->query("UPDATE users SET status='1' WHERE mobile ='{$mobile}'");
           
           $_SESSION['user']= $mobile;

           header("location:".$base_url);
                echo "Verified OTP";
                
                
                
         }else{
     
             echo "OTP Not Match";
         }
     
    }


?>




    <form class="border card p-4 shadow" method="POST">
    <div class="form-floating mb-3">
    <input type="tel"  class="form-control" name="otp" placeholder="enter otp" fdprocessedid="zyn71" required >
      <label for="floatingInput">Enter OTP</label>
    </div>



    
    <button class="w-100 btn btn-lg btn-primary mt-4" name="otpsubmit" type="submit" fdprocessedid="ka7hfq">Submit</button>
   
  </form>
  <p class="mt-2 mb-3 text-body-secondary">© 2017–2023</p>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>