<?php 
	require 'php/db.php';
	if(!isset($_COOKIE["user"])){
		header("Location: /dance/log.php");
	}
	$direction = $mysql->query("SELECT * FROM `direction` ORDER BY `id` DESC");
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dance - Направления</title>
	<link rel="stylesheet" href="/dance/css/direction.css">
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
			<h1 class="headline">
				Направления
			</h1>
			<div class="direction-list">
				<?php while($row = mysqli_fetch_row($direction)): ?>
					<div class="item">
						<h1><?=$row[1]?></h1>
						<p><?=$row[2]?></p>
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