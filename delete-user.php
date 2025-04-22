<?php
    require_once('functions/function.php');

    $id=$_GET['d'];
    $del="DELETE FROM users WHERE user_id='$id'";
    if($Q=mysqli_query($con,$del)){
      header('Location: all-user.php');
    }else{
      echo "Opps! user delete failed.";
    }

?>
