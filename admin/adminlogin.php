<?php
session_start();
include("../assets/include/config.php");
if(isset($_POST['login'])){
$email=$_POST['email'];
$password1=$_POST['password'];

$sql=mysqli_query($conn,"select * from admin_login where email='$email'");
$row=mysqli_fetch_array($sql);

if($row>0){
    $email=$row['email'];
    $password=$row['password'];
    $hashpassword=password_verify($password1,$password);
    if($hashpassword){
      $_SESSION['id']=$row['id'];
      $_SESSION['name']=$row['name'];
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header("location:index.php");
    }else{
        echo "<script>alert('Password is incorrect');</script>";
    }
}
else{
    echo "<script>alert('Invalid Email Id');</script>";
}
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
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
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
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
      <div class="col-lg-5 col-md-8 col-sm-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="../assets\img\logo\LOGO.png"
                    style="width:60%;" alt="logo">
                    <!-- <h6>UNIQUE PATHOLOGY</h6> -->
                </div><br>

                <form method="post">
                  <p align="center">Please login to your account</p><br>

                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control"
                    name="email"
                      placeholder="Enter Email address" required>
                    <label class="form-label" >Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
                    <label class="form-label" required>Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-block mb-3" type="login" name="login" id="login" value="login" style="background:#f73614; color:white">Login</button>
                    <br>
                    <a class="text-muted" href="forgetpassword.php">Forgot password?</a>
                  </div>
                </form>

              </div>
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
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.js"
></script>
</html>