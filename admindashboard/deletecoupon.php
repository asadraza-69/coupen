<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from coupon where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:coupons.php');
}else{
    echo "Failed";
}

?>