<?php

	require_once('includes/DBconnect.php');

	if(isset($_POST['name']) && isset($_POST['phoneNo']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['nid']) && isset($_POST['flatNo'])) {
		date_default_timezone_set("Asia/Dhaka");
		$n = $_POST['name'];
		$p = $_POST['phoneNo'];
		$e = $_POST['email'];
		$a = $_POST['address'];
		$ni = $_POST['nid'];
		$f = $_POST['flatNo'];
		$d = date("Y-m-d");
		$enT = date("H:i");


		

		$sql = "INSERT INTO visitors (name, phoneNo, email, address, nid, fNo, date, entryTime) VALUES ('$n','$p','$e','$a','$ni','$f','$d','$enT')";

		mysqli_query($conn, $sql);


		header("Location: visitorForm.php");
	}
?>