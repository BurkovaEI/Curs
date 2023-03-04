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
	<link rel="stylesheet" href="/dance/css/log.css">
	<link rel="icon" href="/dance/logo.ico">
</head>
<body>

<div class="content">
	<div class="log-form">
	<p class="err"><?= $err ?></p>
		<div class="headline-block">
			<h1>Войти</h1>
		</div>
		<form method="post" action="log.php">
			<div class="form-content">
				<label>Электронная почта</label>
				<br><input type="email" name="email">
				<br><label>Пароль</label>
				<br><input type="password" name="pass">
				<br><button type="submit" name="log" class="btn_log">Войти</button>
			</div>
		</form>
		<a href="/dance/reg.php"><p class="no-acc">Нет аккаунта? <b>Создать</b></p></a>
	</div>
</div>
	
</body>
</html>