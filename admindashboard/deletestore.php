<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from store where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:stores.php');
}else{
    echo "Failed";
}

?>