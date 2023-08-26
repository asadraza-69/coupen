<?php include 'header.php' ?>
<!-- Banner Section Start -->

<!-- Header Section Start -->

<section class="banner-sec">
        <div class="container">
            <div class="contentbox">
                <br>
                <h1 style="font-size:22px;color:black"><b>Get All Crazzy Deals & Discount Codes Here</b></h1>
                <span style="color:black"><b>Shop Smarter & Save Big On Cart</b></span>
                <div class="searchbar searchbox" id="searchbox">
                    <div class="searchbar-main">
                        <input type="search" placeholder="what are you looking for?" id='searchtxt'>
                        <i class="fa fa-search" onclick='search()'></i>
                    </div>
                    <input type="hidden" name="search-filter" value="All category" id="search-filter">
                    <div>
                        <ul style="display:none;" class="list-unstyled search-results results">
                        </ul>
                    </div>
                </div>
                <ul class="category-links list-unstyled d-flex align-items-center justify-content-center">
                    <li><a style="color:black"><b>Special Offers</b></a></li>
                </ul>
            </div>
<?php
$querycouponoffer="select * from coupon where offer='Yes' ORDER BY  id DESC limit 3";
$resultcouponoffer=mysqli_query($conn, $querycouponoffer);
?>

<div class="category-tiles cat-banner-tiles">
    <div class="row">
        <?php
        while ($rowcouponoffer = mysqli_fetch_array($resultcouponoffer)) {
        
        $queryca = "select * from category where id=" . $rowcouponoffer['category'];
        $resultca = mysqli_query($conn, $queryca);
        $rowca = mysqli_fetch_row($resultca);
        
        $querystore = "select * from store where id=" . $rowcouponoffer['store'];
        $resultstore = mysqli_query($conn, $querystore);
        $rowstore = mysqli_fetch_row($resultstore);
        echo $rowstore;


        $detail = $rowcouponoffer['details'];
        $coupon = $rowcouponoffer['code'];
        $website = $rowcouponoffer['link'];
        ?>    
        <div class="col-lg-4 col-md-4 col-9" >
            <a data-offer_id="6953" class="offer_anchor d-block mainbox open-modal-button" 
            onclick='openmodal("<?php echo isset($rowstore[2]) ? base64_encode($rowstore[2]): base64_encode($rowcouponoffer[10]); ?>",
            "<?php echo isset($detail) ? $detail : null;?>",
            "<?php echo isset($coupon) ? $coupon : null;?>",
            "<?php echo isset($rowstore[1]) ? $rowstore[1]: null;?>",
            " <?php echo isset($website) ? $website: null;?>")'style="border:2px solid White"> 
            <?php
                // $querycategory = "select * from category where id=" . $rowcouponoffer['category'];
                // $resultcategory = mysqli_query($conn, $querycategory);
                // $rowcategory = mysqli_fetch_row($resultcategory); ?>
            <div class="imgbox">
                <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowcouponoffer[10]); ?>' style="height:200px" alt="Category Image">
            </div>
            <?php
                // $querystoreoffer = "select * from store where id=" . $rowcouponoffer['store'];
                // $resultstoreoffer = mysqli_query($conn, $querystoreoffer);
                // $rowstoreoffer = mysqli_fetch_row($resultstoreoffer);
            ?>
            <div class="contentbox" style="height:150px">
                <!-- <div class="brand-logo" style="border:3px solid orange">
                    <img class="w-100" src='data:logo/gif;base64,
                    <?php// echo base64_encode($rowstoreoffer[2]); ?>' alt="Brand Logo">
                </div> -->
                
                <p class="descrpt" ><?php echo $rowcouponoffer['details']; ?></p>
            </div>
            </a>
        </div>
        <?php } ?>
                
<!--    <div class="col-lg-4 col-md-4 col-9">
            <a data-offer_id="9124" href="javascript:;" class="offer_anchor d-block mainbox" style="border:3px solid black">
                <div class="imgbox">
                    <img class="w-100" src="uploads/2.jpg" style="height:200px" alt="Category Image">
                </div>
                <div class="contentbox">
                    <div class="brand-logo" style="border:3px solid black">
                        <img class="w-100" src="uploads/store/SHEIN_LOGO_CODE.png" alt="Brand Logo">
                    </div>
                    <p class="descrpt">
                        Renogy Day: 10% Off  </p>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-9">
            <a data-offer_id="6932" href="javascript:;" class="offer_anchor d-block mainbox" style="border:3px solid black">
                <div class="imgbox">
                    <img class="w-100" src="uploads/3.jpg" style="height:200px" alt="Category Image">
                </div>
                <div class="contentbox">
                    <div class="brand-logo" style="border:3px solid black">
                        <img class="w-100" src="uploads/store/SHEIN_LOGO_CODE.png" alt="Brand Logo">
                    </div>
                    <p class="descrpt">
                        Get Up To 80% Off </p>
                </div>
            </a>
        </div> -->
    </div>
</div>
            <a class="banner-bottom-link" style="color:black"><b>When you buy through links on Crazzy-Coupon we may earn a
                commission.</b>
            </a>
        </div>
    </section>
<!-- Banner Section End -->

<?php
$querycoupon="select * from coupon where top='Yes' ORDER BY  id DESC limit 8";
$resultcoupon = mysqli_query($conn, $querycoupon);
?>



<section class="top-coupon-sec product-tiles">
    <div class="container">
        <div class="sec-title">
            <h3>Top Coupon</h3>
            <a href="#">View all</a>
        </div>
        <div class="row">
            <?php while ($rowcoupon = mysqli_fetch_array($resultcoupon)) {
            ?>
                                <?php
                                $queryc = "select * from category where id=" . $rowcoupon['category'];
                                $resultc = mysqli_query($conn, $queryc);
                                $rowc = mysqli_fetch_row($resultc);
                                ?>
                                 <?php
                                $querystore = "select * from store where id=" . $rowcoupon['store'];
                                $resultstore = mysqli_query($conn, $querystore);
                                $rowstore = mysqli_fetch_row($resultstore);
                                $detail = $rowcoupon['details'];
                                $coupon = $rowcoupon['code'];
                                $website = $rowcoupon['link'];

                                ?>

                <div class="col-lg-3 col-md-4">
                    <!-- <a href="#" data-toggle="modal" data-target="#exampleModal"> -->
                    <a  class="open-modal-button" onclick='openmodal("<?php echo isset($rowstore[2]) ? base64_encode($rowstore[2]): null;?>","<?php echo isset($detail) ? $detail : null;?>","<?php echo isset($coupon) ? $coupon : null;?>","<?php echo isset($rowstore[1]) ? $rowstore[1]: null;?>"," <?php echo isset($website) ? $website: null;?>")'>
                        <div class="mainbox " >
                            <div class="imgbox">
                               
                                <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowstore[2]); ?>' alt='Category Image' />
                                <!-- <img class="w-100" src="uploads/store/Stringking.png" alt="https://coupon.spaceland.biz/uploads/store/Stringking.png" /> -->
                            </div>
                            <div class="contentbox">
                                <span>Exclusive Code</span>
                                <p><?php echo $rowcoupon['details']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
            
           
        </div>
    </div>
</section>

<!-- Top Coupon Section End -->

<!-- Clothing And Accessories Section Start -->
<?php
$queryre = "select * from coupon ORDER BY  id DESC limit 8";
$resultre = mysqli_query($conn, $queryre);
?>

<section class="clothing-and-accessories-sec product-tiles">
    <div class="container">
        <div class="sec-title" style="padding-top: 20px">
            <h3>Recent Coupon</h3>
            <a href="#">View all</a>
        </div>
        <div class="row">
            <?php while ($rowre = mysqli_fetch_array($resultre)) {
                  $queryca = "select * from category where id=" . $rowre['category'];
                  $resultca = mysqli_query($conn, $queryca);
                  $rowca = mysqli_fetch_row($resultca);
                  $querystore = "select * from store where id=" . $rowre['store'];
                  $resultstore = mysqli_query($conn, $querystore);
                  $rowstore = mysqli_fetch_row($resultstore);
                  $detail = $rowre['details'];
                  $coupon = $rowre['code'];
                  $website = $rowre['link'];
            ?>
            <div class="col-lg-3 col-md-4">
                <a  class="open-modal-button" onclick='openmodal("<?php echo isset($rowstore[2]) ? base64_encode($rowstore[2]): null;?>","<?php echo isset($detail) ? $detail : null;?>","<?php echo isset($coupon) ? $coupon : null;?>","<?php echo isset($rowstore[1]) ? $rowstore[1]: null;?>"," <?php echo isset($website) ? $website: null;?>")'>
                    <div class="mainbox">
                        <div class="imgbox">
                            <?php
                            
                            ?>

                            <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowstore[2]); ?>' alt='Category Image' />
                        </div>
                        <div class="contentbox">
                            <!--                            <span>exclusive code</span> -->
                            <p><?php echo $rowre['details']; ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            }
            ?>
           
        </div>
    </div>
</section>


<!-- Top Stores And Top Category Section Start -->
<?php
$querystore="select * from store where top='Yes'";
$resultstore = mysqli_query($conn, $querystore);
?>

<section class="top-store-category-sec">
    <div class="container">
        <div id="accordion" class="accordion-container">
            <div class="content-entry">
                <div class="accordion-title">
                    <h3><b>Top Stores</b></h3>
                </div>
                <div class="accordion-content">
                    <div class="product-tiles">
                        <div class="row">
                            <?php while ($rowstore = mysqli_fetch_array($resultstore)) {
                            ?>

                                <div class="col-lg-3 col-md-4 col-6">
                                    <?php echo "<a class='gray_link' href='storedetails.php?id=" . $rowstore['id'] . "'>" . "<span>" . $rowstore['name'] . "</span>" . "</a>"; ?>

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
            <div class="bc-banner text-center">
   <a href="#" onclick="ga('send', 'event', 'BC-banner', 'click', ' marketing signup');">
   <div class="bc-banner-header">
      <p style="color:black"><b>Advertisement</b></p>
   </div>
   <div class="bc-banner-body">
      <h2>Start Collecting More Coupons in Minutes</h2> 
      <p>With Crazzy-Coupon , you'll have daily Amazing Offers. You'll be able to Buy Your Services In discounted Price.</p>

      <span class="btn btn-primary">Sign Up For Free</span>
       
   </div>
      
<img src="https://www.hubspot.com/hs-fs/hubfs/lead-capture-3-1.jpg?width=1800&name=lead-capture-3-1.jpg" alt="HubSpot Marketing Free" class="bc-banner-cover img-responsive">
      
      
      </a>
</div>
<style>
   .bc-banner {
      position:relative;
      border:1px solid #ccc;
      overflow:hidden;
      background-color:#ff7a59;
   }
   .bc-banner a {
      text-decoration:none;
      color:#fff;
   }
   .bc-banner a:hover {
      opacity:0.8;
   }
   .bc-banner-header {
      background-color:#fff;
      position:relative;
      z-index:2;
      padding:1rem;
   }
   
   .bc-banner-body {
      position:relative;
      z-index:2;
      padding:2rem;
   }
   .bc-banner .bc-banner-cover {
      position:absolute;
      opacity: 0.3;
      filter: alpha(opacity=30); /* For IE8 and earlier */
      object-fit: cover;
      top:0;
      z-index:1;
      height: 100%;
      width: 100%;
   }
   
</style>
<br>
            <?php
            $querytc = "select * from category where top='Yes'";
            $resulttc = mysqli_query($conn, $querytc);
            ?>

            <div class="content-entry">
                <div class="accordion-title">
                    <h3><b>Top Categories</b></h3>
                </div>
                <div class="accordion-content">
                    <div class="product-tiles">
                        <div class="row">
                            <?php while ($rowtc = mysqli_fetch_array($resulttc)) {
                            ?>

                                <div class="col-lg-3 col-md-4 col-6">
                                    <?php echo "<a class='gray_link' href='categoriestore.php?id=" . $rowtc['id'] . "'>" . "<span>" . $rowtc['name'] . "</span>" . "</a>"; ?>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var buttons = document.querySelectorAll(".open-modal-button");
        buttons.forEach(function (button) {
            button.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent the default link behavior
                var imgData = button.getAttribute("data-img");
                var detail = button.getAttribute("data-detail");
                var coupon = button.getAttribute("data-coupon");
                var name = button.getAttribute("data-name");
                var website = button.getAttribute("data-website");
                
                openModal(imgData, detail, coupon, name, website);
            });
        });
    });
</script>




<?php include 'footer.php' ?>