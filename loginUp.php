<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'project');

$select = "SELECT * FROM users WHERE login='{$_POST['login']}' AND password='{$_POST['password']}'";

$query = mysqli_query($connect, $select);

$result = $query->fetch_assoc();

if($query->num_rows>0){
	session_start();
	$_SESSION['user_id'] = mysqli_insert_id($connect);
	header("Location: index.php");
}
else {
	header("Location: index.php");
}	
?>