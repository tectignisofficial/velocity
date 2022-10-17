
<?php 
include("include/config.php");

if(isset($_POST['submit'])){

$masala_name=$_POST['masala_name'];
$short_description=$_POST['short_description'];
$categories=$_POST['categories'];
$tags=$_POST['tags'];
$sku=$_POST['sku'];
$description=$_POST['description'];
$file=$_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name']; 
$loc="dist/img/images/".$file;
move_uploaded_file($tmp_name, $loc);

$sql=mysqli_query($conn,"INSERT INTO `products`(`masala_name`, `short_description`, `categories`, `tags`, `sku`, `file`, `description`) VALUES ('$masala_name','$short_description','$categories','$tags','$sku','$file','$description')");
if($sql=1){
    echo "<script> alert('New Records Added Has Been Succesfully !');window.location='products.php';</script>";
}
else{
    echo "<script> alert('Connection Failed !');</script>";

}
}
?>