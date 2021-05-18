<?php
	session_start();
	require_once('includes/DBconnect.php');
	$su = $_SESSION["ub"];
	$sql = "SELECT name FROM gateman where username='$su'";

	$r1 = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($r1);

	if(isset($_GET['search'])){
		//$sn = $_GET['search'];
		$_SESSION["icu1"] = $_GET['search'];
		$_SESSION["icu2"] = "flat";

		//$sql = "SELECT * FROM visitors WHERE serialNo='$sn";

		//
		 //$_SESSION["res"] = $result;

		header("Location: searchFlatResult.php");
}


  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/gatemanDashboard.css">
	<link rel="stylesheet" href="css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="css/searchbar.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">

		.tc {
		    //border: 3px solid #fff;
		    padding: 2px;
		}

		.c {
		    width: 60%;
		    float: left;
		    padding: 20px;
		    border: 2px;
		}  
		.t{
			font-size: 
			width: 40%;
		    float: left;
		    padding: 15px;
		    border: 2px;

		    font-family: "Times New Roman", Times, serif;
			font-size: 20px;
			//etter-spacing: -0.6px;
			//word-spacing: 0px;
			color: #050F27;
			//font-weight: 400;
			text-decoration: none;
			font-style: normal;
			font-variant: normal;
			text-transform: uppercase;
			//text-shadow: 3px 3px 3px #060655;
		}

	</style>
</head>
<body>
	<nav class="sidenav">
		<h1 class="text" style="font-size: 15px;"><?php echo $row[0]; ?></h1>
		<a href="gatemanProfile.php">My Profile</a>
		<a href="gatemanDashboard.php">Dashboard</a>
		<a href="visitorForm.php">Add Visitors</a>
		<a href="visitorCheckout.php">Visitor's checkout</a>
		<a href="showVisitors.php">Todays Visitors</a>
		<a href="logout.php">Log Out</a>
</nav>

<div class="main">
	<div class="tc">
		<div class="t"><p>Enter the flat no:</p></div>
	  <div class="c">
		<form class="example" action=""  method="get">

  			<input type="text" placeholder="Search by flat no.." name="search">
 			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
		</div>
	</div>


	 
</div>
</body>
</html>