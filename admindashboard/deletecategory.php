<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from category where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:categories.php');
}else{
    echo "Failed";
}

?>