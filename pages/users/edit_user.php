<div class="auth-form-transparent text-center p-5 m-auto mb-2">
              <div class="brand-logo">
              
              </div>
              <h2 class="text">Edit Your Post</h2><br><br>


              <?php 

$sql=$db->query("SELECT * FROM users  WHERE id ='{$_GET['id']}'");
   
$enter= $sql->fetch_array();


 


if(isset($_POST['edit'])) {
    $username= $_POST['username'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $country= $_POST['country'];
    $status=$_POST['status'];
     

     
    $db->query("UPDATE users SET username='{$username}',name='{$name}',email='{$email}', country='{$country}',status='{$status}'  WHERE id ='{$_GET['id']}'");
    echo "Successfully Edited";
    ?>
         <script>
         
          window.location.href="http://localhost/ekart/?page=all_users";
         </script>

     
   <?php
   
     }else{
      echo "";
     }


?>

<style>

.text{
  color:#0ddbb9;
  font-weight:bold;
}

 </style> 


<div class="col-md-7 col-lg-10 m-auto">
        <form method="POST">
          <div class="row g-3">
            <div class="col-12 mt-3">
             
              <input type="text" class="form-control" name="username" placeholder="Username" value="<?=$enter['username']?>"> 
            </div>

            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="name" placeholder="Name" value="<?=$enter['name']?>">
              
            </div>

            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="email" placeholder="Email" value="<?=$enter['email']?>">
              
            </div>

            <div class="col-12 mt-3">
              <input type="datetime-local" class="form-control" name="country" placeholder="Country" value="<?=$enter['country']?>">

            </div>

           
            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="status" placeholder="Status" value="<?=$enter['status']?>">
              
            </div>

           

                      
          <button class="w-100 btn btn-dark btn-lg mt-5" type="submit" name="edit">Submit</button>
        </form>
      </div>
    </div>
  </main>

 
    </body>
              
            </div>