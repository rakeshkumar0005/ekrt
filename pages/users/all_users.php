<div class="main-panel">
        <div class="content-wrapper">
    <div class="row">
      
      <div class="col-12">
      <h2 class="text"><u>All Users</u></h2><br><br>
      

      <table class="table card table-bordered p-3">

  <thead>
    <tr>
      <th scope="col"><b>Id</b></th>
      <th scope="col"><b>Usersname</b></th>
      <th scope="col"><b>Name</b></th>
      <th scope="col"><b>Email</b></th>
      <th scope="col"><b>Country</b></th>
      <th scope="col"><b>Password</b></th>
      <th scope="col"><b>Status</b></th>
      <th scope="col"><b>User Post</b></th>
     


    </tr>
<style>
  .text{
    text-align:center;
    font-weight:bold;
    color:green;
  }

  
</style>


<?php

$query= $db->query("SELECT * FROM users");

while($result = mysqli_fetch_array($query))
{
  $row= $db->query("SELECT * FROM post  WHERE user_id='{$result['id']}'");
   
  $total=mysqli_num_rows($row);
  
  
  echo"
  <tr>
  <td>".$result['id']."</td>
  <td>".$result['username']."</td>
  <td>".$result['name']."</td>
  <td>".$result['email']."</td>
  <td>".$result['country']."</td>
  <td>".$result['password']."</td>
  <td>".$result['status']."</td>
  <td><a href='http://localhost/ekart/?page=all_post'>".$total."</a></td>

  <td>
  <button class='btn btn-outline-warning'><a href='$base_url?page=view_user&id=".$result['id']."'>View</a></button></td>
  <td><button class='btn btn-outline-success'><a href='$base_url?page=edit_user&id=".$result['id']."'>Edit</a></button></td>
  <td><button class='btn btn-outline-danger'><a href='$base_url?page=delete_user&id=".$result['id']."' onclick='return checkdelete()'>Delete</a></button> </td>

 
</tr>
     ";

}
 ?>


 
</thead>
</table>

      </div>
</div>
</div>

</div>


<script>
  function checkdelete(){
    return confirm('Are you sure you want to delete?');
  }

</script>
</html>