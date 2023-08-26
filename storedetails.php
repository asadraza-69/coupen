<?php
include "header.php";
include "admindashboard/conn.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$querystore="select * from store where id='$id'";
	$resultstore=mysqli_query($conn,$querystore);

$querycoupon="select * from coupon where store='$id' && coupontype=4";
$resultcoupon = mysqli_query($conn, $querycoupon);
$querycoupond="select * from coupon where store='$id' && coupontype=1";
$resultcoupond = mysqli_query($conn, $querycoupond);
$querycoupona="select * from coupon where store='$id'";
$resultcoupona = mysqli_query($conn, $querycoupona);
$querycouponam="select * from coupon where store='$id'";
$querycouponam = mysqli_query($conn, $querycouponam);}
?>

 <!-- Banner Section Start -->
      <!-- Header Section Start -->
      <!-- Store Section Start -->
      <style>
         ol{
         margin-left: 21px;
         }
         .coupons-tiles .coupon-content span{
         font-size: 14px;
         text-transform: uppercase;
         color: var(--primary-color);
         font-weight: bold;
         }
         .store-sidebar h3 {
         font-size: 17px;
         }
         .store-sidebar .hints-tips ul {
         font-weight: 400;
         }
      </style>
                                  <?php while($rowstore=mysqli_fetch_array($resultstore))
                    {
		?>

      <section class="store-sec sec-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="main-sidebar">
                     <a class="store-img" href="#">
                     <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowstore[2]);?>'  alt='Store Image'/>
                     </a>
                     <span class="store-short-desc"><a class="show-more" href="javascript:;">Show more</a></span>
                     <div class="store-sidebar">
                        <div class="available-offers">
                           <p>Coupon Type</p>
                           <div class="available-options">
                              <label>
                              <input name="offer_type" type="radio" class="slectOne" id="all" data-id="all" checked>
                              <span>All Offers</span>
                              </label>
                              <label>
                              <input name="offer_type" type="radio" class="slectOne" data-id="online">
                              <span>Coupons</span>
                              </label>
                              <label>
                              <input name="offer_type" type="radio" class="slectOne" data-id="offline">
                              <span>Deals</span>
                              </label>
                           </div>
                        </div>
                       
                  
                       
                        <div class="social-media-store-kit">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 main-contentbar">
                  <div class="tile-mainbox">
                     <div class="store-img">
                     <img src='data:logo/gif;base64,<?php echo base64_encode($rowstore[2]);?>'  alt='Store Image'/>
                     </div>
                     <div class="sec-title">
                        <h1><?php echo $rowstore['name'];?></h1>
                        <ul class="list-unstyled d-flex">
                           <li>&#10003; Delivery</li>
                           <li>&#10003; Free Shipping</li>
                        </ul>
                     </div>
                  </div>
                  <div class="desktop-coupon-tiles">
                     <div id="all" style="display:block;" class="coupons-tiles all">
                         <?php while ($rowcoupond = mysqli_fetch_array($resultcoupona)) {
                                ?>
                              <?php
                                $queryc = "select * from category where id=" . $rowcoupond['category'];
                                $resultc = mysqli_query($conn, $queryc);
                                $rowc = mysqli_fetch_row($resultc);
                                ?>
                                 <?php
                                $querystore = "select * from store where id=" . $rowcoupond['store'];
                                $resultstore = mysqli_query($conn, $querystore);
                                $rowstore = mysqli_fetch_row($resultstore);
                                 $percentage = $rowcoupond['percent'];
                                $detail = $rowcoupond['details'];
                                $coupon = $rowcoupond['code'];
                                $website = $rowcoupond['link'];

                                ?>
          
                        <div class="coupon-tile">
                           <div class="discount-percentage">
                               <p><?php echo $percentage?></p>
                           </div>
                           <div class="coupon-content">
                              <span>code</span>
                              <p><?php echo $detail?></p>
                              <div class="verified">
                                                                                    <span>Verified <i class="fa fa-check-circle" style="background: #ffffff00;color: #18f351;font-size: 15px;"></i></span>
                                                                            </div>
                           </div>
                           <div class="getcodebtn">
                              <a  onclick='openmodal("<?php echo base64_encode($rowstore[2])?>","<?php echo $detail?>","<?php echo $coupon?>","<?php echo $rowstore[1]?>","<?php echo $website?>")' class="custom-deal-btn">Get Code</a>
                              <span>***</span>
                           </div>
                        </div>
                        <?php 
                        }?>
                     
                     </div>
                     <div id="online" style="display:none;" class="coupons-tiles online">
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
                                                                 $percentage = $rowcoupond['percent'];

                                $detail = $rowcoupon['details'];
                                $coupon = $rowcoupon['code'];
                                $website = $rowcoupon['link'];

                                ?>
          
                        <div class="coupon-tile">
                           <div class="discount-percentage">
                              <p><?php echo $percentage?></p>
                           </div>
                           <div class="coupon-content">
                              <span>code</span>
                              <p><?php echo $detail?></p>
                              <div class="verified">
                              </div>
                           </div>
                           <div class="getcodebtn">
                              <a   onclick='openmodal("<?php echo base64_encode($rowstore[2])?>","<?php echo $detail?>","<?php echo $coupon?>","<?php echo $rowstore[1]?>","<?php echo $website?>")' class="offer_anchor" class="tile-btn">Get Code</a>
                              <span>***</span>
                           </div>
                        </div>
                        <?php 
                        }?>
                     </div>
                     <div id="offline" style="display:none;" class="coupons-tiles offline">
                              <?php while ($rowcoupond = mysqli_fetch_array($resultcoupond)) {
                                ?>
                              <?php
                                $queryc = "select * from category where id=" . $rowcoupond['category'];
                                $resultc = mysqli_query($conn, $queryc);
                                $rowc = mysqli_fetch_row($resultc);
                                ?>
                                 <?php
                                $querystore = "select * from store where id=" . $rowcoupond['store'];
                                $resultstore = mysqli_query($conn, $querystore);
                                $rowstore = mysqli_fetch_row($resultstore);
                                $detail = $rowcoupond['details'];
                                $coupon = $rowcoupond['code'];
                                $website = $rowcoupond['link'];

                                ?>
          
                        <div class="coupon-tile">
                           <div class="discount-percentage">
                           </div>
                           <div class="coupon-content">
                              <span>code</span>
                              <p><?php echo $detail?></p>
                              <div class="verified">
                              </div>
                           </div>
                           <div class="getcodebtn">
                              <a   onclick='openmodal("<?php echo base64_encode($rowstore[2])?>","<?php echo $detail?>","<?php echo $coupon?>","<?php echo $rowstore[1]?>","<?php echo $website?>")' class="offer_anchor" class="tile-btn">Get Code</a>
                              <span>***</span>
                           </div>
                        </div>
                        <?php 
                        }?>
                       
                     </div>
                  </div>
                  <div class="store-tabbing mobile-tabbing">
                     <div class="tabs">
                        <ul>
                           <li data-tab="tab-1">All Offers</li>
                           <li data-tab="tab-2">Coupons</li>
                           <li data-tab="tab-3">Deals</li>
                        </ul>
                     </div>
                     <span class="store-short-desc">When you buy through links on Retailescaper we may earn a
                     commission. <a href="#">Learn
                     More</a></span>
                     <div class="tabbing-content">
                        <div class="tab-content" id="tab-1">
                                                    <?php while ($rowcoupond = mysqli_fetch_array($resultcouponam)) {
                                ?>
                              <?php
                                $queryc = "select * from category where id=" . $rowcoupond['category'];
                                $resultc = mysqli_query($conn, $queryc);
                                $rowc = mysqli_fetch_row($resultc);
                                ?>
                                 <?php
                                $querystore = "select * from store where id=" . $rowcoupond['store'];
                                $resultstore = mysqli_query($conn, $querystore);
                                $rowstore = mysqli_fetch_row($resultstore);
                                $detail = $rowcoupond['details'];
                                $coupon = $rowcoupond['code'];
                                $website = $rowcoupond['link'];

                                ?>
          
                        <div class="coupon-tile">
                           <div class="discount-percentage">
                              <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowstore[2]); ?>' alt='Category Image' />
                           </div>
                           <div class="coupon-content">
                              <span>code</span>
                              <p><?php echo $detail?></p>
                              <div class="verified">
                              </div>
                           </div>
                           <div class="getcodebtn">
                              <a   onclick='openmodal("<?php echo base64_encode($rowstore[2])?>","<?php echo $detail?>","<?php echo $coupon?>","<?php echo $rowstore[1]?>","<?php echo $website?>")' class="offer_anchor" class="tile-btn">Get Code</a>
                              <span>***</span>
                           </div>
                        </div>
                        <?php 
                        }?>
                        </div>
                        <div class="tab-content" id="tab-2">
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
          
                        <div class="coupon-tile">
                           <div class="discount-percentage">
                              <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowstore[2]); ?>' alt='Category Image' />
                           </div>
                           <div class="coupon-content">
                              <span>code</span>
                              <p><?php echo $detail?></p>
                              <div class="verified">
                              </div>
                           </div>
                           <div class="getcodebtn">
                              <a   onclick='openmodal("<?php echo base64_encode($rowstore[2])?>","<?php echo $detail?>","<?php echo $coupon?>","<?php echo $rowstore[1]?>","<?php echo $website?>")' class="offer_anchor" class="tile-btn">Get Code</a>
                              <span>***</span>
                           </div>
                        </div>
                        <?php 
                        }?>
                        </div>
                        <div class="tab-content" id="tab-3">
                           <?php while ($rowcoupon = mysqli_fetch_array($resultcoupond)) {
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
          
                        <div class="coupon-tile">
                           <div class="discount-percentage">
                              <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowstore[2]); ?>' alt='Category Image' />
                           </div>
                           <div class="coupon-content">
                              <span>code</span>
                              <p><?php echo $detail?></p>
                              <div class="verified">
                              </div>
                           </div>
                           <div class="getcodebtn">
                              <a   onclick='openmodal("<?php echo base64_encode($rowstore[2])?>","<?php echo $detail?>","<?php echo $coupon?>","<?php echo $rowstore[1]?>","<?php echo $website?>")' class="offer_anchor" class="tile-btn" style="background: #0074D9;">Get Deal</a>
                              <span>***</span>
                           </div>
                        </div>
                        <?php 
                        }?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="offset-lg-3 col-lg-9 ">
               </div>
            </div>
         </div>
      </section>
      <?php
                    }
      ?>
      <!-- Store Section End -->
      <style>
         .heading-links a{
         font-size:12px;
         }
      </style>
<?php include "footer.php"?>