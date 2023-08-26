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

$queryc="Select * from category";
$resultc=mysqli_query($conn,$queryc);

if(isset($_POST['btnSubmit']))
{
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $cate=$_POST['cate'];
    $top=$_POST['top'];
    $imag=$_FILES['imge']['tmp_name']; //database
    $imageName=addslashes(file_get_contents($imag));
    $query1="insert into store(name, slug, cate, top, image)values('$name', '$slug', '$cate', '$top', '$imageName')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
//      echo "<script>alert('Assign Added Successfully')</script>";
 echo'<script> window.location="stores.php"; </script> ';
//       header("Location:stores.php");       
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
						<li class="breadcrumb-item"><a href="stores.php">Stores</a></li>
						<li class="breadcrumb-item"><a href="#">Add Store</a></li>
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
                        <input type="text" class="form-control input-default " placeholder="Store Name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " placeholder="Slug" name="slug" required>
                    </div>
                    <div class="mb-3">
								  <label for="formFile" class="form-label">Select Category</label>
                    <select name="cate" class="form-control input-default ">
        <?php
        while($rowc=mysqli_fetch_array($resultc))
        {
        ?>
                <option value="<?php echo $rowc['id'];?>">
                <?php echo $rowc['name'];?>
                </option>
        <?php
        }
        ?>
										</select>
                    </div>
                    <div class="mb-3">
                    <div class="mb-3">
                <input class="form-check-input" type="checkbox" name="top" value="Yes">
                                                        <label class="form-check-label">
                                                            Top Store
                                                        </label>

                    </div>
								  <label for="formFile" class="form-label">Store Image</label>
                                  <input required type="file" class="form-control" name="imge" id="FilUploader"/>
                    </div>
                    <!-- <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  > -->

                    <button type="submit" class="btn btn-primary" name="btnSubmit">Add  Store</button>

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
  
