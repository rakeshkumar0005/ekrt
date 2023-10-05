

<div class="auth-form-transparent">
              <div class="brand-logo">
                <div class="row">
                  <div class="col"><h2 class="text"><u>Billing Address</u></h2><br><br>
                  <div class="row">
  <div class="col-25">
    <div class="container">
      <form method="POST">

        <div class="row">
          <div class="col-50">
          <?php
         
if(isset($_POST['clicksubmit'])) {
    $full_name= $_POST['full_name'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $address= $_POST['address'];
    $city= $_POST['city'];
    $state=$_POST['state'];
    $pin=$_POST['pin'];
    $price=$_POST['price'];
    $payment_id=$_POST['payment_id'];

    $exist=$db->query("SELECT * FROM place_order WHERE email='{$email}'");

     if(mysqli_num_rows($exist)<1) {
       $db->query("INSERT INTO place_order(user_id,full_name,email,mobile,address,city,state,pin,price,payment_id) VALUES ('{$_SESSION['user_id']}','{$full_name}','{$email}','{$mobile}','{$address}','{$city}','{$state}','{$pin}','{$price}','{$payment_id}')");
       
       $db->query("DELETE  FROM carts WHERE user_id='{$_SESSION['user_id']}'");
       ?>
       <script>
              window.location.href="http://localhost/ekart/?page=product";
              </script>
       
       
              <?php
       echo "<font color=green>Sucessfully order!</font>";
       
      }else{
       echo "<font color=red>Something Wrong</font>";
      }
    }
 


?>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" name="full_name" placeholder="xyz">

            <label for="email"><i class="fa fa-envelope"></i>Email</label>
            <input type="text" name="email" placeholder="abcd@example.com">

            <label for="email"><i class="fa fa-envelope"></i>Mobile</label>
            <input type="text" name="mobile" value="+91" placeholder="1234567890">

            <label for="adr"><i class="fa fa-address-card-o"></i>Address</label>
            <input type="text" name="address" placeholder="">

            <label for="city"><i class="fa fa-institution"></i>City</label>
            <input type="text" name="city" placeholder="" >

            <label for="adr"><i class="fa fa-address-card-o"></i>Amount</label>
            <input type="text" name="price" id="Price" readonly  placeholder="">

            <label for="city"><i class="fa fa-institution"></i>Payment ID</label>
            <input type="text" name="payment_id"  id="Payment_id" readonly  placeholder="">


            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" name="state" placeholder="">
              </div>
              <div class="col-50">
                <label for="zip">Pin</label>
                <input type="text" name="pin" placeholder="******">
              </div>
            </div>
          </div>

          
          </div>

        </div>
        <label>
            <br>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <button type="submit" id="payment" class="btn">Continue to pay</button><br><br>

        <button type="submit" name="clicksubmit" id="submit" class="btn">Submit</button><br>

      </form>
      <button class="btn2 btn-dark btn-lg mt-2" type="submit" name="back"><a href="http://localhost/ekart/?page=product">Back</a></button>

    </div>
  </div>



</div>
                  <div class="col"><h2 class="text"><u>Product</u></h2><br><br>

                  <div class="auth-form-transparent">
              <div class="brand-logo">
              
             

              <div class="box2 mx-5 my-2">
<div class="row my-4">
              <?php 

$sql=$db->query("SELECT * FROM products  WHERE id='{$_GET['id']}'");
   
$all= $sql->fetch_array();


if(isset($_POST['submit'])) {
   $name= $_POST['name'];
   $price= $_POST['price'];
   $image= $_POST['image'];
   $status= $_POST['status'];
   
    

}
?>

<style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


  
  .box2{
     background: white;
    border-radius: 5px;
    margin-top: 20px;
    padding:20px;
    width: 100%;
    border: red;
    margin: auto;
    text-align: center;
    

    box-shadow: 2px 2px 2px 1px rgb(0, 0, 0,0.4);


  }

  #submit{
    display:none;
  }
  .col{
    font-size: 16px;
    text-align: center;

  }

  .color{
    color:green;
  }

  .text1{
    margin:auto;
    text-align:center;
  }

.text6{
  color:green;
}






.btn{
    margin:auto;
}

.img{
  width:50%;
}
 

  


 </style> 
  
<?="<img class='img' src='".$all['image']."'>" ?>
  <div class="card-body">
    <p class="card-text">
    <h4><span class="text5"><?= $all['name']?></span></h4><br>
<span class="text6">₹<?= $all['price']?></span><br>
</p> 
  
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_CBxehn4e1Lfrpx", // Enter the Key ID generated from the Dashboard
    "amount": "<?= $all['price'] ?>"*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Dash Flat",
    "description": "Test Transaction",
    "image": "http://www.urbanui.com/dashflat/template/images/logo.svg",
    // "order_id": "order_IluGWxBm9U8zJ8", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler":function (response){

        document.getElementById('Payment_id').value = response.razorpay_payment_id;

        document.getElementById('Price').value = <?= $all['price']?>;

        document.getElementById('submit').style.display ='block';

        },

          
    "prefill": {
        "name":"Gaurav Kumar",
        "email":"gaurav.kumar@example.com",
        "contact":"9000090000"
    },
    
    "theme": {
        "color": "#04AA6D"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('payment').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>    

  </main>
 
    </body>
              
            </div>

          

</div>
</div>

</div>
<style>


.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
  margin:15px;
  
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.text{
    text-align:center;
    font-weight:bold;
    color:#00aa8c;
    margin:auto;    
  }


.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;

  
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}



.btn:hover {
  background-color: #45a049;
}

span.price {
  float: right;
  color: grey;
}
.btn2{
    margin:auto;
    padding:8px 20px 8px 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

</style>

<br>
      



</html>









