<!DOCTYPE html>
<!--
Signup page for lifestyles store.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Lifestyle Store </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="row">
            <div class="col-md-offset-4 col-md-4">
                <h5>
                    <?php 
                       if(isset($_GET['msg'])) {
                           echo $_GET['msg'];
                           unset($_GET['msg']);
                       }
                    ?>
                </h5>
                <div class="row">
                    <h3> SignUp</h3>
                </div>
                <div class="row">
                <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <input placeholder="First Name" class="form-control" type="text"
                               required="" name="first_name" pattern="[A-Z a-z]{3,}">
                         <div>
                             <?php 
                                if(isset($_GET['error_first_name'])) {
                                    echo $_GET['error_first_name'];
                                }
                             ?>
                         </div>
                        </div>
                        <div class="form-group">
                        <input placeholder="Last Name" class="form-control" type="text"
                               required="" name="last_name" pattern="[A-Z a-z]{3,}">
                        <div>
                            <?php
                                if(isset($_GET['error_last_name'])) {
                                    echo $_GET['error_last_name'];
                                }
                             ?>
                        </div>
                        </div>
                               
                    <div class="form-group">
                        <input placeholder="Email Id" class="form-control" type="email" 
                               required="" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$">
                        <div>
                            <?php
                                  if(isset($_GET['error_email'])) {
                                    echo $_GET['error_email'];
                                  }
                             ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <input placeholder="Password" class="form-control" type="password"
                               required="" name="password" pattern="(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                         <div>
                            <?php
                                if(isset($_GET['error_password'])) {
                                    echo $_GET['error_password'];
                                }
                             ?>
                         </div>
                    </div>
                    
                    <div class="form-group">
                        <label> Select a Gender </label><br>
                        <input class="form-check-input" type="radio" name="gender" value="male">
                        <label> Male </label>
                        <input class="form-check-input" type="radio" name="gender" value="female">
                        <label> Female </label>
                        <input class="form-check-input" type="radio" name="gender" value="other">
                        <label> Other </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">
                        Signup
                    </button>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>