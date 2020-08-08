<?php
   require 'includes/common.php';
   $email= mysqli_real_escape_string($con, $_POST['email']);
   $password= mysqli_real_escape_string($con, $_POST['password']);
   $password=md5($password);
   $query="select email from users where users.email='$email'";
   $result= mysqli_query($con, $query);
   $total_rows= mysqli_num_rows($result);
   if($total_rows==0) {
       header('location:index.php?msg=This email is not registered. Create an account here.');
       die();
   }
    else { 
        
        $passquery="select id from users where users.password='$password'";
        $result= mysqli_query($con, $passquery);
        $total_rows= mysqli_num_rows($result);
        if( $total_rows==0) {
            header('location:login.php?msg=Password did not match for this email id');
            die();
        }
        else {
       $row= mysqli_fetch_array($result);
       session_start();
       $_SESSION['id']=$row['id'];
       $_SESSION['email']=$row['email'];
       header('location:products.php');
       die();
        }
   } 
?>
