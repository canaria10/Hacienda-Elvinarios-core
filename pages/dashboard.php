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

    <title>Welcome! | ADMIN PANEL</title>

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

    <!-- Custom Theme Style -->
    <link href="../css/bootstrap/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <!-- MasterPage content -->
        <?php include('../controllers/masterpage.php'); ?>
      <!-- MasterPage content -->

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

    
  </body>
</html>
