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
$query2="select * from logo where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
if(isset($_POST['btnSubmit']))
{  
    if(is_uploaded_file($_FILES['imgname']['tmp_name'])){
        $images1=$_FILES['imgname']['tmp_name'];
    
      $img=addslashes(file_get_contents($images1));

    $query1="update logo set image='$img' where id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        echo'<script> window.location="logo.php"; </script> ';
 //     header("Location:categories.php");
    }else{
        echo "<script>alert('Some Error Occured')</script>";
//        echo mysqli_error($conn);
    }
}
}
include "header.php";
?>
        <div class="content-body">
            <div class="container-fluid">
            <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="home.php">Home</a></li>
						<li class="breadcrumb-item"><a href="logo.php">Logo</a></li>
						<li class="breadcrumb-item"><a href="#">Edit Logo</a></li>
					</ol>
                </div>


                <div class="row">

<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Logo</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
            <form method="POST" enctype="multipart/form-data">
                   
                  
                    <div class="mb-3">
								  <label for="formFile" class="form-label">Logo</label>
                                  <input required type="file" class="form-control" name="imgname" id="FilUploader"/>
                    </div>
                    <!-- <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  > -->

                    <button type="submit" class="btn btn-primary" name="btnSubmit">Update  Logo</button>

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
  
