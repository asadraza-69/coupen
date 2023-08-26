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
$UserQuery="select * from category";  //getting data from product table based on given id
$UserResult=mysqli_query($conn,$UserQuery); //executing query
$query2="select * from store where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
if(isset($_POST['btnSubmit']))
{  
    if(is_uploaded_file($_FILES['imgname']['tmp_name'])){
        $images1=$_FILES['imgname']['tmp_name'];
    
      $img=addslashes(file_get_contents($images1));

    $name=$_POST['name'];
    $usr=$_POST['usr'];
    $top=$_POST['top'];
    $query1="update store set name='$name', cate='$usr', top='$top', image='$img' where id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
 echo'<script> window.location="stores.php"; </script> ';
//        header("Location:stores.php");
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
						<li class="breadcrumb-item"><a href="stores.php">Stores</a></li>
						<li class="breadcrumb-item"><a href="#">Edit Store</a></li>
					</ol>
                </div>


                <div class="row">

<div class="col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Store</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
            <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " name="name" required value="<?php echo $row2[1];?>">
                    </div>
                    <div class="mb-3">
								  <label for="formFile" class="form-label">Select Category</label>
    <select name="usr" class="form-control input-default ">
        <?php
        while($UserRow=mysqli_fetch_array($UserResult))
        {
            if($UserRow["id"]==$QuestRow['id'])
            {
            ?>
            <option value="<?php echo $UserRow['id'];?>" selected>
            <?php echo $UserRow['name'];?>
            </option>
            <?php
            }
            else {
                ?>
            <option value="<?php echo $UserRow['id'];?>">
            <?php echo $UserRow['name'];?>
            </option>
        <?php
        }
    
        }
        ?>
    </select> 
                    </div>
                    <div class="mb-3">
                <input class="form-check-input" type="radio" name="top" value="Yes">
                                                        <label class="form-check-label">
                                                            Top Coupon
                                                        </label>
                    </div>
                    <div class="mb-3">
								  <label for="formFile" class="form-label">Store Image</label>
                                  <input required type="file" class="form-control" name="imgname" id="FilUploader"/>
                    </div>
                    <!-- <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  > -->

                    <button type="submit" class="btn btn-primary" name="btnSubmit">Update  Store</button>

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
  
