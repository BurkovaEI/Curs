<?php 
	session_start();
	require 'php/db.php';
	if(!isset($_COOKIE["user"])){
		header("Location: /dance/log.php");
	}
	require 'php/edit_avatar.php';
	require 'php/del_event_from_profile.php';
	require 'php/edit_email.php';
	$id_user = $_SESSION['id'];
	$requests = $mysql->query("SELECT * FROM `request` WHERE `id_user` = '$id_user' ORDER BY `id` DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dance - Профиль</title>
	<link rel="stylesheet" href="/dance/css/profile.css">
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

	<div class="content">
		<div class="wrapper">
			<div class="profile-card">
				<div class="profile-wrapper">
					<?php if($_SESSION['avatar'] == ""): ?>
						<div class="profile-avatar" style="background-image: url(/dance/img/no-avatar.png);"></div>
					<?php else: ?>
						<div class="profile-avatar" style="background-image: url(/dance/img/<?=$_SESSION['avatar']?>);"></div>
					<?php endif; ?>
					<p class="profile-fullname"><?= $_SESSION['name'] . " " . $_SESSION['surname'] ?></p>
					<p class="profile-email">Электронная почта:</p>
					<br><form class="form_edit_email" method="post" action="profile.php"><input type="email" name="email" class="input-email" value="<?=$_SESSION['email']?>"></form>
					<form class="form_edit_avatar" method="post" action="profile.php" enctype="multipart/form-data">
						<label class="input-file">
							<input type="file" name="avatar" accept=".jpg,.jpeg,.png" onchange="this.form.submit();">
							<span>Изменить фото профиля</span>
						</label>
					</form>
					<a href="/dance/php/exit.php"><p class="exit">Выйти из аккаунта</p></a>
				</div>
			</div>
			<div class="request_list">
				<p class="my_requests_headline">Мои заявки</p>
				<?php while($row = mysqli_fetch_row($requests)): ?>
					<?php 
					$result = $mysql->query("SELECT * FROM `event` WHERE `id` = '$row[2]'");
					$event = $result->fetch_assoc();
					$id_direction = $event['id_direction'];
					$result = $mysql->query("SELECT * FROM `direction` WHERE `id` = '$id_direction'");
					$direction = $result->fetch_assoc();
					?>
					<div class="item">
						<div class="item-wrapper">
							<div class="item-img" style="background-image: url(/dance/img/<?= $event['photo'] ?>)">
							</div>
							<p class="item-name"><?= $event['name'] ?></p>
							<p class="item-person">Проводит: <?= $event['person'] ?></p>
							<p class="item-diraction">Направление: <?= $direction['name'] ?> </p>
							<p class="item-city">Город: <?= $event['city'] ?></p>
							<p class="item-date">Дата: <?= $event['date'] ?></p>
							<p class="item-price">Стоимость: <?= $event['price'] ?> ₽</p>
						</div>
						<form method="post" action="profile.php"><button type="submit" name="del_item" value="<?=$event['id']?>" class="btn_del_item">
							<p class="btn-text">Удалить мероприятие</p>
						</button></form>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>

	<footer>
		<p>© Dance 2022-2023 - Все права защищены</p>
	</footer>

</body>
</html>