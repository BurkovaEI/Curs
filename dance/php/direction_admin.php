<?php 

	$err = "";

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['del_direction'])){
		$id_direction = $_POST['del_direction'];
		$mysql->query("DELETE FROM `direction` WHERE `id` = '$id_direction'");
	}

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_direction'])){
		$name = $_POST['name'];
		$description = $_POST['description'];

		if($name == "" || $description == ""){
			$err = "Вы ввели не все данные";
		}
		else{
			$result = $mysql->query("SELECT * FROM `direction` WHERE `name` = '$name'");
			$check = $result->fetch_assoc();
			if(empty($check) || count($check) === 0){
				$mysql->query("INSERT INTO `direction` (`name`, `description`) VALUES ('$name', '$description')");
			}
			else{
				$err = "Данное направление уже имеется в базе данных";
			}
		}
	}


?>