<?php 

	session_start();
	require 'db.php';

	$id_event = $_POST['event'];
	$id_user = $_SESSION['id'];

	$result = $mysql->query("SELECT * FROM `request` WHERE `id_user` = '$id_user' AND `id_event` = '$id_event'");
	$check = $result->fetch_assoc();
	
	if(empty($check) || count($check) === 0){
		$mysql->query("INSERT INTO `request` (`id_user`,`id_event`) VALUES ('$id_user', '$id_event')");
		$response = ["msg" => "Успешно!"];
		echo json_encode($response);
	}
	else{
		$response = ["msg" => "Вы уже подали заявку на это мероприятие!"];
		echo json_encode($response);
	}

?>