<DOCTYPE! html>

<html>
<head>
</head>
<body>

<?php

session_start();
include 'dbcon.php';

$username =$_POST['username'];
$password =$_POST['password'];

$sql = "select * from main_login where Username='$username' and Password='$password'";
$result = mysqli_query($con,$sql);
$row = $result -> fetch_assoc();

if (mysqli_num_rows($result)){
	// Store username for future purpose....
	$_SESSION['adminname'] = $username;
	
	$role = $row["Role"];
	if ($role == "Production Manager"){
		header('location:DailyReport.php');
	}
	elseif ($role == "Inventory Handling Clerk"){
		header('location:ManageProducts.php');
	}
	elseif ($role == "Chief Accountant"){
		header('location:MonthlyReport.php');
	}
	elseif ($role == "Customer"){
		header('location:home.php');
	}
	elseif ($role == "Admin"){
		header('location:StaffHome.php');
	}
}
else {
	$msg = "The credentials do not match";
	$msg = base64_encode($msg); // encode message
	// redirect and pass data to url
	header("Location:Login.php?msg=$msg");
}
	
?>
</body>
</html>