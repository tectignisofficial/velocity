



        <!-- ======= Header ======= -->
  <?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?> 
    <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Velocity Exim Goods<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link <?= $page == 'index.php' ? 'active':'' ?>" href="index.php">Home</a></li>
          <li><a class="nav-link <?= $page == 'products.php' ? 'active':'' ?>" href="products.php">Products</a></li>
          <li><a class="nav-link <?= $page == 'gallery.php' ? 'active':'' ?>" href="gallery.php">Gallery</a></li>
          <li><a class="nav-link <?= $page == 'certificate.php' ? 'active':'' ?>" href="certificate.php">Certificate</a></li>
          <li><a class="nav-link <?= $page == 'aboutus.php' ? 'active':'' ?>" href="aboutus.php">About</a></li>
          <li><a class="nav-link <?= $page == 'contactus.php' ? 'active':'' ?>" href="contactus.php">Contact Us</a></li>
        </ul>
      </nav><!-- .navbar -->

      <a class="btn-book-a-table" href="tel:+919970026458">+919970026458</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->