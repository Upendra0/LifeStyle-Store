<?php
   require 'includes/common.php';
   if(!isset($_SESSION['id'])) {
       header('location: products.php');
       die();
   }
   else {
        $user_id=$_SESSION['id'];
        $item_id=$_GET['item_id'];
        $query="Delete from user_product where user_product.user_id=$user_id and user_product.product_id=$item_id";
        $res= mysqli_query($con, $query);
        header('location: products.php');
        die();
   }
   
?>
