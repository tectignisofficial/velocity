<?php 
include("include/config.php");
if(isset($_POST['submit'])){

  
  $categories=$_POST['categories'];

  $sql=mysqli_query($conn,"INSERT INTO `add_categories`(`categories`) VALUES ('$categories')");
  if( $sql==1){
      echo "<script> alert('New Records Added Has Been Succesfully !');window.location='addcategories.php';</script>";
  }
  else{
      echo "<script> alert('Connection Failed !');</script>";
  
  }
  }
  ?>
//  if($sql=1){
//    echo "<script>alert('New record added Successfully');window.location='contact.php';</script>";    }
//  else{
//    echo "<script>alert('Something Wrong');</script>";
//  }

// }

