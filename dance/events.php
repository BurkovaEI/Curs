<?php
require 'php/db.php';
if (!isset($_COOKIE["user"])) {
	header("Location: /dance/log.php");
}
$events = $mysql->query("SELECT * FROM `event` ORDER BY `id` DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dance - Мероприятия</title>
	<link rel="stylesheet" href="/dance/css/events.css">
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
				Мероприятия
			</h1>
			<div class="events-list">
				<?php while ($row = mysqli_fetch_row($events)) : ?>
					<?php
					$result = $mysql->query("SELECT * FROM `direction` WHERE `id` = '$row[3]'");
					$direction = $result->fetch_assoc();
					?>
					<div class="item">
						<div class="item-wrapper">
							<div class="item-img" style="background-image: url(/dance/img/<?= $row[7] ?>)">
							</div>
							<p class="item-name"><?= $row[1] ?></p>
							<p class="item-person">Проводит: <?= $row[2] ?></p>
							<p class="item-diraction">Направление: <?= $direction['name'] ?> </p>
							<p class="item-city">Город: <?= $row[4] ?></p>
							<p class="item-date">Дата: <?= $row[5] ?></p>
							<p class="item-price">Стоимость: <?= $row[6] ?> ₽</p>
							<div class="btn_request" id="<?=$row[0]?>">
								<p>Подать заявку</p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>

	<footer>
		<p>© Dance 2022-2023 - Все права защищены</p>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<script src="/dance/js/request.js" defer></script>

</body>

</html>