<?php
include "admindashboard/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
 

    <link
      rel="icon"
      type="image/x-icon"
      href="./assets/fav.png"
    />

   

    

    <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <meta name="description" content="Get Crazzy 50% Off Coupon Code, Vouchers Code & Deals From crazzycoupon.com | Shop Smarter & Save Big On Cart | Verified & Crazzy Coupons 2023">

  
    <meta
      name="keywords"
      content="Vevor Discount Code, Vevor Promo Code, Vevor Coupon Code, Vevor Voucher Code"
    />


    <title>Crazzy Coupon</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="./assets/fav.png"
    />
  

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
   
    
    <!-- Ganet site verification 33f82fa50d5c148e5be5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/new/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/new/css/slick-slider.css" />
    <link rel="stylesheet" href="assets/new/css/style.css" />
    <link rel="stylesheet" href="assets/new/css/pirvacy-policy.css" />
    <link rel="stylesheet" href="assets/new/css/about-us.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      
    </style>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/front/assets/js/jquery-1.11.1.min.html"></script>
    <script src="../cdn.jsdelivr.net/npm/js-cookie%40rc/dist/js.cookie.min.js"></script>
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </head>

  <body>
<?php
$querylogo="select * from logo";
$resultlogo=mysqli_query($conn,$querylogo);
?>

    <!-- Header Section Start -->
    <header style="padding-top: 10px; padding-bottom: 10px">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2 col-md-2" style="width:100px;height:100px">
            <a href="index" class="logo" >
                        <?php while($rowlogo=mysqli_fetch_array($resultlogo))
                    {
                        ?>
                <img class="w-100 "  src='data:logo/gif;base64,<?php echo base64_encode($rowlogo[1]);?>'  alt='Header  Logo'/>
              <?php
                    }
              ?>
            </a>
          </div>
          <div class="col-lg-6"></div>
          <div class="col-lg-4 col-md-4">
            <div class="navigations">
              <ul class="d-flex list-unstyled align-items-center ">
                <li class=" browse-btn">
                  <a href="javascript:;"> <button class="custom-btn btn-6"><span>Categories</span></button></a>
                </li>
              </ul>
              
            </div>
          </div>
        </div>
        <ul class="d-flex sub-menu browse-sub-menu list-unstyled">
<?php
$query="select * from category ORDER BY  id DESC limit 12";
$result=mysqli_query($conn,$query);
?>
            <?php while($row=mysqli_fetch_array($result))
                    {
                        ?>

          <li style="width:100px;height:100px">
            <!-- <a href="categoriestore"> -->
            <img src='data:logo/gif;base64,<?php echo base64_encode($row[2]);?>'  alt='Category Image'/>
              <!-- <img src="uploads/category/Sportswear.png" alt="Sportswear" /> -->
              <?php echo	"<a href='categoriestore?id=".$row['id']."'>"."<span>". $row[1]."</span>"."</a>";?>
              <!-- <span><?php// echo $row['name'];?></span> -->
            <!-- </a> -->
          </li>
<?php
                    }
?>
          <!-- <li>
            <a href="categoriestore">
              <img
                src="uploads/category/Home-And-Garden.png"
                alt="Home & Garden"
              />
              <span>Home & Garden</span>
            </a>
          </li>
          <li>
            <a href="categoriestore">
              <img src="uploads/category/clothing3.png" alt="Clothing" />
              <span>Clothing</span>
            </a>
          </li>
          <li>
            <a href="categoriestore">
              <img
                src="uploads/category/Travel-and-ticket.png"
                alt="Travel & Tickets"
              />
              <span>Travel & Tickets</span>
            </a>
          </li>
          <li>
            <a href="3">
              <img
                src="uploads/category/Health-And-Beauty.png"
                alt="Health & Beauty"
              />
              <span>Health & Beauty</span>
            </a>
          </li>
          <li>
            <a href="categoriestore">
              <img
                src="uploads/category/Computer-Accessories.png"
                alt="Computer Accessories"
              />
              <span>Computer Accessories</span>
            </a>
          </li>
          <li>
            <a href="categoriestore">
              <img src="uploads/category/Ecommerce.png" alt="E-commerce" />
              <span>E-commerce</span>
            </a>
          </li>
          <li>
            <a href="categoriestore">
              <img
                src="uploads/category/Department-store.png"
                alt="Department Store"
              />
              <span>Department Store</span>
            </a>
          </li>
          <li>
            <a href="categoriestore">
              <img
                src="uploads/category/Home-And-Accomodation.png"
                alt="Home & Rooms"
              />
              <span>Home & Rooms</span>
            </a>
          </li>
          <li>
            <a href="categoriestore">
              <img src="uploads/category/Gift.png" alt="Gifts" />
              <span>Gifts</span>
            </a>
          </li> -->

          <li style="width:100px;height:100px">
            <a href="categories">
              <img src="assets/new/images/category/More.png" alt="Holiday" />
              <span>More</span>
            </a>
          </li>
        </ul>
      </div>
    </header>
<?php
$querylogom="select * from logo";
$resultlogom=mysqli_query($conn,$querylogom);
?>

    <div class="mobile-header">
      <div class="container">
        <div class="mainbox">
          <div class="logo">
            <a href="index">
                                        <?php while($rowlogom=mysqli_fetch_array($resultlogom))
                    {
                        ?>
                <img class="w-100" src='data:logo/gif;base64,<?php echo base64_encode($rowlogom[1]);?>'  alt='Header  Logo'/>
              <?php
                    }
                    ?>
            </a>
          </div>
          <div class="searchbar searchbox" id="searchbox_nav">
            <input type="search" placeholder="what are you looking for?" />
            <i class="fa fa-search"></i>
            <div>
              <ul
                style="
                  border-top-left-radius: 25px;
                  border-top-right-radius: 25px;
                  top: 101%;
                  display: none;
                "
                class="list-unstyled search-results results results_nav"
              >
            
            </ul>
            </div>
          </div>
          
          <div style="color: black;" class="mobile-nav-btn">
            <i class="fa fa-bars"></i>
          </div>
          
        </div>
       </div>
    </div>
<?php
$querym="select * from category";
$resultm=mysqli_query($conn,$querym);
?>

    <div class="mobile-nav-main">
      <div class="mobile-nav">
        <i class="fa fa-times close_btn"></i>
        <a href="categoriestore" class="logo">
          <img
            class="w-100"
            src="./assets/logo.png"
            alt="Logo"
          />
        </a>
        <h6>Browse By Category</h6>
        <ul class="list-unstyled">
                        <?php while($rowm=mysqli_fetch_array($resultm))
                    {
                        ?>

          <li>
            <img src='data:logo/gif;base64,<?php echo base64_encode($rowm[2]);?>'  alt='Category Image'/>
              <?php echo	"<a href='categoriestore?id=".$rowm['id']."'>"."<span>". $rowm[1]."</span>"."</a>";?>
          </li>
<?php
                    }
?>
<!--          <li>
            <a href="categoriestore"
              ><img
                src="uploads/category/Home-And-Garden.png"
                alt="Home & Garden"
              />
              <span>Home & Garden</span></a
            >
          </li>
          <li>
            <a href="categoriestore"
              ><img src="uploads/category/clothing3.png" alt="Clothing" />
              <span>Clothing</span></a
            >
          </li>
          <li>
            <a href="categoriestore"
              ><img
                src="uploads/category/Travel-and-ticket.png"
                alt="Travel & Tickets"
              />
              <span>Travel & Tickets</span></a
            >
          </li>
          <li>
            <a href="categoriestore"
              ><img
                src="uploads/category/Health-And-Beauty.png"
                alt="Health & Beauty"
              />
              <span>Health & Beauty</span></a
            >
          </li>
          <li>
            <a href="categoriestore"
              ><img
                src="uploads/category/Computer-Accessories.png"
                alt="Computer Accessories"
              />
              <span>Computer Accessories</span></a
            >
          </li>
          <li>
            <a href="categoriestore"
              ><img src="uploads/category/Ecommerce.png" alt="E-commerce" />
              <span>E-commerce</span></a
            >
          </li>
          <li>
            <a href="categoriestore"
              ><img
                src="uploads/category/Department-store.png"
                alt="Department Store"
              />
              <span>Department Store</span></a
            >
          </li>
          <li>
            <a href="categoriestore"
              ><img
                src="uploads/category/Home-And-Accomodation.png"
                alt="Home & Rooms"
              />
              <span>Home & Rooms</span></a
            >
          </li>
          <li>
            <a href="categoriestore"
              ><img src="uploads/category/Gift.png" alt="Gifts" />
              <span>Gifts</span></a
            >
          </li> -->
        </ul>
      </div>
    </div>

    <!-- Header Section End -->