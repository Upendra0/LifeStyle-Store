<?php
  require 'includes/common.php';
  if(!isset($_SESSION['id'])) {
      header('location: index.php');
  }
?>
<!DOCTYPE html>
<!--
Setting to change password.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Change password </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
        
        <!-- Link to external css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container">
            <div class="col-md-offset-4 col-md-4">
                <h3> Change password </h3>
                <form action="setting_script.php" method="post">
                    <div class="form-group">
                        <input type="password" placeholder="Old password" name="old_password" class="form-control" required="">
                        <?php
                        if(isset($_GET['old_password_error'])) {
                        ?>
                        <h6>
                        <?php echo $_GET['old_password_error']; } ?>
                        </h6>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" placeholder="New password" name="new_password" class="form-control" required="">
                        <?php
                        if(isset($_GET['new_password_error'])) {
                        ?>
                        <h6>
                        <?php echo $_GET['new_password_error']; } ?>
                        </h6>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" placeholder="Retype new password" name="re_password" class="form-control" required="">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

