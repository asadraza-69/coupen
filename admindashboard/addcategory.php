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


if(isset($_POST['btnSubmit']))
{
    $name=$_POST['name'];
    $top=$_POST['top'];
    $imag=$_FILES['imge']['tmp_name']; //database
    $imageName=addslashes(file_get_contents($imag));
    $query1="insert into category(name, top, image)values('$name', '$top', '$imageName')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
//      echo "<script>alert('Assign Added Successfully')</script>";
 echo'<script> window.location="categories.php"; </script> ';
//       header("Location:categories.php");       
    }else{
//         echo mysqli_error($conn);

        echo "<script>alert('Some Error Occured')</script>";
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
						<li class="breadcrumb-item"><a href="#">Add Category</a></li>
					</ol>
                </div>


                <div class="row">

<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Input Style</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
            <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " placeholder="Category Name" name="name" required>
                    </div>
                    <div class="mb-3">
                <input class="form-check-input" type="checkbox" name="top" value="Yes">
                                                        <label class="form-check-label">
                                                            Top Category
                                                        </label>

                    </div>
                    <div class="mb-3">
								  <label for="formFile" class="form-label">Category Image</label>
                                  <input required type="file" class="form-control" name="imge" id="FilUploader"/>
                    </div>
                    <!-- <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  > -->

                    <button type="submit" class="btn btn-primary" name="btnSubmit">Add  Category</button>

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
  
