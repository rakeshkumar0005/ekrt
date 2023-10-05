<?php

$all=$_GET['id'];
$query= $db->query("DELETE  FROM carts WHERE id='$all'");


echo"deleted";

?>



