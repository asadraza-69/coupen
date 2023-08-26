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
$query2="select * from category where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
if(isset($_POST['btnSubmit']))
{  
    if(is_uploaded_file($_FILES['imgname']['tmp_name'])){
        $images1=$_FILES['imgname']['tmp_name'];
    
      $img=addslashes(file_get_contents($images1));

    $name=$_POST['name'];
    $top=$_POST['top'];
    $query1="update category set name='$name', top='$top', image='$img' where id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
 echo'<script> window.location="categories.php"; </script> ';
//        header("Location:categories.php");
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
						<li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
						<li class="breadcrumb-item"><a href="#">Edit Category</a></li>
					</ol>
                </div>


                <div class="row">

<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Category</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
            <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " name="name" required value="<?php echo $row2[1];?>">
                    </div>
                    <div class="mb-3">
                <input class="form-check-input" type="radio" name="top" value="Yes">
                                                        <label class="form-check-label">
                                                            Top Category
                                                        </label>

                    </div>
                    <div class="mb-3">
								  <label for="formFile" class="form-label">Category Image</label>
                                  <input required type="file" class="form-control" name="imgname" id="FilUploader"/>
                    </div>
                    <!-- <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  > -->

                    <button type="submit" class="btn btn-primary" name="btnSubmit">Update  Category</button>

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
  
