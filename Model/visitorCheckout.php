<?php
	session_start();
	require_once('includes/DBconnect.php');
	$su = $_SESSION["ub"];
	$sql = "SELECT name FROM gateman where username='$su'";

	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/searchbar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/gatemanDashboard.css">

</head>
<body>
	<nav class="sidenav">
		<h1 class="text" style="font-size: 15px;"></h1>
		 <a href="gatemanDashboard.php">Dashboard</a>
 		 <a href="visitorForm.php">Add Visitors</a>
		 <a href="visitorCheckout.php">Visitor's checkout</a>
 		 <a href="logout.php">Log Out</a>
	</nav>

	<div class="main">
		<form class="example" action="checkoutPHP.php" method="post">
  			<input type="text" placeholder="Search by serial number.." name="search">
 			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	
</body>
</html>