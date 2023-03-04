<?php 
	session_start();
	require 'php/logreg.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dance - Войти</title>
	<link rel="stylesheet" href="/dance/css/reg.css">
	<link rel="icon" href="/dance/logo.ico">
</head>
<body>

<div class="content">
	<div class="reg-form">
		<p class="err"><?= $err ?></p>
		<div class="headline-block">
			<h1>Создать аккаунт</h1>
		</div>
		<form method="post" action="reg.php">
			<div class="form-content">
			<label>Имя</label>
				<br><input type="text" name="name">
				<br><label>Фамилия</label>
				<br><input type="text" name="surname">
				<br><label>Электронная почта</label>
				<br><input type="email" name="email">
				<br><label>Пароль</label>
				<br><input type="password" name="pass">
				<br><button type="submit" name="reg" class="btn_reg">Создать</button>
			</div>
		</form>
		<a href="/dance/log.php"><p class="yes-acc">Есть аккаунта? <b>Войти</b></p></a>
	</div>
</div>
	
</body>
</html>