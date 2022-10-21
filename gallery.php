<?php include 'include\config.php';?>
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
    <link href="glightbox/css/glightbox.min.css" rel="stylesheet">
    <!-- Organicz Style sheet -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico" />
    <style>
      	.gslide-description, .description-bottom{
		display: none !important;
	}
  .img-fluid {
    max-width: 100%;
    height: 100%;
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
  <div class="subheader bg-cover dark-overlay dark-overlay-2" style="background-image: url('assets/img/subheader.jpg')">
    <div class="absolute-subheader">
    <div class="container">
      <div class="subheader-inner">
        <h1>Gallery</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Gallery</li>
          </ol>
        </nav>
        <img src="assets/img/veg/8.png" class="image-1" alt="img">
        <img src="assets/img/veg/5.png" class="image-2" alt="img">
      </div>
    </div>
  </div>
  </div>
  <!-- Subheader End -->


  <section class="py-3 mb-3">
        <div class="container">
            <div class="tp-title-line-2"></div>
          

               



                        <div class="row portfolio-container" data-aos="fade-up">


						<?php     
                             $sql=mysqli_query($conn,"select * from gallery");

                             while($arr=mysqli_fetch_array($sql)){
                             ?>

                            <div class="col-lg-4 col-md-6 portfolio-item filter-card py-3">
                                

                                <a href="admin/dist/img/images/<?php echo $arr['file'];?>" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link text-center" title="Trusts & Hospitals">
                                    <img src="admin/dist/img/images/<?php echo $arr['file'];?>" class="img-fluid" alt="">
                                </a>
                            </div>
							<?php }  ?>
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
    <script src="glightbox/js/glightbox.min.js"></script>


    <!-- Organicz Scripts -->
    <script src="assets/js/main.js"></script>

    
<script>
	
  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate portfolio lightbox 
   */
  const portfolioLightbox = GLightbox({
    selector: '.portfolio-lightbox'
  });

  /**
   * Portfolio details slider
   */
  new Swiper('.portfolio-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });
</script>
  </body>

  <!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/?i=150835&pr_code=z2x5P5eD1537DEbaJXgDTNkIIC33HC by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:50:23 GMT -->
</html>
