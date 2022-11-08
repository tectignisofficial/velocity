<?php 
include("include/config.php");
if(isset($_POST['vid'])){
    $id=$_POST['vid'];
    $sql=mysqli_query($conn,"select * from products where id='$id'");
    $arr=mysqli_fetch_array($sql);
    echo '    <form action="" class="form-sample" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label"><b>Product Name</b></label>
          <div class="col-sm-9">
            <p class="name">'.$arr['product_name'].'</p>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label"><b>Title</b></label>
          <div class="col-sm-9">
            <p class="title">'.$arr['title'].'</p>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label"><b>Categories</b></label>
          <div class="col-sm-9">
           <p class="categories">'.$arr['categories'].'</p>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label"><b>Tag</b></label>
          <div class="col-sm-9">
            <p class="tag">'.$arr['tag'].'</P>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label"><b>Description</b></label>
          <div class="col-sm-9">
             <p class="description">'.$arr['description'].'</p> 
           
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 col-form-label"><b>Upload Image</b></label>
          <div class="col-sm-9">
          <img src="dist/img/images/'.$arr['file'].'" width="200" height="200">
            <P class="file">'.$arr['file'].'</p>
          </div>
        </div>

      </div>
    </div>
    <input type="submit" class="btn btn-primary btn-icon-text" value="Submit" name="submit">

  </form>';
}

?>