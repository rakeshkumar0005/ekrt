<?php

$all=$_GET['id'];
$query= $db->query("DELETE  FROM carts WHERE id='$all'");


echo"deleted";

?>

<script>
window.location.href='http://localhost/ekart/?page=add_to_cart';
</script>


