<?php

$all=$_GET['id'];
$query= $db->query("DELETE  FROM post WHERE id= '$all'");


echo"deleted";

 
{ 

  
  echo"";

}

?>

<script>
window.location.href='http://localhost/ekart/?page=all_post';
</script>