 
 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Store title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id='closeModalButton'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contentbox">
                    <div class="row">
                      <!-- border css put in below style tag border: 2px solid black; -->
                    <div class="titlebox col-lg-3 col-md-6 col-12" style=" display: flex; justify-content: center; align-items: center;">
                        <img src="https://coupon.spaceland.biz/uploads/store/mpixcouponcode.png" style="max-width: 100%; max-height: 100px;" alt="Brand Image" id="imageData">
                    </div>
                        <div class="copy-code col-md-9" id="">
                            <h4 class="main_title" id="detail">20% Off On All Orders</h4>
                            <h4 class="no_code" style="display: none;">No coupon code required.</h4>


                            <div class="mycustom">

                                <input class="code-text" id="copyTarget" readonly value="EMAILFF10" type="text" name="">
                                <div class="input-group-prepend">
                                    <a style="background-color: #0019ff; color: white;" href="javascript:;"
                                        id="copyButton" class="btn btn-primary btn-sm"><i
                                            class="fa fa-clone fa-flip-vertical"></i></a>
                                </div>
                            </div>
                            <div class="flex">

                                <span>Copy and paste this code</span>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-12">

    <div class="popup-btn-box">
                                <div class="work-btn-box">
                                    
                                    <div class="toggle-radio">
                                      <input type="radio" data-id="" class="rdo" name="rdo" id="yes" value="yes">
                                      <input type="radio" data-id="" class="rdo" name="rdo" id="no" value="no">
                                      <input type="hidden" value="9124" class="offer_id">
                                      <div class="switch">
                                        <label for="yes">Yes</label>
                                        <label for="no">No</label>
                                        <span></span>
                                      </div>
                                    </div>
                                </div>
                                <span style="font-size:22px">Did It Works ?</span>
                            </div>
                            <center>
                            <br>
                            <a class="gray_link" href="categoriestore">
                                <a href='#' class="custom-btn btn-7" id="link" target="_blank"><span>Continue </span></a>

                            </a></center>

                        </div>


                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
</div>
 
 <!-- Never Miss Another Deal Section Start -->

 <section class="never-miss-deals-sec">
      <div class="container">
        <div class="mainbox">
          <h3>Never miss another deal</h3>
          <p>
            Be the first to get notified as soon as we update a new offer or
            discount.
          </p>
<?php
if(isset($_POST['btnSubmit']))
{
    $email=$_POST['email'];
    $query1="insert into subscribe( email)values('$email')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
      echo "<script>alert('Thanks for subscribe us')</script>";
//       header("Location:services.php");       
    }else{
//         echo mysqli_error($conn);

        echo "<script>alert('Some Error Occured')</script>";
    }
} 
?>

          <div class="subscribe-us">
    <form method="POST" enctype="multipart/form-data">
              <input type="email" name="email" placeholder="Enter your email address" />
              <input type="submit" class="btn-primry" name="btnSubmit" value="Subscribe" />
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Never Miss Another Deal Section End-->
    <!-- Coupon Popup Start -->

    <style>
      .copy-code {
        text-align: left;
        padding-left: 5px;
      }
      .copy-code .main_title {
        font-size: 23px;
        font-weight: 600;
      }
      .titlebox {
        padding-right: 5px;
      }
      .copy-code span {
        display: block;
        padding-bottom: 0px !important;
      }
      .flex {
        display: flex;
        flex-direction: row;
        flex: 1;
        justify-content: space-between;
        height: 27px;
        margin-top: 7px;
      }
      .flex a,
      .details {
        align-items: flex-end;
        font-weight: 400;
      }
      .popup-btn-box {
        position: relative;
        display: flex;
        justify-content: space-between;
      }
      .popup-btn-box a {
        padding: 15px 50px;
        background: var(--primary-color);
        display: block;
        border-radius: 8px;
        color: white;
        font-weight: 600;
        font-size: 16px;
        position: relative;
      }
      .popup-btn-box span {
        display: flex;
        justify-content: center;
        flex-direction: column;
        margin-right: 5px;
      }
      .work-btn-box {
        display: flex;
      }
      .flex a {
        color: #f57f25;
      }

      .mycustom {
        margin-top: 5px;
        position: relative;
      }
      .mycustom input[type="text"] {
        border-radius: 12px;
        border: solid 1.5px #f57f25;
        width: 100%;
        padding-right: 123px;
        width: 100%;
        height: 55px;
        padding-left: 13px;
        font-size: 18px;
        font-weight: 600;
      }
      .mycustom .input-group-prepend {
        position: absolute;
        right: 6px;
        top: 4px;
        bottom: 4px;
        z-index: 9;
      }
      .mycustom i {
        font-size: 18px;
        padding: 8px;
      }
      .mycustom a {
        border-radius: 0.5rem;
        border-color: unset;
      }

      .switch {
        position: absolute;
        top: 58%;
        left: 24%;
        width: 130px;
        height: 53px;
        text-align: center;
        margin: -30px 0 0 -75px;
        background: #08faad;
        transition: all 0.2s ease;
        border-radius: 10px;
      }
      .switch span {
        position: absolute;
        width: 20px;
        height: 4px;
        top: 50%;
        left: 50%;
        margin: -2px 0px 0px -4px;
        background: #fff;
        display: block;
        transform: rotate(-45deg);
        transition: all 0.2s ease;
      }
      .switch span:after {
        content: "";
        display: block;
        position: absolute;
        width: 4px;
        height: 12px;
        margin-top: -8px;
        background: #fff;
        transition: all 0.2s ease;
      }
      .toggle-radio input[type="radio"] {
        display: none;
      }
      .switch label {
        cursor: pointer;
        color: rgba(0, 0, 0, 0.2);
        width: 60px;
        line-height: 50px;
        transition: all 0.2s ease;
      }
      label[for="yes"] {
        position: absolute;
        left: 0px;
        height: 20px;
      }
      label[for="no"] {
        position: absolute;
        right: 0px;
      }
      #no:checked ~ .switch {
        background: #eb4f37;
      }
      #no:checked ~ .switch span {
        background: #fff;
        margin-left: -8px;
      }
      #no:checked ~ .switch span:after {
        background: #fff;
        height: 20px;
        margin-top: -8px;
        margin-left: 8px;
      }
      #yes:checked ~ .switch label[for="yes"] {
        color: #fff;
      }
      #no:checked ~ .switch label[for="no"] {
        color: #fff;
      }

      @media (max-width: 767px) {
        .coupon-popup-sec .coupon-popup-main .contentbox .titlebox img {
          border: 1px solid #0000002e;
          max-width: 50%;
          flex: 0 0 25%;
          height: 130px;
          object-fit: contain;
          margin-right: 15px;
          padding: 3px;
          border-radius: 10px;
        }
        .copy-code {
          text-align: center;
          padding-left: 15px;
        }
        .copy-code .main_title {
          font-size: 20px;
          margin-bottom: 12px;
          width: 100%;
        }
        .flex {
          display: block;
          text-align: center;
          padding: 15px;
        }
        .flex a,
        .details {
          /* display: flex; */
          /* align-items: flex-end; */
          display: inline-flex;
        }
        .popup-btn-box {
          flex-direction: column;
          justify-content: center;
        }
        .popup-btn-box a {
          margin-top: 55px;
        }
        .work-btn-box {
          display: flex;
          justify-content: center;
          margin-bottom: 15px;
          margin-top: 25px;
        }
        .switch {
          top: 28%;
          left: 28%;
          margin: unset;
        }
        .popup-btn-box span {
          margin-right: 0px;
        }
      }
    </style>

    <div class="overlay"></div>
    

    <!-- Coupon Popup End -->

    <!-- Footer Start -->
     <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="footer-links">
              <h4><b>General</b></h4>
              <ul>
                <ul>
                  <li>Facebook</li>
                  <li>Twitter</li>
                  <li>Instagram</li>
                </ul>
                <p><br /></p>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="footer-links">
              <h4><b>Popular Events</b></h4>
              <ul>
                <ul>
                  <li>Black Friday</li>
                  <li>Thanks Giving</li>
                  <li>Cyber Monday</li>
                  <li>Valentine's Offer<br /></li>
                </ul>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="footer-links">
              <h4><b>Connect with us</b></h4>
              <ul>
                <ul>
                  <li>About</li>
                  <li>Blog</li>
                  <li>Partner with us</li>
                  <li>Media Kit</li>
                  <li><br /></li>
                </ul>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer> 
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <ul class="list-unstyled d-flex align-items-center">
              <li>
                <a
                  href="#"
                  >Terms & Condition</a
                >
              </li>
              <li>
                <a
                  href="#"
                  >Privacy Policy</a
                >
              </li>
              
            </ul>
          </div>
          <div class="col-lg-4 col-md-4">
            <p style="font-size:16px">
              Crazzy - Coupons &copy;2023 - All rights
              reserved
            </p>
          </div>
        </div>
      </div>
    </div>

    

    <!-- Footer End -->
    <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- <script src="../code.jquery.com/jquery-1.10.2.js"></script> -->
    <!-- <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script src="assets/new/js/theme-lib.js"></script>
    <script src="assets/new/js/theme-fun.js"></script>
    <script src="assets/js/site.js"></script>

    


    <script>
      $(document).ready(function () {
        $(".slectOne").on("change", function () {
          $(".slectOne").not(this).prop("checked", false);
          //console.log($(this).data( "id" ));
          if ($(this).is(":checked")) {
            if ($(this).data("id") == "online") {
              console.log("online1");
              $(".online").show();
              $(".all").hide();
              $(".offline").hide();
            } else if ($(this).data("id") == "offline") {
              console.log("offline1");
              $(".offline").show();
              $(".all").hide();
              $(".online").hide();
            } else if ($(this).data("id") == "all") {
              console.log("all1");
              $(".all").show();
              $(".online").hide();
              $(".offline").hide();
              console.log("all1");
              //console.log($(this).data( "id" ));
              //console.log('emppty');
            }
          }
        });

        if ($(".store-short-desc > p").length > 1) {
          $(".store-short-desc > p:gt(-3)").hide();
          $(".show-more").show();
        } else {
          $(".show-more").hide();
        }

        $(".show-more").on("click", function () {
          //toggle elements with class .ty-compact-list that their index is bigger than 2
          $(".store-short-desc > p:gt(-3)").toggle();
          //change text of show more element just for demonstration purposes to this demo
          $(this).text() === "Show more"
            ? $(this).text("Show less")
            : $(this).text("Show more");
        });
      });
    </script>

    <script>
      $(document).ready(function () {
        $("#copyButton").click(function () {
          $(this).html(
            '<i class="fa fa-check-circle" style="color: #ffffff;"></i>'
          );
        });
      });

      document
        .getElementById("copyButton")
        .addEventListener("click", function () {
          copyToClipboard(document.getElementById("copyTarget"));
        });

      function copyToClipboard(elem) {
        // create hidden text element, if it doesn't already exist
        var targetId = "_hiddenCopyText_";
        var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
        var origSelectionStart, origSelectionEnd;
        if (isInput) {
          // can just use the original source element for the selection and copy
          target = elem;
          origSelectionStart = elem.selectionStart;
          origSelectionEnd = elem.selectionEnd;
        } else {
          // must use a temporary form element for the selection and copy
          target = document.getElementById(targetId);
          if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
          }
          target.textContent = elem.textContent;
        }
        // select the content
        var currentFocus = document.activeElement;
        target.focus();
        target.setSelectionRange(0, target.value.length);

        // copy the selection
        var succeed;
        try {
          succeed = document.execCommand("copy");
        } catch (e) {
          succeed = false;
        }
        // restore original focus
        if (currentFocus && typeof currentFocus.focus === "function") {
          currentFocus.focus();
        }

        if (isInput) {
          // restore prior selection
          elem.setSelectionRange(origSelectionStart, origSelectionEnd);
        } else {
          // clear temporary content
          target.textContent = "";
        }
        return succeed;
      }
    </script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
      $(document).ready(function () {
        var ToC =
          "<div style='float: none; width: 100%;'><nav role='navigation' class='table-of-contents'>" +
          "<ul>";j

        var newLine, el, title, link;

        $(".rowmain h2").each(function () {
          el = $(this);
          title = el.text();
          $(this).attr("id", title);
          link = "#" + el.attr("id");

          newLine =
            "<li>" + "<a href='" + link + "'>" + title + "</a>" + "</li>";

          ToC += newLine;
        });

        ToC += "</ul>" + "</nav></div>";

        $(".h2bb").append(ToC);
      });
    </script>

    

    <script>
      $(document).ready(function () {
        $(".store_list a:not([data-category='A'])").hide();
      });

      $(".filter a").on("click", function () {
        var getFilterName = $(this).attr("class");
        var isClassAll = $(this).hasClass("all");
        if (isClassAll != true) {
          $(
            ".store_list a:not([data-category='" + getFilterName + "'])"
          ).hide();
          $(".store_list [data-category='" + getFilterName + "']").show();
          $(".filter a:not([class='" + getFilterName + "'])").removeClass(
            "selected"
          );
          $(this).addClass("selected");
          console.log(getFilterName);
        } else {
          $(".store_list a").show();
        }
      });

      $(".mobile_filter a").on("click", function () {
        var getFilterName = $(this).attr("class");
        var isClassAll = $(this).hasClass("all");
        if (isClassAll != true) {
          $(
            ".store_list a:not([data-category='" + getFilterName + "'])"
          ).hide();
          $(".store_list [data-category='" + getFilterName + "']").show();

          $(".starting_name").text(getFilterName);
          $(".content-entry").removeClass("open");
          $(".accordion-content").slideUp(300);
          $(
            ".mobile_filter a:not([class='" + getFilterName + "'])"
          ).removeClass("selected_mobile");
          $(this).addClass("selected_mobile");
          console.log(getFilterName);
        } else {
          $(".store_list a").show();
        }
      });
    </script>
     <script>
 var swiper = new Swiper(".swiper-container", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 20,
    stretch: 0,
    depth: 350,
    modifier: 1,
    slideShadows: true
  },
  pagination: {
    el: ".swiper-pagination"
  }
});

    </script>
    <script>
      function openmodal(imgdata,detail,coupon,name,website){
        $('#exampleModal').modal('show');
        console.log(imgdata)
        const imgElement = document.getElementById('imageData');
        imgElement.src = `data:logo/gif;base64,${imgdata}`;

        const details = document.getElementById('detail').innerHTML = detail;
        document.getElementById('exampleModalLabel').innerHTML = name;

        // const copyTarget = document.getElementById('copyTarget').value = coupon;
        // document.getElementById('link').setAttribute('href', website);
        console.log("website",website)
        // window.open(website, "_blank");
        const copyTarget = document.getElementById('copyTarget').value = coupon;
        console.log("copyTarget",copyTarget)

        const linkElement = document.getElementById('link');
        console.log("linkElement",linkElement)
        website = website.trim();
        const fullWebsite = website.startsWith('http://') || website.startsWith('https://') ? website : 'http://'+website;
        linkElement.setAttribute('href', fullWebsite);
        console.log("linkElement", linkElement);
        linkElement.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            window.open(fullWebsite, "_blank"); // Navigate within the same tab
        });



      }
    
    </script>
    <script>
          $('#closeModalButton').on('click', function() {
    $('#exampleModal').modal('hide')
});
    </script>
    <script>
        function search(){
            const searchQuery = document.getElementById('searchtxt').value;

            // Construct the URL with the search query as a parameter
            const searchUrl = `search?query=${encodeURIComponent(searchQuery)}`;

            // Redirect the user to the search.php page
            window.location.href = searchUrl;
        }
    </script>
  </body>
</html>
