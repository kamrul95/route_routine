<html>
<head>
    <meta http-equiv="refresh" content="30"/>
    <script>
        setTimeout(function() {
          location.reload();
        }, 100000);
    </script>
</head>
</html>

<?php
    session_start();
    require_once('dbconfig.php');
    $_SESSION['con'] ++;
    echo '<h1 style="text-align:center;background-color:darkgrey;color:firebrick; padding:50px; margin:50px">Message Has been Sent to Your Email<br> It Will valid till 5 Minute.<br> So Hurry Up.</h1>';
    //$delete = "DELETE FROM confirmaccount WHERE ts_created < DATE_ADD(NOW(),INTERVAL - 5 HOUR)";
     $mysqli = new mysqli("localhost", "root", "","routeroutine");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

        /* Insert rows */
    $mysqli->query("DELETE FROM confirmaccount WHERE ts_created < DATE_ADD(NOW(),INTERVAL - 5 MINUTE)");
    if($mysqli->affected_rows==1){
        printf("Affected rows (INSERT): %d\n", $mysqli->affected_rows);
        echo '<h1 style="text-align:center;background-color:darkgrey;color:firebrick; padding:50px; margin:10%"><a href="signup.php" style="text-align:center;text-decoration:none">Click Here to Try Again</a></h1>';
    }
?>