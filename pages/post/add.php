<div class="auth-form-transparent text-center p-5 m-auto mb-2">
              <div class="brand-logo">

              </div>
              <h2 class="text">Add Here?</h2><br><br>


              
              <?php 

if(isset($_POST['loginSubmit'])) {
  $title= $_POST['title'];
  $heading= $_POST['heading'];
  $sub_heading= $_POST['sub_heading'];
  $date_time= $_POST['date_time'];
  $image= $_POST['image'];
  $description= $_POST['description'];

   

     $db->query("INSERT INTO post (title,heading,sub_heading,date_time,image,description) VALUES('{$title}','{$heading}','{$sub_heading}','{$date_time}','{$image}','{$description}')");

     echo "<font color=green>Sucessfully posted!</font>";
     ?>
     <script>
         
          window.location.href="http://localhost/ekart/?page=all_post";
         </script>
    
  <?php
    }else{
     echo "";
    }



?>

        

    
 <style>

.text{
  color:#001737;
  font-weight:bold;
}

 </style>    

    

   

        
<div class="col-md-7 col-lg-10 m-auto">
        <form method="POST">
          <div class="row g-3">
            <div class="col-12 mt-3">
             
              <input type="text" class="form-control" name="title" placeholder="Title"> 
            </div>

            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="heading" placeholder="Heading">
              
            </div>

            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="sub_heading" placeholder="Sub Heading">
              
            </div>

            <div class="col-12 mt-3">
              <input type="datetime-local" class="form-control" name="date_time" placeholder="Date Time">
              
            </div>

            <div class="col-12 mt-3">
              <input type="file" class="form-control" name="image" placeholder="Image">
              
            </div>

            <div class="col-12 mt-3">
              <input type="text" class="form-control" name="description" placeholder="Discription">
              
            </div>

                      
          <button class="w-100 btn btn-dark btn-lg mt-5" type="submit" name="loginSubmit">Submit</button>
        </form>
      </div>
    </div>
  </main>

 
    </body>
              
            </div>