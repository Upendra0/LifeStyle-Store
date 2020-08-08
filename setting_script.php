<?php
require 'includes/common.php';
if(!isset($_SESSION['id'])) {
    header('location: index.php');
}
 else {
     $id=$_SESSION['id'];
     $old_password= $_POST['old_password'];
     $old_password= md5($old_password);
    $query="select password from users where users.id=$id";
    $result= mysqli_query($con, $query);
    $total_rows= mysqli_num_rows($result);
    if( $total_rows==0) {
        header('location: setting.php?old_password_error= Incorrect password');
    }
 else {
        $new_password=$_POST['new_password'];
        $re_pass=$_POST['re_password'];
        if($new_password==$re_pass) {
            $new_password= md5($new_password);
            $q="update users set users.password='$new_password' where users.id=$id";
            $r= mysqli_query($con, $q);
            header('location: products.php');
            die();
        }
        else {
            header('location: setting.php?new_password_error=Pasword not matched');
        }
    }
}

?>
