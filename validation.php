<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn, 'logindb');
$q = "select * from user where username='$username' and password='$password';";
$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username'] = $username;
	header('location:http://localhost/login/home.php');
}
else
{
	header('location:http://localhost/login/login.php');	
}