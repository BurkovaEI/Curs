<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])){

	$email = $_POST['email'];
	$id_user = $_SESSION['id'];

	if(!($email == "")){
		$mysql->query("UPDATE `user` SET `email` = '$email' WHERE `id` = '$id_user'");
		$_SESSION['email'] = $email;
	}

}

?>