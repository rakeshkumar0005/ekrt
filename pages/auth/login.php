<div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="http://www.urbanui.com/dashflat/template/images/logo.svg" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6><br>


              <?php 

if(isset($_POST['loginSubmit'])) {
   $email= $_POST['email'];
   $password= $_POST['password'];
     $exist=$db->query("SELECT * FROM users WHERE email='{$email}' AND password='{$password}'");
    

     if(mysqli_num_rows($exist)==1) {


      
      $user=mysqli_fetch_array($exist);

      if($user['status']==1){

          $_SESSION['user']= $email;
          $_SESSION['user_id']= $user['id'];
          header("location:".$base_url);

      echo "<font color=green>User Login!</font>";
    }else{

      echo "<font color=red>User Not Active</font>";

    }
     }else{
      echo "<font color=red>User Not Found!</font>";
     }

}



if(isset($_POST['loginMobile'])) {
   $mobile= $_POST['mobile'];
   $password= $_POST['password'];
   $otp=rand(1111,2222,);
 
     $exist=$db->query("SELECT * FROM users WHERE mobile='{$mobile}' AND password='{$password}'");
    

     if(mysqli_num_rows($exist)==1) {

      $user=mysqli_fetch_array($exist);

      $db->query("UPDATE users SET otp='{$otp}' WHERE mobile ='{$mobile}'");


      if($user['status']==1){

        require  './vendor/autoload.php';

     // Your Account SID and Auth Token from console.twilio.com
     $sid = "AC879b8842d5c504176383fe84e54a4752";
     $token = "75bc29bbc9bea3f23efe6647815fba3e";
     $client = new Twilio\Rest\Client($sid, $token);
     
     // Use the Client to make requests to the Twilio REST API
     $client->messages->create(
         // The number you'd like to send the message to
         '+91'.$mobile,
         [
             // A Twilio phone number you purchased at https://console.twilio.com
             'from' => '+12562977470',
             // The body of the text message you'd like to send
             'body' => "Your Regsiter otp is".$otp
         ]
     );

          
     header("location:http://localhost/ekart/?auth=login_otp&mobile=".$mobile);

      echo "<font color=green>User Login!</font>";
    }else{

      echo "<font color=red>User Not Active</font>";

    }
     }else{
      echo "<font color=red>User Not Found!</font>";
     }

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
  <form class="pt-3" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail">Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" name="email" id="exampleInputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" name="password" id="exampleInputPassword" placeholder="Password">                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="<?= $base_url ?>?auth=forgot" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="loginSubmit">LOGIN</button>
                </div>
                <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-google mr-2"></i>Google
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?= $base_url ?>?auth=register" class="text-primary">Create</a>
                </div>
              </form>
  </div>

  <div class="tab-pane fade" id="mobile-tab-pane" role="tabpanel" aria-labelledby="mobile-tab" tabindex="0">
  <form class="pt-3" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail">Mobile</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="tel" class="form-control form-control-lg border-left-0" name="mobile" id="exampleInputEmail" placeholder="Mobile">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" name="password" id="exampleInputPassword" placeholder="Password">                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="<?= $base_url ?>?auth=forgot" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="loginMobile">LOGIN</button>
                </div>
                <div class="mb-2 d-flex">
                  <button type="button" class="btn btn-facebook auth-form-btn flex-grow mr-1">
                    <i class="mdi mdi-facebook mr-2"></i>Facebook
                  </button>
                  <button type="button" class="btn btn-google auth-form-btn flex-grow ml-1">
                    <i class="mdi mdi-google mr-2"></i>Google
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?= $base_url ?>?auth=register" class="text-primary">Create</a>
                </div>
              </form>
      



  </div>
</div>
            </div>
          