<?php
 include ("include/config.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/?i=150835&pr_code=z2x5P5eD1537DEbaJXgDTNkIIC33HC by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:41:23 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Organicz - Spices HTML Template</title>

    <!-- Vendor Stylesheets -->
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css" />
    <!-- Icon Fonts -->
    <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css" />
    <link rel="stylesheet" href="assets/fonts/flaticon-2/flaticon.css" />
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/all.min.css" />

    <!-- Organicz Style sheet -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico" />

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
    <!-- partial:partia/__sidenav.html -->



    <?php 
    include("include/header.php"); ?>


    <!-- Subheader Start -->
    <div class="subheader bg-cover dark-overlay dark-overlay-2"
        style="background-image: url('assets/img/subheader.webp')">
        <div class="absolute-subheader">
            <div class="container">
                <div class="subheader-inner">
                    <h1>Products</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                    </nav>
                    <img src="assets/img/veg/8.png" class="image-1" alt="img">
                    <img src="assets/img/veg/5.png" class="image-2" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- Subheader End -->

    <section class="section section-padding pt-0">
        <div class="container">
            <div class="section-title-wrap section-header">
                <h2 class="title">Spicy World</h2>
                <p class="subtitle">We take care of your health...</p>
            </div>

            <div class="row">

                <?php
            $sql=mysqli_query($conn,"select * from products limit 5");   
            while($arr=mysqli_fetch_array($sql)){
            ?>

                <div class="col-lg-4 col-md-6">
                    <div class="ct-product">
                        <div class="ct-product-thumbnail">
                            <a class="glightbox" href="admin/dist/img/images/<?php echo $arr['file'] ?>"><img
                                    src="admin/dist/img/images/<?php echo $arr['file'] ?> " class="menu-img img-fluid"
                                    style="height:300px; width:415px ; border-radius: 5%;" alt="product"></a>
                            <div class="ct-product-controls">
                                <a href="product-details.php?id=<?php echo $arr['id'] ?>&categories=<?php echo $arr['categories'] ?>"
                                    class="btn-custom secondary">View More<i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ct-product-body">
                            <h5 class="product-title text-center"> <a
                                    href="product-details.php?id=<?php echo $arr['id'] ?>&categories=<?php echo $arr['categories'] ?>"><?php echo $arr['product_name'];?></a>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </section>








    <?php 
    include("include/footer.php"); ?>

    <!-- Vendor Scripts -->
    <script src="assets/js/plugins/jquery-3.4.1.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/waypoint.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.inview.min.js"></script>
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

<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/?i=150835&pr_code=z2x5P5eD1537DEbaJXgDTNkIIC33HC by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:50:23 GMT -->

</html>