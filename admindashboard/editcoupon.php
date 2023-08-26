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
$coupontypeQuery="select * from coupontype";  //getting data from product table based on given id
$coupontypeResult=mysqli_query($conn,$coupontypeQuery); //executing query
$storeQuery="select * from store";  //getting data from product table based on given id
$storeResult=mysqli_query($conn,$storeQuery); //executing query
$query2="select * from coupon where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
if(isset($_POST['btnSubmit']))
{      
    if(is_uploaded_file($_FILES['imgname']['tmp_name']))
    {
        $images1=$_FILES['imgname']['tmp_name'];
        $img=addslashes(file_get_contents($images1));
        $percent=$_POST['percent'];
        $details=$_POST['details'];
        $code=$_POST['code'];
        $link=$_POST['link'];
        $usr=$_POST['usr'];
        $coupontype=$_POST['coupontype'];
        $store=$_POST['store'];
        $top=$_POST['top'];
        $offer=$_POST['offer'];
        $query1="update coupon set percent='$percent', details='$details', code='$code', store='$store', category='$usr', coupontype='$coupontype', store='$store', top='$top', offer='$offer', image='$img' where id='$id'";
        $result1=mysqli_query($conn,$query1);
        if($result1)
        {
            echo'<script> window.location="coupons.php"; </script> ';
//        header("Location:coupons.php");
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
						<li class="breadcrumb-item"><a href="coupons.php">Coupons</a></li>
						<li class="breadcrumb-item"><a href="#">Edit Coupon</a></li>
					</ol>
                </div>


                <div class="row">

<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Coupon</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
            <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " name="percent" required value="<?php echo $row2[1];?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " name="details" required value="<?php echo $row2[2];?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " name="code" required value="<?php echo $row2[3];?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " name="link" required value="<?php echo $row2[4];?>">
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
			<label for="formFile" class="form-label">Select Coupon Type</label>
    <select name="coupontype" class="form-control input-default ">
        <?php
        while($coupontypeRow=mysqli_fetch_array($coupontypeResult))
        {
            if($coupontypeRow["id"]==$coupontypetRow['id'])
            {
            ?>
            <option value="<?php echo $coupontypeRow['id'];?>" selected>
            <?php echo $coupontypeRow['name'];?>
            </option>
            <?php
            }
            else {
                ?>
            <option value="<?php echo $coupontypeRow['id'];?>">
            <?php echo $coupontypeRow['name'];?>
            </option>
        <?php
        }
    
        }
        ?>
    </select> 
                    </div>
                    <div class="mb-3">
			<label for="formFile" class="form-label">Select Store</label>
    <select name="store" class="form-control input-default ">
        <?php
        while($storeRow=mysqli_fetch_array($storeResult))
        {
            if($storeRow["id"]==$storeRow['id'])
            {
            ?>
            <option value="<?php echo $storeRow['id'];?>" selected>
            <?php echo $storeRow['name'];?>
            </option>
            <?php
            }
            else {
                ?>
            <option value="<?php echo $storeRow['id'];?>">
            <?php echo $storeRow['name'];?>
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

                <input class="form-check-input" type="radio" name="offer" value="Yes">
                                                        <label class="form-check-label">
                                                            Special Offer
                                                        </label>
    </div>

                    <div class="mb-3">
								  <label for="formFile" class="form-label">Special Offer Banner Image</label>
                                  <input type="file" class="form-control" name="imgname" id="FilUploader"/>
                    </div>

                    <!-- <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  > -->

                    <button type="submit" class="btn btn-primary" name="btnSubmit">Update  Coupon</button>

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
  
