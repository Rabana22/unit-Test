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
	<link rel="stylesheet" href="css/detailstable.css">
</head>
<body>
	<nav class="sidenav">
		 <h1 class="text" style="font-size: 15px;"><?php echo $row[0]; ?></h1>
		 <a href="gatemanProfile.php">My Profile</a>
 		 <a href="gatemanDashboard.php">Dashboard</a>
		 <a href="visitorForm.php">Add Visitors</a>
		 <a href="visitorCheckout.php">Visitor's checkout</a>
		 <a href="logout.php">Log Out</a>
    </nav>

<div class="main">
	<h2 class="title">10 most frequent visitors</h2>
	<div style="overflow-x:auto;">
  		<table>
		    <tr>
		      
		      
		      <th>Name</th>
		      <th>Phone No</th>
		      <th>Email</th>
		      <th>Address</th>
		      <th>NID</th>
		      
		    </tr>
		    <?php 
		    	
		    	//while ( $cnt<= 10) {
		    		$sql = "SELECT name, phoneNo,email,address,nid, count(nid) FROM visitors GROUP BY nid ORDER BY count(nid) DESC LIMIT 10";
		    		$result = mysqli_query($conn, $sql);
		    		while ($row = mysqli_fetch_array($result)) {
		 
		    ?>
		    <tr>

		    
		      <td><?php echo $row[0] ?></td>
		      <td><?php echo $row[1] ?></td>
		      <td><?php echo $row[2] ?></td>
		      <td><?php echo $row[3] ?></td>
		      <td><?php echo $row[4] ?></td>

		      
		    </tr>
		    <?php 
		    	//break;
		        }
		        //$cnt+=1;
		    //}
		    ?>
		
		    
		    
		</table>
	</div>

</div>
</body>
</html>