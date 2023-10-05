<div class="auth-form-transparent">
              <div class="brand-logo">
              
              </div>
              <h2 class="text1"><u>YOUR POST</u></h2><br>


              <?php 

$sql=$db->query("SELECT * FROM post WHERE id ='{$_GET['id']}'");
   
$enter= $sql->fetch_array();


if(isset($_POST['back'])) {
   $title= $_POST['title'];
   $heading= $_POST['heading'];
   $sub_heading= $_POST['sub_heading'];
   $date_time= $_POST['date_time'];
   $image= $_POST['image'];
   $description=$_POST['description'];
   
    
     
   $db->query("UPDATE post SET title='{$title}',heading='{$heading}',sub_heading='{$sub_heading}', date_time='{$date_time}',image='{$image}',description='{$description}'  WHERE id ='{$_GET['id']}'");
      echo "";
     
   
     }else{
      echo "";
     }


?>

<style>

.text1{
  color:#0007BFF;
  font-weight:bold;
  text-align:center;


}

.text{
  color:black;
  font-weight:bold;
  font-size:14px;
}

.text3{
    color:darkgray;
    font-weight:510;




}

.text6{
    color:black;
    font-weight:510;
    font-size:15px;




}

.text5{
    color:black;
    font-weight:bold;
    margin-left:26px;
    font-size:18px;






}


.text4{
    color:gray;
    font-weight:510;
    font-size:12px;
    margin-left:26px;

    


}
.btn{
    margin-left:26px;
}



 </style> 
<span class="text5"><?= $enter['title']?></span><br><span class="text4"><?= $enter['date_time']?></span><br><br>


<div class="card"  style="width:60%;">
  <img src="assets/images/dashboard/rainfall.jpg"  class="card-img-top" alt="Heavy Rainfall">
  <div class="card-body">
    <p class="card-text">
    <span class="text6"><?= $enter['heading']?></span><br>
<span class="text6"><?= $enter['sub_heading']?></span><br>
<span class="text3"><?= $enter['description']?></span><br>
</p>
  


</div>
</div>

              
          <button class="w-20 btn btn-dark btn-lg mt-5 " class="btn" type="submit" name="back"><a href="http://localhost/ekart/?page=all_post">Back</a></button>
        
  </main>
 
    </body>
              
            </div>