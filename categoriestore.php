<?php 
include "header.php";
include "admindashboard/conn.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query="select * from store where cate='$id'";
	$result=mysqli_query($conn,$query);
}
?>



<section class="top-store-category-sec sec-padding">
        <div class="container">
                <div class="content-entry">
                    <div class="accordion-title">
                        <h4>Top Stores</h4>
                    </div>
                        <div class="product-tiles">
                            <div class="row">

                            <?php while($row=mysqli_fetch_array($result))
                    {
        ?>
                            
                    <div class="col-lg-3 col-md-4">
                        <div class="mainbox">
                            <div class="imgbox">
                            <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($row[2]);?>'  alt='Store Image'/>
                                <!-- <img class="w-100" src="uploads/store/sakara_Logo.png"/> -->
                            </div>
                        <div class="contentbox">
                        <?php echo "<a href='storedetails.php?id=".$row['id']."'>"."<span>".$row['name']."</span>"."</a>"; ?>
                        <!-- <a href="storedetails.php"><span>Store Name</span></a> -->
                            <!-- <p>15% Off Sitewide</p> -->
                        </div>
                                            </div>
                                    </div>
    <?php
                        }
    ?>
                                    <!-- <div class="col-lg-3 col-md-4">
                                        <a href="storedetails.php">
                                            <div class="mainbox">
                                                <div class="imgbox">
                                                    <img class="w-100" src="uploads/store/Perfect_Bar.png"/>
                                                </div>
                                                <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off Sitewide</p>
                        </div>
                                            </div>
                                        </a>
                                    </div>
                                                                    <div class="col-lg-3 col-md-4">
                                        <a href="storedetails.php">
                                            <div class="mainbox">
                                                <div class="imgbox">
                                                    <img class="w-100" src="uploads/store/morrisons_discount_code.png"
                                                         />
                                                </div>
                                                <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off Sitewide</p>
                        </div>
                                            </div>
                                        </a>
                                    </div>
                                                                    <div class="col-lg-3 col-md-4">
                                        <a href="storedetails.php">
                                            <div class="mainbox">
                                                <div class="imgbox">
                                                    <img class="w-100" src="uploads/store/allplants_discount_code.png"
                                                         />
                                                </div>
                                                <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off Sitewide</p>
                        </div>
                                            </div>
                                        </a>
                                    </div>
                                                                    <div class="col-lg-3 col-md-4">
                                        <a href="storedetails.php">
                                            <div class="mainbox">
                                                <div class="imgbox">
                                                    <img class="w-100" src="uploads/store/goldbelly_promo_code.png"
                                                         />
                                                </div>
                                                <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off Sitewide</p>
                        </div>
                                            </div>
                                        </a>
                                    </div>
                                                                    <div class="col-lg-3 col-md-4">
                                        <a href="storedetails.php">
                                            <div class="mainbox">
                                                <div class="imgbox">
                                                    <img class="w-100" src="uploads/store/tobleronecouponcode.png"
                                                        />
                                                </div>
                                                <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off Sitewide</p>
                        </div>
                                            </div>
                                        </a>
                                    </div>
                                                                    <div class="col-lg-3 col-md-4">
                                        <a href="storedetails.php">
                                            <div class="mainbox">
                                                <div class="imgbox">
                                                    <img class="w-100" src="uploads/store/alohacouponcode_copy1.png"
                                                         />
                                                </div>
                                                <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off Sitewide</p>
                        </div>
                                            </div>
                                        </a>
                                    </div> -->
                                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section> 



<?php include 'footer.php'?>