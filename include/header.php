<?php 
                        
                        $sql=mysqli_query($conn,"select * from edit_profile");
                         $arr=mysqli_fetch_array($sql)
                        ?>     
    
    <!-- Header Start -->
    <header class="main-header header-1 can-sticky">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="left-side">
                            <li>
                                <a href="tel:<?php echo $arr['phone'];?>">
                                    <i class="fas fa-phone" style="transform:rotate(90deg)"></i>
                                    <!-- +91 9970026458 -->
                                    <span><?php echo $arr['phone'];?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="right-side navbar">
                            <li class="menu-item menu-item-has-children">
                            <a href="admin/adminlogin.php">Admin Login</a>


                            </li>

                            <!-- <li>
                                <a href="admin/adminlogin.php">Admin Login</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar">
            <div class="container-fluid">
                <!-- Logo -->
                <!-- <a class="navbar-brand d-lg-none" href="index.html">
            <img src="assets/img/logo.png" alt="logo" />
          </a> -->
                <!-- Menu -->
                <div class="header-control-left">
                    <div class="logo-wrapper">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.webp" alt="logo" />
                        </a>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="menu-item ">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="products.php">Products</a>
                    </li>
                    <li class="menu-item">
                        <a href="gallery.php">Gallery</a>
                    </li>

                    <li class="menu-item">
                        <a href="certificate.php">Certificate</a>
                    </li>
                    <li class="menu-item">
                        <a href="aboutus.php">About us</a>
                    </li>
                    <li class="menu-item">
                        <a href="contactus.php">Contact Us</a>
                    </li>
                </ul>
                <div class="header-controls">

                    <!-- Toggler -->
                    <div class="aside-toggler style-2 aside-trigger-left">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <div class="sigma_aside-overlay aside-trigger-right"></div>
    <aside class="sigma_aside sigma_aside-left">
        <a class="navbar-brand" href="index.php"> <img src="assets/img/logo.png" alt="logo"> </a>
        <div class="aside-scroll">
        <ul class="">
                    <li class="menu-item ">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="menu-item">
                        <a href="products.php">Products</a>
                    </li>
                    <li class="menu-item">
                        <a href="gallery.php">Gallery</a>
                    </li>

                    <li class="menu-item">
                        <a href="certificate.php">Certificate</a>
                    </li>
                    <li class="menu-item">
                        <a href="aboutus.php">About us</a>
                    </li>
                    <li class="menu-item">
                        <a href="contactus.php">Contact Us</a>
                    </li>
                </ul>
        </div>
    </aside>
    <div class="sigma_aside-overlay aside-trigger-left"></div>
    <!-- Header End -->