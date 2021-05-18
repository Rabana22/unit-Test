
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>

	<form action="signin.php" method="post">
  <div class="textstyle">
    <h1>VISITOR MANAGEMENT SYSTEM</h1>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    	<label for="roles"><b>Role: </b></label>
    
    <select name="roles">
   	 	<option value="admin">admin</option>
  		<option value="gateman">gateman</option>
  	</select>

    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"> <a href="#">Forgot password?</a></span>
  </div>
</form>
</body>
</html>