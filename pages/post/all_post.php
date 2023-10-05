<div class="main-panel">
        <div class="content-wrapper">
    <div class="row">
      
      <div class="col-12">
      <h2 class="text"><u>All Posts</u></h2><br><br>
      

      <table class="table card table-bordered p-3">

  <thead>
    <tr>
      <th scope="col"><b>Id</b></th>
      <th scope="col"><b>Title</b></th>
      <th scope="col"><b>Heading</b></th>
      <th scope="col"><b>Sub Heading</b></th>
      <th scope="col"><b>Date & Time</b></th>
      <th scope="col"><b>Image</b></th>
      <th scope="col"><b>Authors</b></th>
      <th scope="col"><b>Description</b></th>
    </tr>
<style>
  .text{
    text-align:center;
    font-weight:bold;
    color:green;
  }

  
</style>
<?php

$query= $db->query("SELECT * FROM post");

  while($all=mysqli_fetch_array($query))
{ 

  
  echo"
  <tr>
  <td>".$all['id']."</td>
  <td>".$all['title']."</td>
  <td>".$all['heading']."</td>
  <td>".$all['sub_heading']."</td>
  <td>".$all['date_time']."</td>
  <td>".$all['image']."</td>
  <td>".$all['authors']."</td>
  <td>".$all['description']."</td>
  <td>
  <button class='btn btn-outline-warning'><a href='$base_url?page=view&id=".$all['id']."'>View</a></button></td>
  <td><button class='btn btn-outline-success'><a href='$base_url?page=update&id=".$all['id']."'>Edit</a></button></td>
  <td><button class='btn btn-outline-danger'><a href='$base_url?page=delete&id=".$all['id']."' onclick='return checkdelete()'>Delete</a></button> </td>

 
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