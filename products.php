<?php include("include/config.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Velocity Exim Goods</title>
  <meta content="Velocity Exim Goods" name="description">
  <meta content="Velocity Exim Goods" name="Velocity Exim Goods">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.2.1
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



  <?php include "include/header.php"; ?>

  <main id="main">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu mt-5">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Products</h2>
          <!-- <p>Check Our <span>Yummy Menu</span></p> -->
        </div>



        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
          <div class="section-header">
            <p>Check Our <span>product</span></p>
          </div>

          <div class="tab-pane fade active show" id="menu-starters">



            <div class="row gy-5" style="justify-content: center;">

              <?php
            $sql=mysqli_query($conn,"select * from products");   
            while($arr=mysqli_fetch_array($sql)){
            ?>
              <div class="col-lg-4 menu-item ">
                <a class="glightbox" href="product_details.php?id=<?php echo $arr['id'] ?>"><img
                    src="admin/dist/img/images/<?php echo $arr['file'] ?> " class="menu-img img-fluid"
                    style="height:300px; width:415px ; border-radius: 5%;" alt="product"></a>
                <h5 class="product-title"> <a
                    href="product_details.php?id=<?php echo $arr['id'] ?>"><?php echo $arr['product_name'];?></a>
                </h5>

              </div><!-- Menu Item -->


              <?php } ?>

            </div>
          </div><!-- End Starter Menu Content -->




        </div>

      </div>
    </section><!-- End Menu Section -->

  </main><!-- End #main -->

  <?php include "include/footer.php"; ?>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>