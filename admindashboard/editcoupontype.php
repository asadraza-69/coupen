<?php
include "conn.php";
session_start();
if(isset($_SESSION['admin_id'])) 
{

?>
		<!--**********************************
            Content body start
        ***********************************-->

                <?php
$id=$_GET['id'];  // getting id from url
$query2="select * from coupontype where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
if(isset($_POST['btnSubmit']))
{  
    $name=$_POST['name'];
    $query1="update coupontype set name='$name' where id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
 echo'<script> window.location="coupontype.php"; </script> ';
//        header("Location:coupontype.php");
    }else{
        echo "<script>alert('Some Error Occured')</script>";
//        echo mysqli_error($conn);
    }
}
include "header.php";
?>
        <div class="content-body">
            <div class="container-fluid">
            <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="home.php">Home</a></li>
						<li class="breadcrumb-item"><a href="coupontype.php">Coupon Type</a></li>
						<li class="breadcrumb-item"><a href="#">Edit Coupon Type</a></li>
					</ol>
                </div>


                <div class="row">

<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Coupon Type</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
            <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " name="name" required value="<?php echo $row2[1];?>">
                    </div>
                    <!-- <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  > -->

                    <button type="submit" class="btn btn-primary" name="btnSubmit">Update  Coupon Type</button>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php
include "footer.php";
}else{
    ?>
    <a href="index.php"><button>Login First</button></a>
    <?php
  }
  ?>
  
