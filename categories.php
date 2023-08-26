<?php
include "header.php";
include "admindashboard/conn.php";
?>




<!-- Banner Section Start -->
<style>
      .product-tiles {
        padding-top: 16px;
      }
    </style>
<?php
$querycategory="select * from category";
$resultcategory=mysqli_query($conn,$querycategory);
?>

    <section class="banner-sec all-cat-banner sec-padding" style="background-color:white">
      <div class="container">
        <div class="contentbox">
          <h1 style="font-size: 22px;color:black"><b>All Categories</b></h1>
          <span style="color:black"><b>variety of coupon in different categoriess</b></span>
        </div>
        <div class="all-cats-main">
          <div class="row">
          <?php while($rowcategory=mysqli_fetch_array($resultcategory))
                    {
                        ?>

            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
            <?php echo "<a href='categoriestore.php?id=".$rowcategory['id']."'>".$rowcategory['name']."</a>"; ?>

              <!-- <a href="categoriestore.php">Art & Crafts</a> -->
            </div>
<?php
                    }
?>
            <!-- <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Automotive</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Bed & Bath</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Books</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php"
                >Cellular Phone and Tablets</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Clothing</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php"
                >Computer Accessories</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php"
                >Computers & Software</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php"
                >Consumer Electronics</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Cosmetics</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Delivery</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Department Store</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">E-commerce</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Education</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Entertainment</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Fashion</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Food & Beverage</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Footwear</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Freebies</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Furniture & Decor</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Games</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Gifts</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Gifts & Flowers</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Grocery & Food</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Health & Beauty</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Home & Garden</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Home & Rooms</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Home Accessories</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Kids & Baby</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Kitchen & Dining</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Laptop</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Men</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php"
                >Motorcycle Accessories</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php"
                >Network and Communication</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">News</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Office & School</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Outdoor Equipment</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Pets</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Photography</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Sports & Outdoor</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="category/sportswear.html">Sportswear</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Tax & Finance</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php"
                >Textile and Interior Design</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Travel & Tickets</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">TV</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Web Hosting</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore.php">Women</a>
            </div> -->

          </div>
        </div>
      </div>
    </section>

    <!-- Banner Section End -->

   

<?php include 'footer.php'?>