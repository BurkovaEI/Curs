<?php 

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['del_item'])){
		$id_event = $_POST['del_item'];
		$id_user = $_SESSION['id'];

		$mysql->query("DELETE FROM `request` WHERE `id_user` = '$id_user' AND `id_event` = '$id_event'");

	}

?>