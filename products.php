<?php
  require 'includes/common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products | Life Style Store</title>
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php
           include 'includes/header.php';
           include 'check-if-added.php';
        ?>

        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
   
            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/1.jpg" alt="">
                        <div class="caption">
                            <h3>Cannon EOS </h3>
                            <p>Price: Rs. 36000.00 </p>
                            <?php  $item_id=0; 
                            if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href='cart-add.php?id=<?php echo $item_id; ?>' class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="">
                        <div class="caption">
                            <h3>Nikon EOS </h3>
                            <p>Price: Rs. 40,000.00 </p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con,$item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href='cart-add.php?id=<?php echo $item_id; ?>' class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/18.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price: Rs. 13000.00 </p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/19.jpg" alt="">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00 </p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/20.jpg" alt="">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00 </p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 ">
                    <div class="thumbnail">
                        <img src="img/10.jpg" alt="">
                        <div class="caption">
                            <h3>Faber Luba #111 </h3>
                            <p>Price: Rs. 18000.00 </p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/22.jpg" alt="">
                        <div class="caption">
                            <h3>H&W </h3>
                            <p>Price: Rs. 800.00 </p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/23.jpg" alt="">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/24.jpg" alt="">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/25.jpg" alt="">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price Rs. 1300.00</p>
                            <?php if(!isset($_SESSION['id'])) { ?>
                            <p> <a href="login.php" class="btn btn-primary btn-block" role="button"> Buy Now </a></p>
                            <?php } else {
                                $item_id+=1;
                                  if(check_if_in_cart($con, $item_id)) { ?>
                            <p> <a href="#" class="btn btn-block btn-success" disabled> Added to cart </a></p>
                            <?php } else { ?>
                            <p> <a href="cart-add.php?id=<?php echo $item_id; ?>" class="btn btn-block btn-primary"> Add to cart </a></p>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
