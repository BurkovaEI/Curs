<?php 

	session_start();
	setcookie('user', '', -1, '/');
	unset($_SESSION['id']);
	unset($_SESSION['name']);
	unset($_SESSION['surname']);
	unset($_SESSION['email']);
	unset($_SESSION['avatar']);
	unset($_SESSION['role']);
	header("Location: /dance/");

?>