<?php
include "../config.php";
session_start();
if((!isset($_SESSION['accnum']))){
  header('location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Featured Video</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../css/bootstrap/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../css/bootstrap/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../css/bootstrap/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../css/bootstrap/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../css/bootstrap/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../css/bootstrap/daterangepicker.css" rel="stylesheet">
    <link href="../css/bootstrap/custom.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    
<!-- WebHostingHub Glyphs -->
    <link rel="stylesheet" href="..css/whhg.min.css">
 <!-- jQuery UI stylesheet  -->
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.min.css">
    <!-- DEVELOPMENT STYLES COMPILED FROM LESS SOURCE FILES USING NODE.JS / OVERRIDES BOOTSTRAP DEFAULTS -->
    <link rel="stylesheet" href="..css/custom.min.css">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <!-- MasterPage content -->
        <?php include('../controllers/masterpage.php'); ?>
      <!-- MasterPage content -->

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Featured Video Module</h2>
                  </br>
                  <div class="ln_solid"></div>
                  <div class="clearfix"></div>
                <?php

                        error_reporting(1);

                        $con = mysqli_connect("localhost","root","", "accdb");

                        extract($_POST);

                        $target_file = "../video/".basename($_FILES["fileToUpload"]["name"]);

                        if($upd)
                        {
                        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                        if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
                        {
                            echo "File Format Not Suppoted";
                        } 

                        else
                        {

                        $video_path=$_FILES['fileToUpload']['name'];

                        $sql = "INSERT INTO tb_featured (video) VALUES('$video_path')";
                        mysqli_query($con, $sql);

                        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
                            echo '<script language="javascript">';
                            echo 'alert("Video Uploaded!")';
                            echo '</script>';
                        }
                        else{
                            echo '<script language="javascript">';
                            echo 'alert("Error Uploading!")';
                            echo '</script>';
                        }

                        echo "uploaded ";

                        }

                        }

                        //display all uploaded video

                        if($disp)

                        {

                            $query = "SELECT * FROM tb_featured LIMIT 1";
                            $sql = mysqli_query($con, $query);
                            while($all_video=mysqli_fetch_array($sql))
                            {
                        ?>
              <div class="main-container" role="main">
                <div id="media-player">

                  <div class="ln_solid"></div>
                  <div class="clearfix"></div>
                <header>
                  <h3><?php echo $all_video['video']; ?></h3>
                </header>  
                <video id="videoPlayer" preload="none" poster="img/cover.jpg" controls height="600" width="800">
                    <source src="../video/<?php echo $all_video['video']; ?>" type="video/mp4" />
                    Your browser does not support the video element.
                </video>
                </div>
                  <div class="ln_solid"></div>
                  <div class="clearfix"></div>  
                
                <?php } } ?>

                <form method="post" action="featured.php" enctype="multipart/form-data">
                <table border="1" style="padding:10px">
                

                <h3> Upload Featured Video <h3>
                  <div class="ln_solid"></div>
                  <div class="clearfix"></div>  

                <h4> Please Browse File: Video Format(.mp4, .avi, .mov, .3gp, .mpeg) only!<h4> <input type="file" name="fileToUpload"/>
                  <div class="ln_solid"></div>
                  <div class="clearfix"></div>  

                <input type="submit" value="Upload Video" name="upd"/>

                <input type="submit" value="Display Video in Database" name="disp"/>

                </td></tr>

                </table>

                </form>
                
                
                
                </div>
            </div>
            </div>
            </div>
            </div>

        <!-- footer content -->
        <?php include('../controllers/footer.php'); ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../js/bootstrap/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../js/bootstrap/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../js/bootstrap/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../js/bootstrap/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../js/bootstrap/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../js/bootstrap/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../js/bootstrap/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../js/bootstrap/skycons.js"></script>
    <!-- Flot -->
    <script src="../js/bootstrap/jquery.flot.js"></script>
    <script src="../js/bootstrap/jquery.flot.pie.js"></script>
    <script src="../js/bootstrap/jquery.flot.time.js"></script>
    <script src="../js/bootstrap/jquery.flot.stack.js"></script>
    <script src="../js/bootstrap/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../js/bootstrap/jquery.flot.orderBars.js"></script>
    <script src="../js/bootstrap/jquery.flot.spline.min.js"></script>
    <script src="../js/bootstrap/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../js/bootstrap/date.js"></script>
    <!-- JQVMap -->
    <script src="../js/bootstrap/jquery.vmap.js"></script>
    <script src="../js/bootstrap/jquery.vmap.world.js"></script>
    <script src="../js/bootstrap/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../js/bootstrap/moment.min.js"></script>
    <script src="../js/bootstrap/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../js/bootstrap/custom.min.js"></script>
    <!-- Custom Javascript -->

  	<script src="../js/script.min.js"></script>
    
     <!-- jQuery -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- jQuery UI (for sliders)  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <!-- Other helper JS frameworks -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

  	<!-- Bootstrap Core JavaScript -->
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </body>
</html>
