<?php
session_start();
include("include/config.php"); 
?>

<?php
$d=$_SESSION['id'];
if(isset($_POST["submit"])){
	$Old_password=$_POST["oldpassword"];
	$New_password=$_POST["newpassword"];
    $Confirm_password=$_POST["confirmpassword"];

	$sql = mysqli_query($conn,"SELECT * FROM adminlogin WHERE Id='$d'") ;
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($Old_password,$row['password']);
	
	$hashpassword=password_hash($New_password,PASSWORD_BCRYPT);

		if($verify==1){
			$query=mysqli_query($conn,"UPDATE `adminlogin` SET `password`='$hashpassword' WHERE Id='$d'");
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