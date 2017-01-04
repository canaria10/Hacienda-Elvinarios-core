<?php
    $accnum1 = $_POST['accnum'];
    $password1 = $_POST['password'];

    $accnum1 = stripcslashes($accnum1);
    $password1 = stripslashes($password1);
 
    
    $conn = mysqli_connect("localhost", "root", "") or die("Cannot connect");
    mysqli_select_db($conn, "accdb");

    $result = mysqli_query($conn, "SELECT * FROM users WHERE accnum = '$accnum1' and password = '$password1'")
                or die ("failed to query database".mysqli_error());
    $row = mysqli_fetch_array($result);
    if($row['accnum'] == $accnum1 && $row['password'] == $password1){
        ?>
        <script> window.location.href='dashboard.php'</script>
    <?php
    }
    else{
        echo "failed to login";
    }
?>