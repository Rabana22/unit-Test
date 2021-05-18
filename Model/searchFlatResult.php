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
	<h2 class="title">Results for "<?php echo $_SESSION['icu1']?>"</h2>
	<div style="overflow-x:auto;">
  		<table>
		    <tr>
		      <th>Serial No</th>
		      <th>Name</th>
		      <th>Phone No</th>
		      <th>Email</th>
		      <th>Address</th>
		      <th>NID</th>
		      <th>Visited Flat</th>
		      <th>Date-Visited</th>
		      <th>Entry Time</th>
		      <th>Exit Time</th>
		    </tr>
		    <?php 
		    	if(isset($_SESSION["icu1"]) && isset($_SESSION["icu2"])){
		    		$fn = $_SESSION["icu1"];
		    		$sql = "SELECT * FROM visitors WHERE fNo='$fn'";

		    		$result = mysqli_query($conn, $sql);

		    	while ($row = mysqli_fetch_array($result)) {
		    		
		    ?>
		    <tr>
		    
		      <td><?php echo $row[0] ?></td>
		      <td><?php echo $row[1] ?></td>
		      <td><?php echo $row[2] ?></td>
		      <td><?php echo $row[3] ?></td>
		      <td><?php echo $row[4] ?></td>
		      <td><?php echo $row[5] ?></td>
		      <td><?php echo $row[6] ?></td>
		      <td><?php echo $row[7] ?></td>
		      <td><?php echo $row[8] ?></td>
		      
		   	  <?php
		      	if($row[9] != null){

		      ?>	
		      <td><?php echo $row[9] ?></td>	
		      <?php
		      	}
		      	else{

		      ?>

		      <td>Not checked out</td>
		    
		   	 <?php 
		   	 	}
		   	 ?>

		      
		    </tr>
		    <?php 

		        }
		    }
		    ?>
		    
		</table>
	</div>

</div>
</body>
</html>