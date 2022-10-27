<?php 
include("include/config.php");

if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql=mysqli_query($conn,"INSERT INTO `contact`(`name`, `phone`, `email`,`subject`, `message`) VALUES ('$name','$phone',' $email','$subject','$message')");
  
  if($sql==1){
    echo '<script>alert("Successfully submitted");</script>';
    header("location:contactus.php");
}else {
    echo '<script>alert("oops...somthing went wrong");</script>';
}
        
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/?i=150835&pr_code=z2x5P5eD1537DEbaJXgDTNkIIC33HC by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:41:23 GMT -->

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
    <link rel="stylesheet" href="assets/fonts/flaticon-2/flaticon.css" />
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
    <!-- partial:partia/__sidenav.html -->



    <?php 
    include("include/header.php");?>

    <!-- Subheader Start -->
    <div class="subheader bg-cover dark-overlay dark-overlay-2"
        style="background-image: url('assets/img/subheader.webp')">
        <div class="absolute-subheader">
            <div class="container">
                <div class="subheader-inner">
                    <h1>Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                    <img src="assets/img/veg/8.png" class="image-1" alt="img">
                    <img src="assets/img/veg/5.png" class="image-2" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- Subheader End -->
    <!-- Contact Info Start -->
    <div class="section section-padding extra-padding">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ct-info-box">
                        <div class="ct-info-box-icon">
                            <i class="flaticon-call"></i>
                            <h5>Call Me</h5>
                            <a href="tel:+919970026458"><span>+91 9970026458</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="ct-info-box">
                        <div class="ct-info-box-icon">
                            <i class="flaticon-email"></i>
                            <h5>Mail Me</h5>
                            <a href="mailto:sales@veg.com"><span>sales@veg.com</span></a>
                            <a href="mailto:ceo@veg.com"><span>ceo@veg.com</span></a>
                            <!-- <span>sales@veg.com / ceo@veg.com</span> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="ct-info-box">
                        <div class="ct-info-box-icon">
                            <i class="flaticon-location"></i>
                            <h5>Find Me</h5>
                            <a href="https://goo.gl/maps/dY979RaPcmP6uDRq6" target="_blank"> <span>205 Prabhu Shrine
                                    Plot 85 Sector 22 Kamothe-410209</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->
    <!--Contact Form Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="section-title-wrap section-header">
                <h2 class="title">Send me a Message </h2>
                <p class="subtitle">
                </p>
            </div>
            <form class="" method="post">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <input type="text" placeholder="Full Name" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group col-lg-6">
                        <input type="text" placeholder="Phone No." minlength="10" maxlength="10"
                            class="form-control phone1" name="phone" id="phone1">
                        <span id="phone1Span" class="mb-4"></span>
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="email" placeholder="Email Address" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group col-lg-12">
                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                    </div>
                    <div class="form-group col-lg-12">
                        <textarea name="message" id="message" class="form-control" placeholder="Type your message"
                            rows="8"></textarea>
                    </div>
                </div>
                <button type="submit" name="submit" id="submit" class="btn-custom primary">Submit</button>
                <div class="server_response w-100"></div>
            </form>
        </div>
    </section>
    <!--Contact Form End -->




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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Organicz Scripts -->
    <script src="assets/js/main.js"></script>

    <script>
    $("#phone1Span").hide();
    $(".phone1").keyup(function() {
        mobile_check();
    });

    function mobile_check() {
        let mobileno = $(".phone1").val();
        let vali = /^\d{10}$/;
        if (!vali.test(mobileno)) {
            validenqtMobile = "no";
            $("#phone1Span").show().html("*Invalid Mobile No").css("color", "red").focus();
            mobile_err = false;
            return false;
        } else {
            validenqtMobile = "yes";
            $("#phone1Span").hide();
        }
    }

    $("#submit").click(function() {
        mobile_err = true;
        mobile_check();

        if ((mobile_err = true)) {
            return true;
        } else {
            return false;
        }
    });

    let validenqtMobile;

    let submitenant = document.getElementById("submit");
    submitenant.addEventListener("click", function() {

        if (validenqtMobile == "no") {
            swal("Oops...", "Please fill all the fields", "error");
        } else {
            swal("Saved!", " Thank you for contacting form submitted successfully", "success");
        }
    });
    </script>
</body>

<!-- Mirrored from metropolitanhost.com/themes/templatemoster/html/masala/?i=150835&pr_code=z2x5P5eD1537DEbaJXgDTNkIIC33HC by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Aug 2022 05:50:23 GMT -->

</html>