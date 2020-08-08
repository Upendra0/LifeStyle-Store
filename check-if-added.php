<?php
 function check_if_in_cart( $con, $item_id) {
     $user_id=$_SESSION['id'];
     $query="select * from user_product where user_id='$user_id' and product_id=$item_id and status='in cart'";
     $res= mysqli_query($con, $query);
     $total= mysqli_num_rows($res);
     if($total==0) {
         return 0;
     }
     else {
         return 1;
     }
}
?>
