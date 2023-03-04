<?php 

	define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);

	$err = "";

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['del_event'])){
		$id_event = $_POST['del_event'];
		$result = $mysql->query("SELECT `photo` FROM `event` WHERE `id` = '$id_event'");
		$event = $result->fetch_assoc();
		unlink(SITE_ROOT . "/dance/img/" . $event['photo']);
		$mysql->query("DELETE FROM `event` WHERE `id` = '$id_event'");
	}

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_event'])){
		$name = $_POST['name'];
		$person = $_POST['person'];
		$direction = $_POST['direction'];
		$city = $_POST['city'];
		$date = $_POST['date'];
		$price = $_POST['price'];

		if($name == "" || $person == "" || $direction == "" || $city == "" || $date == "" || $price == ""){
			$err = "Вы ввели не все данные";
		}
		elseif($date < date("Y-m-d")){
			$err = "В некорректно ввели дату";
		}
		elseif($price < 0){
			$err = "Вы некорректно ввели цену";
		}
		else{
			if(!empty($_FILES['photo']['name'])){
				$imgName = time() . "_" . $_FILES['photo']['name'];
				$tmpFileName = $_FILES['photo']['tmp_name'];
				$photo = $imgName;
				$path = SITE_ROOT . "/dance/img/" . $imgName;
				$result = move_uploaded_file($tmpFileName, $path);				
				if($result){
					$mysql->query("INSERT INTO `event` (`name`, `person`, `id_direction`, `city`, `date`, `price`, `photo`) 
					VALUES ('$name', '$person', '$direction', '$city', '$date', '$price', '$photo')");
				}
				else{
					$error = "Ошибка загрузки изображения на сервер";
				}
			}
			else{
				$error = "Ошибка получения изображения";
			}
		}
	}

?>