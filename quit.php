<?
	$connect = mysqli_connect("127.0.0.1", "root", "", "project");
	session_start();
	$_SESSION['user_id'] = null;
	header("Location: index.php");
?>	