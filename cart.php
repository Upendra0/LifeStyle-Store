<?php
  require 'includes/common.php';
  if(!isset($_SESSION['id'])) {
      header('location: index.php');
      die();
  }
?>
<!DOCTYPE html>
<!--
Cart of an user of Lifestyle store.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Cart Life style store </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <?php
        include 'includes/header.php' ;
        ?>
        
        <div>
            <?php 
                    $user_id=$_SESSION['id'];
                    $query="SELECT products.id, products.name, products.price, products.path FROM user_product INNER JOIN"
                            . " products ON user_product.product_id=products.id INNER JOIN users ON"
                            . " user_product.user_id=users.id WHERE users.id=$user_id AND user_product.status='in cart'";                    
                    $result= mysqli_query($con, $query);
                    $total_rows= mysqli_num_rows($result);
                    if($total_rows==0) { 
            ?>
            <div class="container">
                <h5 class="alert alert-info"> Add item in the cart first.</h5>
            </div>
            <?php   }
            
                else {
                    $sum=0;
                    $all_id=[];
                    while($row= mysqli_fetch_array($result)) {
                        $path=$row['path'];
                        $sum+=$row['price'];
                        array_push($all_id, $row['id']);
            ?>
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4> Name </h4>
                                </div>
                                <div class="col-md-6">
                                    <P> <?php echo $row['name']; ?></P>
                                </div></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4> Price </h4>
                                </div>
                                <div class="col-md-6">
                                    <p> <?php echo $row['price']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-offset-1 col-xs-5">
                            <div class="thumbnail">
                                <img src="<?php echo $path ?>" alt="PHOTO">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="cart-remove.php?item_id=<?php echo $row['id']; ?>"> <button class="btn btn-danger btn-lg"> Remove </button></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php } 
            ?>
            
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-1">
                            <h4> Total </h4>
                        </div>
                        <div class="col-md-4">
                            <p> <?php echo $sum ?> </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1">
                            <?php $_SESSION['array_id']=$all_id; ?>
                            <a href="success.php?"> <button class="btn btn-primary btn-lg"> Buy all </button></a>
                        </div>
                    </div>
                </div>
            </div>
                <?php } ?>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

