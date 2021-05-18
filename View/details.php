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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/visitorForm.css">
<link rel="stylesheet" type="text/css" href="css/gatemanDashboard.css">
</head>
<body>

<nav class="sidenav" >
    <h2 class="text" style="font-size: 15px;"><?php echo $row[0]; ?></h2>
    <a href="gatemanDashboard.php">Dashboard</a>
    <a href="visitorForm.php">Add Visitors</a>
    <a href="visitorCheckout.php">Visitor's checkout</a>
    <a href="logout.php">Log Out</a>
</nav>


  <div class="main">
  <div class="text2">
    <h1>Visitor's Details</h1>
  </div>
<div class="container">
        <?php 
        $result;

        if(isset($_SESSION["icu1"]) && isset($_SESSION["icu2"])){
          //$res = $_SESSION['result'];
          if ($_SESSION["icu2"] == "id") {
            $sn = $_SESSION["icu1"];
            $sql = "SELECT * FROM visitors WHERE serialNo='$sn'";
            $result = mysqli_query($conn, $sql);
          }
          if(isset($_SESSION["icu3"])){
            if ($_SESSION["icu2"] == "name") {
              $nm = $_SESSION["icu1"];
              $sql = "SELECT * FROM visitors WHERE name='$nm'";
              $result = mysqli_query($conn, $sql);
            }
          }
        }
          while ($row = mysqli_fetch_array($result)) {
    
        ?>
        <div class="row">
      <div class="col-25">
        <label for="sn">Serial No</label>
      </div>
      <div class="col-75">
        <p><?php echo $row[0]?></p>
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="Name">Name</label>
      </div>
      <div class="col-75">
        <p><?php echo $row[1]?></p>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="phoneNo">Phone No</label>
      </div>
      <div class="col-75">
        <p><?php echo $row[2]?></p>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <p><?php echo $row[3]?></p>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <p><?php echo $row[4]?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">NID No</label>
      </div>
      <div class="col-75">
        <p><?php echo $row[5]?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="flatNo">Visiting Flat Number</label>
      </div>
      <div class="col-75">
        <p><?php echo $row[6]?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="date">Date-Visited</label>
      </div>
      <div class="col-75">
        <p><?php echo $row[7]?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="entryTime">Entry Time</label>
      </div>
      <div class="col-75">
        <p><?php echo $row[8]?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="exitTime">Exit Time</label>
      </div>
      <div class="col-75">
          <?php
            if($row[9] != null){

          ?>
          <p><?php echo $row[9]; ?></p>
         
          <?php
            }
            else{
          ?>
          <p>Not checked out yet</p>
          <?php 
            }      
          ?>

       </div>
        <?php 

            }
          
         ?>
        

</div>
</div>

</body>
</html>