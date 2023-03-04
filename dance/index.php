<?php 
	if(!isset($_COOKIE["user"])){
		header("Location: /dance/log.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dance - Главная</title>
	<link rel="stylesheet" href="/dance/css/index.css">
	<link rel="icon" href="/dance/logo.ico">
</head>
<body>

	<nav>
		<div class="nav-logo-block">
			<div class="logo-img"></div>
			<div class="logo-separat"></div>
			<div class="logo-txt">
				<a class="txt" href="/dance/index.php"><p class="txt">Dance</p></a>
			</div>
		</div>
		<div class="nav-links-block">
			<ul>
				<a href="/dance/about_us.php"><li>О нас</li></a>
				<a href="/dance/direction.php"><li>Направления</li></a>
				<a href="/dance/events.php"><li>Мероприятия</li></a>
				<a href="/dance/contacts.php"><li>Контакты</li></a>
			</ul>
		</div>
		<div class="nav-profile-block">
			<a class="profile-a" href="/dance/profile.php"><div class="nav-profile"></div></a>
		</div>
	</nav>

	<header>
		<div class="header-content1">
			<div class="header-wrapper1">
				<p>Добро пожаловать</p>
				<h1>ADRENALINE DANCE TEAM</h1>
			</div>
		</div>
		<div class="header-content2">
			<a href="/dance/events.php">
				<button class="btn_request">
					<p>Подать заявку</p>
				</button>
			</a>
		</div>
	</header>

	<footer>
		<p>© Dance 2022-2023 - Все права защищены</p>
	</footer>
	
</body>
</html>