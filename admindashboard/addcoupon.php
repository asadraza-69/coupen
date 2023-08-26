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

$queryct="Select * from coupontype";
$resultct=mysqli_query($conn,$queryct);

$querys="Select * from store";
$results=mysqli_query($conn,$querys);

if(isset($_POST['btnSubmit']))
{
    $per=$_POST['per'];
    $details=$_POST['details'];
    $code=$_POST['code'];
    $link=$_POST['link'];
    $cate=$_POST['cate'];
    $coupontype=$_POST['coupontype'];
    $store=$_POST['store'];
    $top=$_POST['top'];
    $offer=$_POST['offer'];
    $imag=$_FILES['imge']['tmp_name']; //database
    $imageName=addslashes(file_get_contents($imag));
    $query1="insert into coupon(percent, details, code, link, category, coupontype, store, top, offer, image)values('$per', '$details', '$code', '$link', '$cate', '$coupontype', '$store', '$top', '$offer', '$imageName')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
//      echo "<script>alert('Assign Added Successfully')</script>";
        echo'<script> window.location="coupons.php"; </script> ';
//    header("Location:coupons.php");       
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
						<li class="breadcrumb-item"><a href="categories.php">Coupons</a></li>
						<li class="breadcrumb-item"><a href="#">Add Coupon</a></li>
					</ol>
                </div>


                <div class="row">

<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Input Style</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
            <form method="POST" enctype="multipart/form-data">
                 <div class="mb-3">
                        <label class="form-check-label">Coupon Type</label>
                    <select name="coupontype" class="form-control input-default "  >
        <?php
        while($rowct=mysqli_fetch_array($resultct))
        {
        ?>
                <option value="<?php echo $rowct['id'];?>">
                <?php echo $rowct['name'];?>
                </option>
        <?php
        }
        ?>
										</select>
                    </div>
                     <div class="mb-3">
                        <input type="text" class="form-control input-default " placeholder="Coupon Details" name="details" required>
                    </div>
                     <div class="mb-3">
                        <input type="text" class="form-control input-default " placeholder="Coupon Code" name="code" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " placeholder="Website Link" name="link" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control input-default " placeholder="Coupon %" name="per" required>
                    </div>
                   
                    <!--div class="mb-3">
                        <label class="form-check-label">Category</label>
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
                    </div-->
                   
                    <div class="mb-3">
<label class="form-check-label">Store</label>

                    <select name="store" class="form-control input-default ">
        <?php
        while($rows=mysqli_fetch_array($results))
        {
        ?>
                <option value="<?php echo $rows['id'];?>">
                <?php echo $rows['name'];?>
                </option>
        <?php
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
                                  <input type="file" class="form-control" name="imge" id="FilUploader"/>
                    </div>


                    <!-- <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  > -->

                    <button type="submit" class="btn btn-primary" name="btnSubmit">Add  Coupon</button>

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
  
