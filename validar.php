<?php

if (empty($_POST['username']) ||
	empty($_POST['password'])) {
	header('location:login.php?msg=empty_fields');
}else{

	$username = $_POST['username'];
	$password = $_POST['password'];

	include 'conn.php';

	$sql = "SELECT id_user, username, password, email
	FROM tb_users
	WHERE username = '$username'
	AND password = '$password'";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn))
	{
		$row = mysqli_fetch_assoc($result);
		
		session_start();
		$_SESSION['id_user']  = $row['id_user'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['email'] 	  = $row['email'];
		header('location:restrita.php');
	}else{
		header('location:login.php?msg=error_login');
	}
}
?>
