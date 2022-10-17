<?php
include("include/config.php");
$d=$_SESSION['id'];
if(isset($_POST["submitt"])){
	$Old_password=$_POST["oldpassword"];
	$New_password=$_POST["newpassword"];
    $Confirm_password=$_POST["confirmpassword"];

	$sql = mysqli_query($conn,"SELECT * FROM admin_login");
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($Old_password,$row['Password']);
	
	$hashpassword=password_hash($New_password,PASSWORD_BCRYPT);

		if($verify==1){
			$query=mysqli_query($conn,"UPDATE `admin_login` SET `password`='$hashpassword'");
      if($query){
        session_destroy();   // function that Destroys Session 
        echo "<script>alert('Password Changed Successfully'),window.location='adminlogin.php';</script>";
      }
		}
		else{
			echo"<script>alert('Invalid Password');</script>";
		}
	
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forget Password-Unique Pathalogy</title>
      <!-- Favicons -->
   <link href="../assets/img/logo/footer_logo.png" rel="icon">
        <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
/>
<style>
            .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right,#4ab242 ,#00B712,#63D471,#80FF72);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>
</head>
<body  style="background-color: #eee;">

<section class="h-100 gradient-form">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="../assets\img\webp\footerlogo.png"
                    style="width: 60%;" alt="logo">
                    <!-- <h6>SACHIN ENTERPRISE</h6> -->
                </div><br>

                <form method="POST">
                  <p align="center">Forget Password</p><br>

                  <div class="form-outline mb-4">
                  <input type="password" class="form-control" name="oldpassword" id="oldpassword" placeholder="Old Password" required>
                    <label class="form-label" for="form2Example11">Old Password</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                 
                      <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password" required>
                    <label class="form-label" for="form2Example12">New Password</label>
                  </div>
                  
                  
                  <div class="form-outline mb-4">
                    
                      <input type="password" class="form-control" name="confirmpassword" id="password" placeholder="Confirm Password" required>
                    <label class="form-label" for="form2Example13">Confirm Password</label>
                  </div>
                  
                  


                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-block fa-lg  mb-3" name="forget"type="submitt" style="background:#4ab242; color:white;">Submit</button>
                    <a class="text-muted" href="adminlogin.php">Login Your Account</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
          	<h2>Forgot your password?</h2>
          <p>Change your password in three easy steps. This will help you to secure your password!</p>
          <ol class="list-unstyled">
            <li>1. Enter your email address below.</li>
            <li>2. Our system will send you a temporary link</li>
            <li>3. Use the link to reset your password</li>
          </ol>

        
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
</html>