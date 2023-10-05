<div class="auth-form-transparent text-center p-5 m-auto mb-2">
              <div class="brand-logo">
              
              </div>
              <h2 class="text">Edit Your Post</h2><br><br>


              <?php 

$sql=$db->query("SELECT * FROM post  WHERE id ='{$_GET['postid']}'");
   
$enter= $sql->fetch_array();


 


if(isset($_POST['edit'])) {
  $title= $_POST['title'];
  $heading= $_POST['heading'];
  $sub_heading= $_POST['sub_heading'];
  $date_time= $_POST['date_time'];
  $image= $_POST['image'];
  $description= $_POST['description'];

     
     $db->query("UPDATE  post SET title='{$title}',heading='{$heading}',sub_heading='{$sub_heading}', date_time='{$date_time}',image='{$image}',description='{$description}' WHERE id ='{$_GET['postid']}'");

      echo "<font color=#0ddbb9>Sucessfully Updeted!</font>";
     
   
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
             
              <input type="text" class="form-control" name="title" placeholder="Title" value="<?=$enter['title']?>"> 
            </div>

            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="heading" placeholder="Heading" value="<?=$enter['heading']?>">
              
            </div>

            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="sub_heading" placeholder="Sub Heading" value="<?=$enter['sub_heading']?>">
              
            </div>

            <div class="col-12 mt-3">
              <input type="datetime-local" class="form-control" name="date_time" placeholder="Date Time" value="<?=$enter['date_time']?>">
              
            </div>

            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="image" placeholder="Image">
              
            </div>

            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="description" placeholder="Discription" value="<?=$enter['discription']?>">
              
            </div>

                      
          <button class="w-100 btn btn-dark btn-lg mt-5" type="submit" name="edit">Submit</button>
        </form>
      </div>
    </div>
  </main>

 
    </body>
              
            </div>