<?php
	session_start();
	require_once('includes/DBconnect.php');

	if(isset($_POST['uname']) && isset($_POST['psw']) && isset($_POST['roles'])){

		$u = $_POST['uname'];
		$p = $_POST['psw'];
		$r = $_POST['roles'];

		$_SESSION["ub"] = $u;
		echo $_SESSION["ub"];

		if($r == "admin"){
			$sql = "SELECT * FROM admin WHERE username='$u' AND password='$p'";
		}
		//$sql = "SELECT * FROM users WHERE userName='$u' AND password='$p' AND role='$r'";
		if($r == "gateman"){
			$sql = "SELECT * FROM gateman WHERE username='$u' AND password='$p'";
		}

		$result = mysqli_query($conn, $sql);
		
		if(mysqli_num_rows($result) !=0){

			if($r == "admin"){
				header("Location: adminDashboard.php");
			}
			else{
				header("Location: gatemanDashboard.php");
			}
		}
		else{
			header("Location: index.php");
		}


	}
?>