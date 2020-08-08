<?php
  require 'includes/common.php';
  $item_id=$_GET['id'];
  $user_id=$_SESSION['id'];
  $query="insert into user_product (user_id, product_id, status) values ($user_id, $item_id,  'in cart')";
  $res= mysqli_query($con, $query);
  header('location: products.php');
  die();
?>