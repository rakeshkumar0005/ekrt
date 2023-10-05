<div class="main-panel">
        <div class="content-wrapper">
    <div class="row">
      <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flipkart Navbar</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style16.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect"r hef="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="icon" href="https://www.citypng.com/public/uploads/preview/flipkart-logo-icon-hd-png-11664324777lywvxb7wvs.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style type="text/css">
  
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


  
  .box2{
     background: white;
    border-radius: 5px;
    margin-top: 20px;
    width: 82%;
    padding: auto;
    border: red;
    margin: auto;
    text-align:center;
    box-shadow: 2px 2px 2px 1px rgb(0, 0, 0,0.4);


  }
  .col{
    font-size: 16px;
    text-align: center;

  }

  .color{
    color:green;
  }

  .text{
  color:orange;
  margin:auto;
  text-align:center;
}
  
.img{
  width:50%;
  height:120px;
}

</style>
<h4 class="text"><u>PRODUCTS</u></h4><br><br>
<body>

<div class="box2 my-2 ">
<div class="row row-cols-5 gap-5 my-5">
  
<?php


   if(isset($_POST['buybtn'])){
    $pdi= $_POST['product_id'];
    

    $exist= $db->query("SELECT * FROM carts WHERE product_id='{$pdi}'");

    if(mysqli_num_rows($exist)<1) {
       $db->query("INSERT INTO carts(product_id,user_id,status) VALUES('{$pdi}','{$_SESSION['user_id']}','1')");
       ?>
<script>
       window.location.href="http://localhost/ekart/?page=add_to_cart";
       </script>


       <?php
    }else{

    }
   

     
}


$query= $db->query("SELECT * FROM products");


while($all=mysqli_fetch_array($query))
{ 


echo"
<tr>
<div class='col'>
<td><img class='img' src='".$all['image']."'></td><br>
<td>".$all['name']."</td>
<td><span class='color'>₹".$all['price']."</span></td>

<td>
<form method='post'>
<input type='hidden' value=".$all['id']." name='product_id'/>
<button type='submit' name='buybtn' class='btn btn-outline-primary my-1'><a href='http://localhost/ekart/?page=order&id=".$all['id']."'>Buy now</a></button>
<button type='submit' name='buybtn' class='btn btn-outline-warning my-1'>Add to cart</button>

</form>

</div>

</tr>
   ";



}



?>


</div>
</div>


</html>