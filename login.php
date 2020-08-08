<!-- If logged in already -->
<?php
   if(isset($_SESSION['id'])) {
       header('location:products.php');
   }
?>

<!DOCTYPE html>
<!--
Log In page of Lifestyle Store.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Index Lifestyle store </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
	<?php
	require "./includes/header.php";
	?>
        <div id="content">
            <div class="container-fluid" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <?php if(isset($_GET['msg'])) { ?>
                        <h5 class="alert alert-warning">  
                         <?php   echo $_GET['msg'];
                         unset($_GET['msg']);
                         ?>
                        </h5>
                         <?php }?> 
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
    </body>
</html>