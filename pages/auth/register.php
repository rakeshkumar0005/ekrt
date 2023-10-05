

<div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="http://www.urbanui.com/dashflat/template/images/logo.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Join us today! It takes only few steps</h6><br>


              <?php 

if(isset($_POST['emailSubmit'])) {
   $username= $_POST['username'];
   $name= $_POST['name'];
   $email= $_POST['email'];
   $country= $_POST['country'];
   $password=$_POST['password'];
     $exist=$db->query("SELECT * FROM users WHERE email='{$email}' OR username='{$username}'");
    
     if(mysqli_num_rows($exist)<1) {

      $db->query("INSERT INTO users(username,name,email,country,password) VALUES('{$username}','{$name}','{$email}','{$country}','{$password}')");
      echo "<font color=green>Sucessfully Registred!</font>";
      header("location:".$base_url);
     
   
     }else{
      echo "<font color=red>Email AND Username Already Exist!</font>";
     }

}




if(isset($_POST['mobileSubmit'])) {
  $username= $_POST['username'];
  $name= $_POST['name'];
  $mobile= $_POST['mobile'];
  $country= $_POST['country'];
  $password= $_POST['password']; 
  $otp=rand(1111,2222,);
  

    $exist=$db->query("SELECT * FROM users WHERE mobile='{$mobile}' OR username='{$username}'");
   
    if(mysqli_num_rows($exist)<1)  {

     $db->query("INSERT INTO users(username,name,mobile,country,password,otp) VALUES('{$username}','{$name}','{$mobile}','{$country}','{$password}','{$otp}')");
     
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

     echo "<font color=green>Sucessfully Registred!</font>";
     header("location:http://localhost/ekart/?auth=otp&mobile=".$mobile);

     
    
  
    }else{
     echo "<font color=red>Mobile AND Username Already Exist!</font>";
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
                  <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" name="name" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" class="form-control form-control-lg border-left-0" name="email"  placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control form-control-lg" name="country"  id="exampleFormControlSelect2">
                    <option>Country</option>
                    <option>United States of America</option>
                    <option>United Kingdom</option>
                    <option>India</option>
                    <option>Germany</option>
                    <option>Argentina</option>
                    
                  </select>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" name="password"  placeholder="Password">                        
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" name="emailSubmit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?= $base_url ?>?auth=login" class="text-primary">Login</a>
                </div>
              </form>
   
  </div>
  <div class="tab-pane fade" id="mobile-tab-pane" role="tabpanel" aria-labelledby="mobile-tab" tabindex="0">




  <form class="pt-3" method="POST">
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" name="name" placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label>Mobile Number</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="tel" class="form-control form-control-lg border-left-0" name="mobile"  placeholder="mobile">
                  </div>
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control form-control-lg" name="country"  id="exampleFormControlSelect2">
                    <option>Country</option>
                    <option>United States of America</option>
                    <option>United Kingdom</option>
                    <option>India</option>
                    <option>Germany</option>
                    <option>Argentina</option>
                    
                  </select>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" name="password"  placeholder="Password">                        
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" name="mobileSubmit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >Sign Up</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?= $base_url ?>?auth=login" class="text-primary">Login</a>
                </div>
              </form>
      



  </div>
</div>
            </div>
          