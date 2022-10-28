    <!-- Footer Start -->
    <footer class="ct-footer footer-3 footer-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                    <?php 
                        
                        $sql=mysqli_query($conn,"select * from edit_profile");
                         $arr=mysqli_fetch_array($sql)
                        ?> 
                        <div class="col-md-7 col-sm-6 footer-widget">
                          <!-- <img src="assets/img/logo.png" alt="" style=" width:100%"> -->
                            <span for="" style="color:#fff">Jaggery improved immune system, it detoxify body, improves
                                digestive system. Raisin, Cashews, Turmeric & vegetable powders are rich source of major
                                minerals & vitamins. This means the overall goof health.</span>
                        </div>
                        <div class="col-md-3 col-sm-6 footer-widget">
                            <h5 class="widget-title">Products</h5>
                            <ul>
                                <li><a href="products.php">Jaggery</a></li>
                                <li><a href="products.php">Raisin</a></li>
                                <li><a href="products.php">Cashew</a></li>
                                <li><a href="products.php">Vegetable Powder</a></li>
                            </ul>
                        </div>
                        <!-- <div class="col-md-4 col-sm-6 footer-widget">
                            <h5 class="widget-title">Legal</h5>
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 footer-widget contact-widget">
                    <h5 class="widget-title">Get In Touch</h5>
                    <ul>
                    <li class="d-flex">
                        <i class="flaticon-location"></i>
                        <a href="https://goo.gl/maps/dY979RaPcmP6uDRq6" target="_blank" class="d-flex"> 205 Prabhu Shrine Plot 85 Sector 22 Kamothe-410209</a>  
                        </li>
                        <li class="d-flex"> 
                            <i class="flaticon-email"></i>
                            <a href="mailto:sales@veg.com">sales@veg.com</a>
                        </li>
                        <li class="d-flex"> 
                            <i class="flaticon-email"></i>
                            <a href="mailto:ceo@veg.com">ceo@veg.com</a>
                        </li>
                        <li class="d-flex">
                            <i class="flaticon-call"></i>
                          <a href="tel:<?php echo $arr['phone'];?>">+91 <?php echo $arr['phone'];?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-left mb-3 mb-lg-0">
                        <p class="m-0">
                            &copy; 2022 - <a href="https://velocity.tectignis.in" target="_blank"> Velocity Exim
                                Goods.</a>
                        </p>
                    </div>
                    <div class="col-lg-6 footer-widget pb-0 text-center text-lg-right">
                        <p class="m-0">
                            Designed by <a href="https://tectignis.in" target="_blank">Tectignis IT Solutions </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->