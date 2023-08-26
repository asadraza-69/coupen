<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from logo where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:logo.php');
}else{
    echo "Failed";
}

?>