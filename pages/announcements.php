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

    <title>Announcements</title>

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
        <?php 
        if(isset($_POST['submit_btn'])){
            $conn = mysqli_connect("localhost", "root", "", "accdb");
            $anncespace = mysqli_real_escape_string($conn, $_POST['anncespace']);

                $sql = "INSERT INTO tb_announce(anncmnt) VALUES('$anncespace')";
                mysqli_query($conn, $sql);
                echo '<script language="javascript">';
                echo 'alert("New Announcement Set!")';
                echo '</script>';

        }
        ?>
      <!-- Content -->
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
        <form method="post" action="announcements.php">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Announcements Module</h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="alerts"></div>
                  

                  <div class="editor-wrapper placeholderText"><textarea class="form-control" name="anncespace" cols="10" rows="15"></textarea> </div>
                   
                  <textarea name="descr" id="descr" style="display:none;"></textarea>                  
                  <br />
                  <button type="submit" name="submit_btn" class="btn btn-success">Submit</button>
        
                  <div class="ln_solid"></div>
                  </form>
                  <form method="post">
                  <div class="form-group">
                      <h4><b>Delete Announcement</b></h4>
                      <select id="anncsel" name="anncsel">
                      <?php
                      include "../config.php";
                      $conn = mysqli_connect("localhost", "root", "", "accdb");
                      $query = $db->query("SELECT id FROM tb_announce"); // Run your query

                        // Loop through the query results, outputing the options one by one
                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';
                        }
                        $anncsel=$_POST['anncsel'];
                        if(isset($_POST['del_btn'])) {
                            $deleteque = "DELETE FROM tb_announce WHERE id = '$anncsel'";
                            echo '<script language="javascript">';
                            echo 'alert("DELETED!")';
                            echo '</script>';
                            mysqli_query($conn, $deleteque);
                        }
                      ?>
                      </select>
                      </br>
                      </br>
                      <button type="submit" name="del_btn" class="btn btn-primary">Delete</button>
                      <div class="ln_solid"></div>
                </form>
                <form method="post" action="announcements.php">
                      <?php 
                   $conn = mysqli_connect("localhost", "root", "", "accdb");
                   $sql = "SELECT id, anncmnt FROM tb_announce";
                   $check = mysqli_query($conn, $sql);
                   if($check->num_rows > 0){
                       echo "";
                       while($row = $check->fetch_assoc()) {
                       echo "<br> id: ". $row["id"]. " - Announcement: ". $row["anncmnt"]. "</br>";
                    }
                   }
                  ?>
                  </form>
                  </div>
                </div>
              </div>
            </div>
              </div>
            </div>
            <!-- Content -->
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
    <script src="js/bootstrap/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="js/bootstrap/skycons.js"></script>
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
