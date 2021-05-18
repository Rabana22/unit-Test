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
	<link rel="stylesheet" href="css/gatemanDashboard.css">
	<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
	<nav class="sidenav">
		<h1 class="text" style="font-size: 15px;"></h1>
		<a href="gatemanProfile.php">My Profile</a>
  		<a href="gatemanDashboard.php">Dashboard</a>
 		<a href="visitorForm.php">Add Visitors</a>
  		<a href="visitorCheckout.php">Visitor's checkout</a>
 		<a href="logout.php">Log Out</a>
	</nav>

<div class="main">
	<h2 class="title">Search Options</h2>

	<div class="clearfix" >
		<a href="searchID.php" >
		 <div class="box">
	  
	  	  <p>By ID</p>
	 	 </div>
	    </a>

	    <a href="searchName.php" >
		 <div class="box">
	  
	  	  <p>By Name</p>
	 	 </div>
	    </a>

	    <a href="searchFlatOptions.php" >
		 <div class="box">
	  
	  	  <p>By Flat No</p>
	 	 </div>
	    </a>

	    <a href="searchDateTime.php" >
		 <div class="box">
	  
	  	  <p>By Date & Time</p>
	 	 </div>
	    </a>
	  
</div>
</body>
</html>