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
            <?php echo "<a href='categoriestore?id=".$rowcategory['id']."'>".$rowcategory['name']."</a>"; ?>

              <!-- <a href="categoriestore">Art & Crafts</a> -->
            </div>
<?php
                    }
?>
            <!-- <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Automotive</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Bed & Bath</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Books</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore"
                >Cellular Phone and Tablets</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Clothing</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore"
                >Computer Accessories</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore"
                >Computers & Software</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore"
                >Consumer Electronics</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Cosmetics</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Delivery</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Department Store</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">E-commerce</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Education</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Entertainment</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Fashion</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Food & Beverage</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Footwear</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Freebies</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Furniture & Decor</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Games</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Gifts</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Gifts & Flowers</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Grocery & Food</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Health & Beauty</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Home & Garden</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Home & Rooms</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Home Accessories</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Kids & Baby</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Kitchen & Dining</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Laptop</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Men</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore"
                >Motorcycle Accessories</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore"
                >Network and Communication</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">News</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Office & School</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Outdoor Equipment</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Pets</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Photography</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Sports & Outdoor</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="category/sportswear.html">Sportswear</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Tax & Finance</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore"
                >Textile and Interior Design</a
              >
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Travel & Tickets</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">TV</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Web Hosting</a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <a href="categoriestore">Women</a>
            </div> -->

          </div>
        </div>
      </div>
    </section>

    <!-- Banner Section End -->

   

<?php include 'footer.php'?>