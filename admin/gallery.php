<?php 
include("include/config.php");

session_start();
if(!isset($_SESSION['id']))
{                                                                                       
  header("location:adminlogin.php");
}

if(isset($_POST['submitt'])){
$title=$_POST['title'];
$file=$_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name']; 
$loc="dist/img/images/".$file;
move_uploaded_file($tmp_name, $loc);
$filedet=$_POST['imgg'];
  $id=$_GET['id'];

  if(empty($_FILES['file']['tmp_name']) && ($_POST['imgg']) && ($_GET['id'])){
    $id=$_GET['id'];
    $dnk = $_POST['portImage'];
    
    $sql=mysqli_query($conn,"UPDATE `gallery` SET `title`='$title',`file`='$filedet' WHERE id='$id'");    
    
    }
   
  else if(!empty($_FILES['file']['tmp_name']) && ($_POST['imgg']) || !empty($_FILES['file']['tmp_name']) && (empty($_POST['imgg']) && ($_GET['id']))){
    $id=$_GET['id'];
move_uploaded_file($tmp_name, $loc);
    $sql=mysqli_query($conn,"UPDATE `gallery` SET `title`='$title',`file`='$file' WHERE id='$id'");   
   
    }else{

move_uploaded_file($tmp_name, $loc);
$sql=mysqli_query($conn,"INSERT INTO `gallery`(`title`,`file`) VALUES ('$title','$file')");}
  
if($sql==1){
 header("location:gallery.php");
}else{
   mysqli_error($conn);
}

}


if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from gallery where id='$id'");
  if($sql=1){
    header("location:gallery.php");
  }
}

$product_name="";
$title="";
$file="";
if(isset($_GET['id'])){
  $sql=mysqli_query($conn,"select * from gallery where id='$_GET[id]'");
  $row=mysqli_fetch_array($sql);
  $title=$row['title'];
  $file=$row['file'];
}
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Products</title>
  <!-- Favicons -->
  <link href="dist/img/favicon.ico" rel="icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">


  <!-- extra link -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <script src="https://kit.fontawesome.com/467f9d214f.js" crossorigin="anonymous"></script>

  <style>
    .table td img {
      width: 36px;
      height: 36px;
      border-radius: 100%;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../assets/img/logo/LOGO.png" alt="AdminLTELogo" height="60" width="60">
    </div> -->

    <!-- partial:../../partials/_navbar.html -->
    <?php include("include/header.php") ?>
    <!-- partial -->
    <!-- partial:../../partials/_sidebar.html -->
    <?php include("include/sidebar.php") ?>
    <!-- partial -->
    <div class="content-wrapper">
      <!-- Info boxes -->

      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Gallery</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Gallery</h4>
                </div>
                <div class="card-body">
                  <form action="" class="form-sample" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Product Name</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="title" placeholder="Product Name"
                              value="<?php echo $title; ?> " required>
                          </div>
                        </div>


                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Upload Image</b></label>
                          <div class="col-sm-9">
                            <?php
                            if(isset($_GET['id'])){
                              ?>
                            <img src="dist/img/images/<?php echo $file; ?>" width="200" height="200">
                            <input type="hidden" value="<?php echo $file; ?>" name="imgg">
                            <?php }  ?>
                            <input type="file" class="form-control" name="file">
                          </div>
                        </div>

                      </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-icon-text" value="Submit" name="submitt">

                  </form>
                </div>
              </div>
            </div>
          </div>
                                                <?php
                                                  $selectquery="select * from gallery";
                                                  $portfolio = mysqli_query($conn,$selectquery);
                                                  if (mysqli_num_rows($portfolio)>0){

                                                  }
                                               ?>

          <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive pt-3">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Product Name</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
											$i=0;
											while($row = mysqli_fetch_array($portfolio)) {
											?>
                        <tr class="table">
                          <td>
                            <?php echo $row["id"]; ?>
                          </td>
                          <td>
                            <?php echo $row["title"]; ?>
                          </td>

                          <td><img src="dist/img/images/<?php echo $row["file"]; ?>"></td>
                          <td>
                            <a class="btn btn-primary btn-rounded btn-icon"
                              href="gallery.php?id=<?php echo $row['id']; ?>" title="Edit"><i
                                class="fa fa-edit"></i></a>

                            <a class="btn btn-danger btn-rounded btn-icon"
                              href="gallery.php?delid=<?php echo $row['id']; ?>" onclick="return checkDelete()"
                              class="btn btn-primary btn-rounded btn-icon">
                              <i class="fas fa-trash"></i>
                          </td>

                        </tr>
                        <?php
											$i++;
											}
											?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/. container-fluid -->
      </section>



    
    </div>
    <!-- partial:../../partials/_footer.html -->
    <?php include("include/footer.php") ?>
    <!-- partial -->

    <!-- main-panel ends -->

  </div>
 <!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="dist/js/demo.js"></script> -->
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Page specific script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()

      //Initialize Select2 Elements
      $('.select2bs4').select2({
        theme: 'bootstrap4'
      })


      //Date and time picker
      $('#reservationdatetime').datetimepicker({
        icons: {
          time: 'far fa-clock'
        }
      });

      //Date range picker
      $('#reservation').daterangepicker()
      //Date range picker with time picker
      $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: 'MM/DD/YYYY hh:mm A'
        }
      })
      //Date range as a button
      $('#daterange-btn').daterangepicker({
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
              'month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
      )

      //Timepicker
      $('#timepicker').datetimepicker({
        format: 'LT'
      })

      //Bootstrap Duallistbox
      $('.duallistbox').bootstrapDualListbox()

      //Colorpicker
      $('.my-colorpicker1').colorpicker()
      //color picker with addon
      $('.my-colorpicker2').colorpicker()

      $('.my-colorpicker2').on('colorpickerChange', function (event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
      })

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
      })

    })
    // BS-Stepper Init
    document.addEventListener('DOMContentLoaded', function () {
      window.stepper = new Stepper(document.querySelector('.bs-stepper'))
    })

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template")
    previewNode.id = ""
    var previewTemplate = previewNode.parentNode.innerHTML
    previewNode.parentNode.removeChild(previewNode)

    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
    })

    myDropzone.on("addedfile", function (file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function () {
        myDropzone.enqueueFile(file)
      }
    })

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
    })

    myDropzone.on("sending", function (file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1"
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
    })

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
      document.querySelector("#total-progress").style.opacity = "0"
    })

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
    }
    document.querySelector("#actions .cancel").onclick = function () {
      myDropzone.removeAllFiles(true)
    }
    // DropzoneJS Demo Code End
  </script>



  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "searching": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     
    });
  </script>

</body>

</html>