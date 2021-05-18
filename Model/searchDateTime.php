<?php
  session_start();
  require_once('includes/DBconnect.php');
  $su = $_SESSION["ub"];
  $sql = "SELECT name FROM gateman where username='$su'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
if (isset($_GET['date']) && isset($_GET['time1']) && isset($_GET['time2'])) {

  $_SESSION["dt"] = $_GET['date'];
  $_SESSION["t1"] = $_GET['time1'];
  $_SESSION["t2"] = $_GET['time2'];

  header("Location: searchByDtResult.php");
}


  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/visitorForm.css">
<link rel="stylesheet" type="text/css" href="css/gatemanDashboard.css">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>

<nav class="sidenav" >
    <h2 class="text" style="font-size: 15px;"><?php echo $row[0]; ?></h2>
    <a href="gatemanProfile.php">My Profile</a>
    <a href="gatemanDashboard.php">Dashboard</a>
    <a href="visitorForm.php">Add Visitors</a>
    <a href="visitorCheckout.php">Visitor's checkout</a>
    <a href="logout.php">Log Out</a>
</nav>

/*visitor details*/
<div class="main">
  <div class="title">
    <h1 style="font-size: 45px">search by date & time</h1>
  </div>
</div>

<div class="container main">
  
  <form action="" method="get">
    <div class="row">
      <div class="col-25">
        <label for="date">Enter The Date(YYYY-MM-DD)</label>
      </div>
      <div class="col-75">
        <input type="date" placeholder="Date(YYYY-MM-DD).." name="date" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="phoneNo">Visiting Time Between :</label>
      </div>
      <div class="col-75">
        <input type="time" name="time1"  required>
      </div>

        <div class="col-75">
        <input type="time" name="time2"  required>
      </div>
    </div>

      

  
      <input type="submit" value="Search" style="background-color: #0d0d0d">
    </div>
  </form>
</div>

</body>
</html>
