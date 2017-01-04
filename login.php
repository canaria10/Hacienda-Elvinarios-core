<html>
<head>
<title>Hacienda Elvinarios | ADMIN <PANEL></PANEL></title>
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/bootstrap/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/bootstrap/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="css/bootstrap/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/bootstrap/custom.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <?php
          include "config.php";
          if(isset($_POST['accnum']) && isset($_POST['password'])){
            $accnum = $_POST['accnum'];
            $password = $_POST['password'];
            $stmt = $db->prepare("SELECT * FROM tb_users WHERE accnum=? AND password=? ");
            $stmt->bindParam(1, $accnum);
            $stmt->bindParam(2, $password);
            $stmt->execute();
            $row = $stmt->fetch();
            $id = $row['id'];
            $acc = $row['accnum'];
            $pass = $row['password'];
            $Name = $row['Name'];
            $email = $row['email'];
            if($accnum==$acc && $password==$pass){
              echo "cannot connect";
              session_start();
              $_SESSION['accnum'] = $acc;
              $_SESSION['password'] = $pass;
              $_SESSION['id'] = $id;
              $_SESSION['Name'] = $Name;
              $_SESSION['email'] = $email;
            ?> 
            <script> window.location.href='pages/dashboard.php'</script>
            <?php
            } else {
               ?>
               echo "cannot connect";
               <?php 
            }
          }
          ?>
            <form method="post">
            <div id="logo">
              <p align="top"><img src="img\logo1.png" height="112" width="400" align="top"></p>  
              </div>
              <h6><b>BETA VERSION</6></b></h4>
              <div>
                <input type="text" class="form-control" name="accnum" placeholder="Account Number" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-primary" value="Login">
                <a class="reset_pass" href="#">Forgot your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
              </h1>System<h1>
                <p class="change_link">New Admin?
                  <a href="#" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h4>GO BACK TO USER PAGE</h4>
                  <h5>©2017 All Rights Reserved.</h5>
                  
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>

</html>