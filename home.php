<?php
session_start();
if(!isset($_SESSION['username']))
	header('location:http://localhost/login/login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
<h2>Hello, <?php echo $_SESSION['username'];?></h2>
<a href="logout.php">LOGOUT</a>
</body>
</html>