<?php

require 'php/db.php';
if (!isset($_COOKIE["user"])) {
	header("Location: /dance/log.php");
}

require 'php/events_admin.php';

$events = $mysql->query("SELECT * FROM `event` ORDER BY `id` DESC");
$directions = $mysql->query("SELECT * FROM `direction`");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dance - Мероприятия</title>
	<link rel="stylesheet" href="/dance/css/events_admin.css">
	<link rel="icon" href="/dance/logo.ico">
</head>

<body>

	<a href="/dance/admin_page.php">
		<p class="back">↩</p>
	</a>

	<div class="content">
		<div class="wrapper">
			<div class="events-list-block">
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
								<form method="post" action="events_admin.php"><button type="submit" name="del_event" class="btn_delete_event" value="<?= $row[0] ?>">
									<p>Удалить мероприятие</p>
								</button></form>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="add_event_block">
				<h1 class="headline">
					Добавить мероприятие
				</h1>
				<div class="add_event_form">
					<p class="err"><?=$err?></p>
					<form class="add_form" method="post" action="events_admin.php" enctype="multipart/form-data">
						<label>Название мероприятия</label>
						<br><input type="text" name="name">
						<br><label>Кто проводит мероприятие</label>
						<br><input type="text" name="person">
						<br><label>Выберите направление</label>
						<br><select name="direction">
							<?php while ($row = mysqli_fetch_row($directions)) : ?>
								<option value="<?= $row[0] ?>"><?= $row[1] ?></option>
							<?php endwhile; ?>
						</select>
						<br><label>Город провередния</label>
						<br><input type="text" name="city">
						<br><label>Дата мероприятия</label>
						<br><input type="date" name="date">
						<br><label>Цена</label>
						<br><input type="number" name="price">
						<br><label class="input-file">
							<input type="file" name="photo">
							<span>Выберите изображение</span>
						</label>
						<br><button type="submit" name="add_event" class="btn_add_event">Добавить</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<script src="/dance/js/input-file.js" defer></script>

</body>

</html>