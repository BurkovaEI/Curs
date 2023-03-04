<?php 

	require 'db.php';
	$err = "";

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reg'])){

		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];

		if($name == "" || $surname == "" || $email == "" || $pass == ""){
			$err = "Вы ввели не все данные";
		}
		else{
			$result = $mysql->query("SELECT * FROM `user` WHERE `email` = '$email'");
			$user = $result->fetch_assoc();
			if(empty($user) || count($user) === 0){				
				$options = [
					'cost' => 12
				];
				$pass = password_hash($pass, PASSWORD_BCRYPT, $options);
				$mysql->query("INSERT INTO `user` (`name`,`surname`,`email`,`password`,`role`) 
				VALUES('$name','$surname','$email','$pass','Клиент')");
				header("Location: /dance/log.php");
			}
			else{
				$err = "Электронная почта занята";
			}
		}
	}

	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['log'])){

		$email = $_POST['email'];
		$pass = $_POST['pass'];

		if($email == "" || $pass == ""){
			$err = "Вы ввели не все данные";
		}
		else{
			$result = $mysql->query("SELECT * FROM `user` WHERE `email` = '$email'");
			$user = $result->fetch_assoc();
			if(empty($user) || count($user) === 0){
				$err = "Неверная почта или пароль";
			}
			else{
				if(!password_verify($pass, $user['password'])){
					$err = "Неверная почта или парол";
				}
				else{
					setcookie("user", "success", time() + 3600, "/");
					$_SESSION['id'] = $user['id'];
					$_SESSION['name'] = $user['name'];
					$_SESSION['surname'] = $user['surname'];
					$_SESSION['email'] = $user['email'];
					$_SESSION['avatar'] = $user['avatar'];
					$_SESSION['role'] = $user['role'];
					if($user['role'] == "Администратор"){
						header("Location: /dance/admin_page.php");
					}
					else{
						header("Location: /dance/");
					}
				}
			}
		}
	}

?>