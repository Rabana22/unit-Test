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
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>

<nav class="sidenav" >
    <h2 class="text" style="font-size: 15px;"></h2>
    <a href="gatemanDashboard.php">Dashboard</a>
    <a href="visitorForm.php">Add Visitors</a>
    <a href="visitorCheckout.php">Visitor's checkout</a>
    <a href="logout.php">Log Out</a>
</nav>

/*visitor details*/
<div class="main">
  <div class="title">
    <h1 style="font-size: 45px">Visitor's Details</h1>
  </div>
</div>

<div class="container main">
  
  <form action="visitorDetails.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="Name">Name</label>
      </div>
      <div class="col-75">
        <input type="text" placeholder="Visitor's name.." name="name" required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="phoneNo">Phone No</label>
      </div>
      <div class="col-75">
        <input type="text" name="phoneNo" placeholder="Visitor's phone number..">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="text" name="email" placeholder="Visitor's email..">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" name="address" placeholder="Visitor's address..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">NID No</label>
      </div>
      <div class="col-75">
        <input type="text" name="nid" placeholder="Visitor's NID number..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="flatNo">Visiting Flat Number</label>
      </div>
      <div class="col-75">
        <select  name="flatNo">
          <option value="F1">F1</option>
          <option value="F2">F2</option>
          <option value="F3">F3</option>
          <option value="F4">F4</option>
          <option value="F5">F5</option>
          <option value="F6">F6</option>
          <option value="F7">F7</option>
          <option value="F8">F8</option>
          <option value="F9">F9</option>
          <option value="F10">F10</option>
        </select>
      </div>
    </div>

  
      <input type="submit" value="Add" style="background-color: #0d0d0d">
    </div>
  </form>
</div>

</body>
</html>
