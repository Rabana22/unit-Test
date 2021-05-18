<?php
	session_start();
	require_once('includes/DBconnect.php');
	

	if($_GET['choice'] == 'yes'){
	date_default_timezone_set("Asia/Dhaka");
    $ext = date("H:i");

    $se = $_SESSION['searchedSerial'];
    $sql = "UPDATE visitors SET exitTime = '$ext' WHERE serialNo='$se'";

    mysqli_query($conn, $sql);
    echo $ext ."successful";
    header("Location: visitorCheckout.php");
  }
  else{
    header("Location: visitorCheckout.php");
  }
 ?>