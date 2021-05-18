<?php
	session_start();
	require_once('includes/DBconnect.php');
	$se = $_POST['search'];
	$_SESSION['searchedSerial'] = $se;

	$sql = "SELECT name, serialNo FROM visitors WHERE serialNo='$se'";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if(mysqli_num_rows($result) !=0){
		header("Location: checkoutConfirmation.php");
	}
	else{
		header("Location: visitorCheckout.php");
	}




?>