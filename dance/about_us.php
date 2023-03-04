<?php
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
	<title>Dance - О нас</title>
	<link rel="stylesheet" href="/dance/css/about_us.css">
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
			<h1 class="headline">О нас</h1>
			<p class="about_us_name">ADRENALINE DANCE TEAM</p>
			<p class="about_us">Мы профессиональный коллектив современного танца, более 10 лет работающий над созданием актуальных хореографических идей и общественно значимых событий.</p>
			<div class="about_us_img1"></div>
			<p class="about_us">Также коллектив является лауреатом Всероссийских, Республиканских и Международных конкурсов, участником открытия и закрытия 27-ой летней Универсиады в Казани.</p>
			<div class="about_us_img2"></div>
			<p class="about_us">Данная платформа организованна в коллаборации с коллективами Казани для возможности удобного расположения мероприятий.</p>
			<div class="about_us_img3"></div>
			<p class="about_us">DanMore — это приложение для танцоров и хореографов в котором вы можете искать танцевальные события и оставлять заявку на них.</p>
		</div>
	</div>


	<footer>
		<p>© Dance 2022-2023 - Все права защищены</p>
	</footer>

</body>

</html>