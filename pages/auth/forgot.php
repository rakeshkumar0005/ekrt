<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

?>

   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-light">


            

<main class="form-signin col-5 mt-6  m-auto  text-center">
<img class="mb-4" src="http://www.urbanui.com/dashflat/template/images/logo.svg" alt="" width="72" height="57">
    <h1 class="h4 mb-3 fw-normal text-center">Forgot Password</h1>


    <?php 
  
   if(isset($_POST['emailForgot'])) {

    $email= $_POST['email'];
    $token = rand(121322552,454564646356);

    $exist=$db->query("SELECT * FROM users  WHERE email ='{$email}' ");
     
    $db->query("UPDATE users SET remember_token='{$token}' WHERE email ='{$email}'");

    //Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rakeshkumar9782020@gmail.com';                     //SMTP username
    $mail->Password   = 'hBKzCvqIGsVWa290';                               //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($email, 'Joe User');     //Add a recipient
   
    //Content
    $mail->isHTML(true);                           //Set email format to HTML
    $mail->Subject = 'Change Password';
    $mail->Body    = 'click this link to change password <a href="http://localhost/ekart/?auth=resetpassword&token='.$token.'"><b>Set password</b></a>';

    $mail->send();
    echo '';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
   
   
    echo "<font color=green> Password change link sent on your valid email </font>";

          $_SESSION['user']= $email;
          
          
   }else{

       echo "<font color=red></font>";
   }


   if(isset($_POST['mobileForgot'])) {

    $mobile= $_POST['mobile'];
    $otp = rand(1111,2222);

             $_SESSION['f_mobile'] =$mobile;
    $exist=$db->query("SELECT * FROM users  WHERE mobile ='{$mobile}' ");
     
    $db->query("UPDATE users SET otp='{$otp}' WHERE mobile ='{$mobile}'");

    require  './vendor/autoload.php';

    // Your Account SID and Auth Token from console.twilio.com
    $sid = "AC0f427ddbb38fed5bde8cd26c5646cef7";
    $token = "ae50d69482c704e9e875e8a4e8d460e3";
    $client = new Twilio\Rest\Client($sid, $token);
    
    // Use the Client to make requests to the Twilio REST API
    $client->messages->create(
        // The number you'd like to send the message to
        '+91'.$mobile,
        [
            // A Twilio phone number you purchased at https://console.twilio.com
            'from' => '+12566900453',
            // The body of the text message you'd like to send
            'body' =>'password change '.$mobile.' otp sent on your vailid mobile number'.$otp
        ]
    );
   
    header("location:http://localhost/ekart/?auth=forgot_otp");
    echo "<font color=green> Password change OTP sent on your valid Mobile Number </font>";


   
          
   }else{

       echo "<font color=red> </font>";
   }



?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="email-tab" data-bs-toggle="tab" data-bs-target="#email-tab-pane" type="button" role="tab" aria-controls="email-tab-pane" aria-selected="true">Email Address</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile-tab-pane" type="button" role="tab" aria-controls="mobile-tab-pane" aria-selected="false">Mobile</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="email-tab-pane" role="tabpanel" aria-labelledby="email-tab" tabindex="0">
  

<form class="border card p-3 shadow" method="POST">
    
    <div class="form-floating mb-3">
      <input type="email" class="form-control" name="email" placeholder="name@example.com" fdprocessedid="zyn71">
      <label for="floatingInput">Email address</label>
    </div>

    

    <button class="w-100 btn btn-lg btn-danger mt-4" name="emailForgot" type="submit" fdprocessedid="ka7hfq">Forgot Password</button>

    
   
  </form>
  </div>
  <div class="tab-pane fade" id="mobile-tab-pane" role="tabpanel" aria-labelledby="mobile-tab" tabindex="0">
  <form class="border card p-4 shadow" method="POST">
    
    <div class="form-floating mb-3">
      <input type="tel" class="form-control" name="mobile" placeholder="name@example.com" fdprocessedid="zyn71">
      <label for="floatingInput">Mobile</label>
    </div>

    

    <button class="w-100 btn btn-lg btn-danger mt-4" name="mobileForgot" type="submit" fdprocessedid="ka7hfq">Forgot Password</button>

    
   
  </form>
  </div>

  <p class="mt-2 mb-3 text-body-secondary">© 2017–2023</p>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>