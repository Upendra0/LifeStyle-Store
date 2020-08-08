<?php
  require 'includes/common.php';
  $first_name= mysqli_real_escape_string($con, $_POST['first_name']);
  $last_name= mysqli_real_escape_string($con, $_POST['last_name']);
  $email= mysqli_real_escape_string($con, $_POST['email']);
  $pass= mysqli_real_escape_string($con, $_POST['password']);
  $gender= mysqli_real_escape_string($con, $_POST['gender']);
  if(strlen($first_name)<3) {
      header("location:signup.php?error_first_name=First name must contain atleast 3 characters");
      die();
  }
  if(strlen($last_name)<3) {
      header("location: signup.php?error_last_name=Last name must contain atleast 3 characters");
      die();
  }
  if(strlen($pass)<6) {
      header('location:signup.php?error_password=Password must contain atleast 6 characters');
  }
  $query="select first_name, last_name from users where users.email='$email'";
  $result= mysqli_query($con, $query);
  $total_rows= mysqli_num_rows($result);
  if($total_rows==0) {
      $pass=md5($pass);
      $query="insert into users (first_name, last_name, email, password, gender) values ('$first_name', '$last_name', '$email', '$pass', '$gender')";
      $res= mysqli_query($con, $query);
      $_SESSION['email']=$email;
      $_SESSION['id']= mysqli_insert_id($con);
      header('location:products.php');
  }
  else {
      header('location:login.php?msg=This email is already registered.LogIn here');
  }
?>