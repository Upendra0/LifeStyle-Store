<?php
  require 'includes/common.php';
  if(!isset($_SESSION['id'])) {
      header('location: products.php');
      die();
  }
?>
<!DOCTYPE html>
<!-- Success page of LifeStyle store.
     This page change the status of each product in the cart of user and change it's status ot confirmed.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Buy all  Lifestyle Store </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
        
        <!-- Link to external css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <?php
           $user_id=$_SESSION['id'];
           $all_id=$_SESSION['array_id'];
           foreach ($all_id as $product_id) { 
               $query=" update user_product set user_product.status='confirmed' where user_product.user_id=$user_id and user_product.product_id=$product_id";  
               $res= mysqli_query($con, $query);
           }
           if(isset($_SESSION['array_id'])) {   
               unset($_SESSION['array_id']);    
           }
        ?>
        <div class="container">
            <h4 class="alert alert-success"> Your order is confirmed.<a href="products.php"> Click here </a> to buy more.</h4>
        </div>
       
        <?php
        include 'includes/footer.php';
        ?>
        
    </body>
</html>
