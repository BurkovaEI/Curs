<?php
require 'php/db.php';
if (!isset($_COOKIE["user"])) {
	header("Location: /dance/log.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dance - Контакты</title>
	<link rel="stylesheet" href="/dance/css/contacts.css">
	<link rel="icon" href="/dance/logo.ico">
</head>

<body>

	<nav>
		<div class="nav-logo-block">
			<div class="logo-img"></div>
			<div class="logo-separat"></div>
			<div class="logo-txt">
				<a class="txt" href="/dance/index.php">
					<p class="txt">Dance</p>
				</a>
			</div>
		</div>
		<div class="nav-links-block">
			<ul>
				<a href="/dance/about_us.php">
					<li>О нас</li>
				</a>
				<a href="/dance/direction.php">
					<li>Направления</li>
				</a>
				<a href="/dance/events.php">
					<li>Мероприятия</li>
				</a>
				<a href="/dance/contacts.php">
					<li>Контакты</li>
				</a>
			</ul>
		</div>
		<div class="nav-profile-block">
			<a class="profile-a" href="/dance/profile.php">
				<div class="nav-profile"></div>
			</a>
		</div>
	</nav>

	<div class="content">
		<div class="wrapper">
			<h1 class="headline">
				Контакты
			</h1>
			<p>89600884372</p>
			<p>dance_kzn@gmail.com</p>
			<div class="contacts-list">
				<div class="contact vk"><a href="https://www.google.ru/">
						<div class="a"></div>
					</a></div>
				<div class="contact tg"><a href="https://www.google.ru/">
						<div class="a"></div>
					</a></div>
				<div class="contact insta"><a href="https://www.google.ru/">
						<div class="a"></div>
					</a></div>
				<div class="contact tw"><a href="https://www.google.ru/">
						<div class="a"></div>
					</a></div>
				<div class="contact fb"><a href="https://www.google.ru/">
						<div class="a"></div>
					</a></div>
			</div>
		</div>
	</div>

	<footer>
		<p>© Dance 2022-2023 - Все права защищены</p>
	</footer>

</body>

</html>