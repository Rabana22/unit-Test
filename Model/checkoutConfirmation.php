<?php
  session_start();
  require_once('includes/DBconnect.php');
  $su = $_SESSION["ub"];
  $sql = "SELECT name FROM gateman where username='$su'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  /*if($_GET['radio'] == 'Yes'){
    $ext = date("H:i");

    $se = $_SESSION['searchedSerial'];
    $sql = "INSERT INTO visitors (exitTime) VALUES ('$ext') WHERE serialNo='$se'";
    mysqli_query($conn, $sql);
    header("Location: visitorCheckout.php");
  }
  else{
    header("Location: visitorCheckout.php");
  }*/
  
  ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/visitorForm.css">
<link rel="stylesheet" type="text/css" href="css/gatemanDashboard.css">
</head>
<body>

<nav class="sidenav">
    <h2 class="text" style="font-size: 15px;"><?php echo $row[0]; ?></h2>
    <a href="gatemanDashboard.php">Dashboard</a>
    <a href="visitorForm.php">Add Visitors</a>
    <a href="visitorCheckout.php">Visitor's checkout</a>
    <a href="showVisitors.php">Todays Visitors</a>
    <a href="logout.php">Log Out</a>
</nav>

/*visitor details*/
<div class="main">
  <div class="text2">
    <h1>Checkout Confirmation</h1>
  </div>


<div class="container">

<?php
    $se = $_SESSION['searchedSerial'];
    $sql = "SELECT name, phoneNo, email, address, nid, fNo, date, entryTime, exitTime FROM visitors WHERE serialNo='$se'";

    $result1 = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result1)){
?>
  
  
    <div class="row">
      <div class="col-25">
        <label for="Name">Name</label>
      </div>
      <div class="col-75">
        <p><?php echo $row['name']?></p>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="phoneNo">Phone No</label>
      </div>
      <div class="col-75">
        <p><?php echo $row['phoneNo']?></p>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <p><?php echo $row['email']?></p>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <p><?php echo $row['address']?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">NID No</label>
      </div>
      <div class="col-75">
        <p><?php echo $row['nid']?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="flatNo">Visiting Flat Number</label>
      </div>
      <div class="col-75">
        <p><?php echo $row['fNo']?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="date">Date</label>
      </div>
      <div class="col-75">
        <p><?php echo $row['date']?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="entryTime">Entry Time</label>
      </div>
      <div class="col-75">
        <p><?php echo $row['entryTime']?></p>
      </div>
    </div>
    <?php 
  }
  ?>
  <form action="confirmation.php"  method="get">
      <div class="row">
        <div class="col-25">
          <label for="entryTime">Wants to checkout?</label>
        </div>
        <div class="col-75">
          <?php
            $sql = "SELECT exitTime FROM visitors WHERE serialNo='$se' ";
            $result2 = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result2);
            if($row[0] == null){
          ?>
         <select name="choice" style="width: 8%;">

         <option value="yes">Yes</option>
         <option value="no">No</option>
    </select>
    <input type="submit" value="Confirmation">
    <?php
      }
      else{
      ?>
      <p>Already checked out</p>
      <?php 
      }      
      ?>

       </div>
     </div>
     
  </form>

  
   
</div>
</div>

</body>
</html>
