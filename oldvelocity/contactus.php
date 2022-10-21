<?php include("include/config.php");



if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $description = $_POST['description'];

  $query = "INSERT INTO `contact`(`name`, `phone`, `email`,`subject`, `description`) VALUES ('$name','$phone',' $email','subject','$description')";
  
  $data = mysqli_query($conn,$query);

  if($data)
  {
    echo "data inserted";
  }
  else
  {
    echo "failed";
  }
}

?>

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
  <link href="assets/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

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
<style>
  /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<body>



<?php include "include/header.php"; ?>

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container " data-aos="fade-up" style="margin-top:3%">

        <div class="section-header">
          <h2>Contact Us</h2>
          <!-- <p>Need Help? <span>Contact Us</span></p> -->
        </div>


        <div class="row gy-4">

          
          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <a href="mailto:sales@veg.com"> <p>sales@veg.com</p></a>
                <a href="mailto:ceo@veg.com"> <p>ceo@veg.com</p></a>
              </div>
            </div>
          </div><!-- End Info Item -->
          
          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <a href="tel:+919970026458"><p>+919970026458</p></a>
              </div>
            </div>
          </div><!-- End Info Item -->
          
          <div class="col-md-6 offset-md-3 contact">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Our Address</h3>
                <a href="https://goo.gl/maps/dY979RaPcmP6uDRq6" target="_blank">205 Prabhu Shrine Plot 85 Sector 22 Kamothe,Raigad,Maharashtra,India 410209</a>
              </div>
            </div>
          </div><!-- End Info Item -->
        </div>

        <form  method="POST" class="php-email-form p-3 p-md-4">
          <div class="row">
            <div class="col-xl-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="number" class="form-control phone1" name="phone" id="phone" placeholder="Phone Number" onkeyup="check(); return false;" required>
              <span id="message"></span>
            </div>
          </div>
          <div class="row">
          <div class="col-xl-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="col-xl-6 form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
           </div>
          <div class="form-group">
            <textarea class="form-control" name="description" rows="4" placeholder="Description" required></textarea>
          </div>
          <div class="text-center"><button type="submit"  value="submit" name="submit" id="submit">Send Message</button></div>
        </form>
        <!--End Contact Form -->

        <!-- <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div>End Google Maps -->


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include "include/footer.php"; ?>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
	<script>
		
    function check()
{

    var mobile = document.getElementById('phone').value;
   
    
    var message = document.getElementById('message');

   var goodColor = "#0C6";
    var badColor = "#FF9B37";
  
    if(mobile.length!=10){
       
        // mobile.style.backgroundColor = badColor;
        // message.style.color = badColor;
        message.innerHTML = "Please Enter 10 digit number!"
    }
    else{
      message.innerHTML = ""
    }
  }
        let  validenqtMobile;

 let submitenant = document.getElementById("submit");
     submitenant.addEventListener("click", function(){

     if(validenqtMobile == "no"){
         swal("Oops...", "Please fill all the fields", "error");
     }
         else{
             swal("Saved!", " Thank you for contacting form submitted successfully", "success");
         }
     });
        </script>
</body>

</html>