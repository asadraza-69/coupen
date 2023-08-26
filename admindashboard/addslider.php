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
    $imag=$_FILES['imge']['tmp_name']; //database
    $imageName=addslashes(file_get_contents($imag));
    $imag1=$_FILES['imge1']['tmp_name']; //database
    $imageName1=addslashes(file_get_contents($imag1));
    $query1="insert into slider(image, image1)values('$imageName', '$imageName1')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
//      echo "<script>alert('Assign Added Successfully')</script>";
       header("Location:sliders.php");       
    }else{
         echo mysqli_error($conn);

//        echo "<script>alert('Some Error Occured')</script>";
    }
} 
include "header.php";
?>
        <div class="content-body">
            <div class="container-fluid">
            <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="home.php">Home</a></li>
						<li class="breadcrumb-item"><a href="sliders.php">Sliders</a></li>
						<li class="breadcrumb-item"><a href="#">Add Sliders</a></li>
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
								  <label for="formFile" class="form-label">Slider Image 1</label>
                                  <input required type="file" class="form-control" name="imge" id="FilUploader"/>
                    </div>
                    <div class="mb-3">
								  <label for="formFile" class="form-label">Slider Image 2</label>
                                  <input required type="file" class="form-control" name="imge1" id="FilUploader"/>
                    </div>
                    <!-- <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  > -->

                    <button type="submit" class="btn btn-primary" name="btnSubmit">Add  Sliders</button>

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
  
