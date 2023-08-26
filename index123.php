<?php include 'header.php'?>
<!-- Banner Section Start -->

<!-- Header Section Start -->

<style>
    .marquee {
        position: relative;
        width: 0vw;
        max-width: 100%;
        height: 20px;
        overflow-x: hidden;
    }

    .track {
        position: absolute;
        white-space: nowrap;
        will-change: transform;
        animation: marquee 32s linear infinite;
    }

    @keyframes marquee {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }
</style>

<section class="banner-sec">
    <div class="container">
        <div class="contentbox">
            <a class="banner-bottom-link" style="color: white">
                <div class="marquee">
                    <div class="track">
                        <div class="content">&nbsp;Welcome To Crazzy-Coupon </div>
                    </div>
                </div>
            </a>
            <div class="searchbar searchbox searchbarmy" id="searchbox">
                <div class="searchbar-main">
                    <input type="search" placeholder="what are you looking for?" />
                    <i class="fa fa-search"></i>
                </div>
                <input type="hidden" name="search-filter" value="All category" id="search-filter" />
                <div>
                    <ul style="display: none" class="list-unstyled search-results results"></ul>
                </div>
            </div>

        </div>

        <div style="position: relative;;" class="category-tiles cat-banner-tiles">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<!--                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <img class="d-block w-100" src="./assets/Untitled-2.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./assets/Untitled-1.png" alt="Second slide">
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

    </div>
</section>

<!-- Banner Section End -->

<?php
$querycoupon="select * from coupon where top='Yes'";
$resultcoupon=mysqli_query($conn,$querycoupon);
?>



<section class="top-coupon-sec product-tiles">
    <div class="container">
        <div class="sec-title">
            <h3>Top Coupon</h3>
            <a href="categories.php">View all</a>
        </div>
        <div class="row">
        <?php while($rowcoupon=mysqli_fetch_array($resultcoupon))
                    {
                        ?>

        <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox " style="border:2px solid orange">
                        <div class="imgbox">
<?php
$queryc="select * from category where id=".$rowcoupon['category'];
$resultc=mysqli_query($conn,$queryc);
$rowc=mysqli_fetch_row($resultc);
?>
                        <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowc[2]);?>'  alt='Category Image'/>
                            <!-- <img class="w-100" src="uploads/store/Stringking.png" alt="https://coupon.spaceland.biz/uploads/store/Stringking.png" /> -->
                        </div>
                        <div class="contentbox">
                            <span>Exclusive Code</span>
                            <p><?php echo $rowcoupon['details'];?></p>
                        </div>
                    </div>
                </a>
            </div>
<?php
                    }
?>
            <!-- <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox mydiv ">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/JD_Sports_Logo1.png"
                                alt="https://coupon.spaceland.biz/uploads/store/JD_Sports_Logo1.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off Sitewide</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/Hobbs_Logo.png"
                                alt="https://coupon.spaceland.biz/uploads/store/Hobbs_Logo.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off when you buy 2 or more</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/Gamestop.png"
                                alt="https://coupon.spaceland.biz/uploads/store/Gamestop.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>Up To 50% Off On Video Game Accessories</p>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</section>

<!-- Top Coupon Section End -->

<!-- Clothing And Accessories Section Start -->
<?php
$queryre="select * from coupon";
$resultre=mysqli_query($conn,$queryre);
?>

<section class="clothing-and-accessories-sec product-tiles">
    <div class="container">
        <div class="sec-title" style="padding-top: 20px">
            <h3>Recent Coupon</h3>
            <a href="categories.php">View all</a>
        </div>
        <div class="row">
        <?php while($rowre=mysqli_fetch_array($resultre))
                    {
                        ?>
            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
<?php
$queryca="select * from category where id=".$rowre['category'];
$resultca=mysqli_query($conn,$queryca);
$rowca=mysqli_fetch_row($resultca);
?>

                        <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowca[2]);?>'  alt='Category Image'/>
                        </div>
                        <div class="contentbox">
<!--                            <span>exclusive code</span> -->
                            <p><?php echo $rowcoupon['details'];?></p>
                        </div>
                    </div>
                </a>
            </div>
<?php
                    }
?>
<!--            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/space-nk-logo.png"
                                alt="https://coupon.spaceland.biz/uploads/store/space-nk-logo.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off on Everything</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/Third_Love_Logo.png"
                                alt="https://coupon.spaceland.biz/uploads/store/Third_Love_Logo.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>15% Off Sitewide</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/space-nk-logo.png"
                                alt="https://coupon.spaceland.biz/uploads/store/space-nk-logo.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>Up to 40% Off on Sale Items</p>
                        </div>
                    </div>
                </a>
            </div> -->
        </div>
    </div>
</section>

<!-- Clothing And Accessories Section End -->

<!-- Jewellery And Watches Section Start -->

<!-- <section class="jewelry-watch-sec product-tiles">
    <div class="container">
        <div class="sec-title">
            <h3>Travel & Tickets</h3>
            <a href="categories.php">View all</a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/agoda_logo.png"
                                alt="https://coupon.spaceland.biz/uploads/store/agoda_logo.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>Agoda Discount Code: 6% Off Worldwide Bookings</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/booking-com-logo_copy1.png"
                                alt="https://coupon.spaceland.biz/uploads/store/booking-com-logo_copy1.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>10% Off Sitewide</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/hotels_com.png"
                                alt="https://coupon.spaceland.biz/uploads/store/hotels_com.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>Upto $100 Cash Back Rebate on All Hotel Bookings</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="#" data-toggle="modal" data-target="#exampleModal">
                    <div class="mainbox">
                        <div class="imgbox">
                            <img class="w-100" src="uploads/store/emirates_logo.png"
                                alt="https://coupon.spaceland.biz/uploads/store/emirates_logo.png" />
                        </div>
                        <div class="contentbox">
                            <span>exclusive code</span>
                            <p>Dubai Expo Offer: 10% Off Expo Flight Code</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> -->

<!-- Jewellery And Watches Section End -->

<!-- Top Stores And Top Category Section Start -->
<?php
$querystore="select * from store where top='Yes'";
$resultstore=mysqli_query($conn,$querystore);
?>

<section class="top-store-category-sec">
    <div class="container">
        <div id="accordion" class="accordion-container">
            <div class="content-entry">
                <div class="accordion-title">
                    <h3>Top Stores</h3>
                </div>
                <div class="accordion-content">
                    <div class="product-tiles">
                        <div class="row">
          <?php while($rowstore=mysqli_fetch_array($resultstore))
                    {
                        ?>
                            
                            <div class="col-lg-3 col-md-4 col-6">
                                <?php echo "<a class='gray_link' href='storedetails.php?id=".$rowstore['id']."'>"."<button class='custom-btn btn-7'><span>".$rowstore['name']."</span></button>"."</a>"; ?>

                            </div>
<?php
                    }
?>
<!--                            <div class="col-lg-3 col-md-4 col-6">
                                <a class="gray_link" href="storedetails.php">
                                    <button class="custom-btn btn-7"><span>Ebay</span></button>

                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <a class="gray_link" href="storedetails.php">
                                    <button class="custom-btn btn-7"><span>Shopify</span></button>

                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <a class="gray_link" href="storedetails.php">
                                    <button class="custom-btn btn-7"><span>Amazon</span></button>

                                </a>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>
<?php
$querytc="select * from category where top='Yes'";
$resulttc=mysqli_query($conn,$querytc);
?>

            <div class="content-entry">
                <div class="accordion-title">
                    <h3>Top Categories</h3>
                </div>
                <div class="accordion-content">
                    <div class="product-tiles">
                        <div class="row">
          <?php while($rowtc=mysqli_fetch_array($resulttc))
                    {
                        ?>
                            
                            <div class="col-lg-3 col-md-4 col-6">
                                <?php echo "<a class='gray_link' href='categoriestore.php?id=".$rowtc['id']."'>"."<button class='custom-btn btn-7'><span>".$rowtc['name']."</span></button>"."</a>"; ?>
                            </div>
<?php
                    }
?>
<!--                            <div class="col-lg-3 col-md-4 col-6">
                                <a class="gray_link" href="categoriestore.php">
                                    <button class="custom-btn btn-7"><span>Travel & Tour</span></button>

                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <a class="gray_link" href="categoriestore.php">
                                    <button class="custom-btn btn-7"><span>Travel & Tour</span></button>

                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6">
                                <a class="gray_link" href="categoriestore.php">
                                    <button class="custom-btn btn-7"><span>Travel & Tour</span></button>

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