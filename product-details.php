<?php 
include("include/config.php");
error_reporting(0);
ini_set('display_errors', 0);

 $id=$_GET['id'];
$categories=$_GET['categories'];

 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:59:07 GMT -->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Velocity Exim Goods</title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
  <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/plugins/slick.css" />
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css" />
  <!-- Icon Fonts -->
  <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css" />
  <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css" />

  <!-- Organicz Style sheet -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.ico" />


          <style>
    @media(max-width: 768px) {
        .subheader {
            padding: 150px 0 70px !important;
        }
    }

    .subheader {
        padding: 280px 0 140px !important;
        position: relative;
    }
    </style>
</head>

<body>
  <!-- Preloader start -->

  <!-- Preloader End -->
 
  <!-- Header Start -->
  <?php 
    include("include/header.php"); ?>
  <!-- Header End -->

  <!-- Subheader Start -->
  <div class="subheader bg-cover dark-overlay dark-overlay-2" style="background-image: url('assets/img/subheader.webp')">
    <div class="absolute-subheader">
      <div class="container">
        <div class="subheader-inner">
          <h1>Product Details</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Product Details
              </li>
            </ol>
          </nav>
          <img src="assets/img/veg/8.webp" class="image-1" alt="img" />
          <img src="assets/img/veg/5.webp" class="image-2" alt="img" />
        </div>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <section class="section product-single extra-padding pb-0">
    <div class="container">
                    
      <div class="row">
      <?php
                    $sql=mysqli_query($conn,"select * from products  where id='$id'");   
                    while($arr=mysqli_fetch_array($sql)){
                    ?>

        <div class="col-lg-4 col-md-5">
          <!-- Main Thumb -->
          <div class="product-thumb">
            <img src="admin/dist/img/images/<?php echo $arr['file'] ?> "  alt="detail" />
          </div>
          <!-- /Main Thumb -->
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="product-content">
            <!-- Product Title -->
            <h2 class="title"><?php echo $arr['product_name'] ?></h2>
            <!-- /Product Title -->

            <!-- Rating -->
            <!-- <div class="ct-rating-wrapper">
              <div class="ct-rating">
                <i class="fas fa-star active"></i>
                <i class="fas fa-star active"></i>
                <i class="fas fa-star active"></i>
                <i class="fas fa-star active"></i>
                <i class="fas fa-star"></i>
              </div>
              <span>(24 ratings)</span>
            </div> -->
            <!-- /Rating -->

            <!-- Price -->
            <!-- <div class="price-wrapper">
              <p class="product-price custom-secondary">$8.99 - 21.99$</p>
            </div> -->
            <!-- /Price -->

            <!-- Product Short Description -->
            <p>
            <a href="product_details.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['title'];?></a>

            </p>
            <!-- /Product Short Description -->

            <!-- Variations -->
            <!-- <div class="product-variations-wrapper">
              <div class="form-group">
                <label>Color</label>
                <select class="form-control">
                  <option value="">Select a Color</option>
                  <option value="yellow">Yellow</option>
                  <option value="red">Red</option>
                  <option value="blue">Blue</option>
                </select>
              </div>
            </div> -->
            <!-- /Variations -->

            <!-- Add To Cart Form -->
            <!-- <form class="atc-form" method="post">
              <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="qty form-control" name="quantity" value="1" />
              </div>
              <button type="submit" name="button" class="btn-custom secondary">
                Add to Cart <i class="flaticon-shopping-basket"></i>
              </button>
            </form> -->
            <!-- /Add To Cart Form -->

            <!-- Product Meta -->
            <ul class="product-meta">
              <li>
                <span>Categories: </span>
                <div class="product-meta-item">
                <a href="product_details.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['categories'];?></a>
                </div>
              </li>
              <li>
                <span>Tags: </span>
                <div class="product-meta-item">
                <a href="product_details.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['tag'];?></a>
                </div>
              </li>
              <!-- <li>
                <span>SKU: </span>
                <div class="product-meta-item">
                  <span>N/A</span>
                </div>
              </li> -->
            </ul>
            <!-- /Product Meta -->
          </div>
        </div>

        <?php }  ?>

      </div>

      <!-- Additional Information -->
      <div class="product-additional-info">
        <!-- <ul class="nav" id="bordered-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="tab-product-desc-tab" data-toggle="pill" href="#tab-product-desc" role="tab"
              aria-controls="tab-product-desc" aria-selected="true">Description</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab-product-info-tab" data-toggle="pill" href="#tab-product-info" role="tab"
              aria-controls="tab-product-info" aria-selected="false">Additional Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab-product-reviews-tab" data-toggle="pill" href="#tab-product-reviews" role="tab"
              aria-controls="tab-product-reviews" aria-selected="false">Reviews (25)</a>
          </li>
        </ul> -->
        <div class="tab-content" id="bordered-tabContent">
        <?php
                    $sql=mysqli_query($conn,"select * from products  where id='$id'");   
                    while($arr=mysqli_fetch_array($sql)){
                    ?>

          <div class="tab-pane fade show active" id="tab-product-desc" role="tabpanel"
            aria-labelledby="tab-product-desc-tab">
            <h4>Description</h4>
            <a href="product_details.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['description'];?></a>
          </div>
          <?php }  ?>

          <!-- <div class="tab-pane fade" id="tab-product-info" role="tabpanel" aria-labelledby="tab-product-info-tab">
            <h4>Additional Information</h4>

            <table>
              <thead>
                <tr>
                  <th scope="col">Attributes</th>
                  <th scope="col">Values</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Color</strong></td>
                  <td>blue, red, yellow, green</td>
                </tr>
                <tr>
                  <td><strong>Material</strong></td>
                  <td>wood, plastic, stainless steel</td>
                </tr>
              </tbody>
            </table>
          </div> -->
          <!-- <div class="tab-pane fade" id="tab-product-reviews" role="tabpanel" aria-labelledby="tab-product-reviews-tab">
            <h4>Leave a Review</h4>

            <div class="ct-rating-wrapper">
              <div class="ct-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span>Your Review</span>
            </div>
            <div class="comment-form">
              <form method="post">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" placeholder="Full Name" name="fname" value="" />
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" placeholder="Email Address" name="email" value="" />
                  </div>
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" placeholder="Type your comment..." name="comment"
                      rows="7"></textarea>
                  </div>
                </div>

                <button type="submit" class="btn-custom primary" name="button">
                  Post Review
                </button>
              </form>
            </div>
            <div class="comments-list">
              <ul>
                <li class="comment-item">
                  <img src="assets/img/people/people-1.jpg" alt="comment author" />
                  <div class="comment-body">
                    <h5>Heather Beirutus</h5>
                    <div class="ct-rating">
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span>Posted on: September 13 2021</span>
                    <p>
                      Leverage agile frameworks to provide a robust synopsis
                      for high level overviews. Iterative approaches to
                      corporate strategy foster collaborative thinking to
                      further the overall value proposition.
                    </p>
                    <a href="#" class="reply-link"> Reply </a>
                  </div>
                </li>
                <li class="comment-item">
                  <img src="assets/img/people/people-2.jpg" alt="comment author" />
                  <div class="comment-body">
                    <h5>Heather Beirutus</h5>
                    <div class="ct-rating">
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                    </div>
                    <span>Posted on: September 13 2021</span>
                    <p>
                      Leverage agile frameworks to provide a robust synopsis
                      for high level overviews. Iterative approaches
                    </p>
                    <a href="#" class="reply-link"> Reply </a>
                  </div>
                </li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <!-- Related Products Start -->
  <section class="section section-pading pt-0 related">
    <div class="container">
      <h4>Related Products</h4>

      <div class="row">
      <?php
            $sql=mysqli_query($conn,"select * from products where categories='$categories'");   
            while($arr=mysqli_fetch_array($sql)){
            ?>
        <div class="col-lg-4 col-md-6">
          <div class="ct-product">
            <div class="ct-product-thumbnail">
              <a href="#"><img src="admin/dist/img/images/<?php echo $arr['file'] ?>"  style="height:300px; width:300px; border-radius:2%" alt="product" /></a>
              <div class="ct-product-controls">
                <a href="product-details.php?id=<?php echo $arr['id'] ?>&categories=<?php echo $arr['categories'] ?>" class="btn-custom secondary">View More <i class="fas fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="ct-product-body">
              <h5 class="product-title" style="text-align:center"><a href="product-details.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['product_name'];?></a> </h5>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- Related Products End -->

  <!-- Newsletter start -->
  <!-- <section class="section light-bg bg-cover" style="background-image: url('assets/img/bg/1.jpg')">
    <div class="container">
      <div class="section-title-wrap section-header text-center">
        <h2 class="title">Subscribe to My Newsletter</h2>
        <p class="subtitle">
          Get access to my latest recipes by joining the weekly newsletter
        </p>
      </div>

      <form class="ct-newsletter" method="post">
        <input type="email" class="form-control" placeholder="Enter your email address" value="" />
        <button type="submit" class="btn-custom primary" name="button">
          Submit <i class="far fa-paper-plane"></i>
        </button>
      </form>
    </div>
  </section> -->
  <!-- Newsletter End -->

  <!-- Instagram Start -->
  <!-- <div class="insta style-6 section">
    <div class="container">
      <div class="section-title-wrap section-header text-center">
        <span><i class="fab fa-instagram"></i></span>
        <h2 class="title">Follow Us</h2>
      </div>
      <div class="insta-slider">
        <div class="insta-item">
          <div class="insta-item-inner">
            <ul class="comment-list">
              <li>
                <i class="fas fa-heart"></i>
                18
              </li>
              <li>
                <i class="fas fa-comment"></i>
                12
              </li>
            </ul>
            <img src="assets/img/ig/slider/1.jpg" alt="insta" />
          </div>
        </div>
        <div class="insta-item">
          <div class="insta-item-inner">
            <ul class="comment-list">
              <li>
                <i class="fas fa-heart"></i>
                15
              </li>
              <li>
                <i class="fas fa-comment"></i>
                19
              </li>
            </ul>
            <img src="assets/img/ig/slider/2.jpg" alt="insta" />
          </div>
        </div>
        <div class="insta-item">
          <div class="insta-item-inner">
            <ul class="comment-list">
              <li>
                <i class="fas fa-heart"></i>
                15
              </li>
            </ul>
            <img src="assets/img/ig/slider/3.jpg" alt="insta" />
          </div>
        </div>
        <div class="insta-item">
          <div class="insta-item-inner">
            <ul class="comment-list">
              <li>
                <i class="fas fa-heart"></i>
                22
              </li>
              <li>
                <i class="fas fa-comment"></i>
                12
              </li>
            </ul>
            <img src="assets/img/ig/slider/4.jpg" alt="insta" />
          </div>
        </div>
        <div class="insta-item">
          <div class="insta-item-inner">
            <ul class="comment-list">
              <li>
                <i class="fas fa-heart"></i>
                30
              </li>
              <li>
                <i class="fas fa-comment"></i>
                15
              </li>
            </ul>
            <img src="assets/img/ig/slider/5.jpg" alt="insta" />
          </div>
        </div>
        <div class="insta-item">
          <div class="insta-item-inner">
            <ul class="comment-list">
              <li>
                <i class="fas fa-comment"></i>
                15
              </li>
            </ul>
            <img src="assets/img/ig/slider/6.jpg" alt="insta" />
          </div>
        </div>
        <div class="insta-item">
          <div class="insta-item-inner">
            <img src="assets/img/ig/slider/7.jpg" alt="insta" />
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Instagram End -->

  <!-- Footer Start -->
  <?php 
    include("include/footer.php"); ?>
  <!-- Footer End -->

  <!-- Vendor Scripts -->
  <script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
  <script src="assets/js/plugins/popper.min.js"></script>
  <script src="assets/js/plugins/waypoint.js"></script>
  <script src="assets/js/plugins/bootstrap.min.js"></script>
  <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/plugins/jquery.slimScroll.min.js"></script>
  <script src="assets/js/plugins/imagesloaded.min.js"></script>
  <script src="assets/js/plugins/jquery.steps.min.js"></script>
  <script src="assets/js/plugins/jquery.countdown.min.js"></script>
  <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
  <script src="assets/js/plugins/slick.min.js"></script>

  <!-- Organicz Scripts -->
  <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:59:07 GMT -->

</html>