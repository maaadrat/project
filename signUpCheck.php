<?
	$connect = mysqli_connect("127.0.0.1", "root", "", "project");
	$insert = "INSERT INTO users(login, password) VALUES('{$_POST['login']}','{$_POST['password']}')";
	$query = mysqli_query($connect, $insert); 
	session_start();
	$_SESSION['user_id'] = mysqli_insert_id($connect);
	header("Location: index.php");
?>	