<?php

require 'php/db.php';
if (!isset($_COOKIE["user"])) {
	header("Location: /dance/log.php");
}

require 'php/direction_admin.php';

$i = 0;
$directions = $mysql->query("SELECT * FROM `direction` ORDER BY `id` DESC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dance - Направления</title>
	<link rel="stylesheet" href="/dance/css/direction_admin.css">
	<link rel="icon" href="/dance/logo.ico">
</head>

<body>

	<a href="/dance/admin_page.php">
		<p class="back">↩</p>
	</a>

	<div class="content">
		<div class="wrapper">
			<div class="direction-list-block">
				<h1 class="headline">
					Направления
				</h1>
				<div class="direction-list">
					<?php while($row = mysqli_fetch_row($directions)): ?>
						<?php $i++; ?>
						<div class="item">
							<p class="item_id"><?=$i?></p>
							<p class="item_name"><?=$row[1]?></p>
							<form class="del_direc_form" method="post" action="direction_admin.php"><button class="btn_delete_direction" name="del_direction" value="<?=$row[0]?>">×</button></form>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="add_direction_block">
				<h1 class="headline">
					Добавить мероприятие
				</h1>
				<div class="add_event_form">
					<p class="err"><?=$err?></p>
					<form class="add_form" method="post" action="direction_admin.php">
						<label>Название направления</label>
						<br><input type="text" name="name">
						<br><label>Описание направления</label>
						<br><textarea name="description"></textarea>
						<br><button type="submit" name="add_direction" class="btn_add_direction">Добавить</button>
					</form>
				</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<script src="/dance/js/input-file.js" defer></script>

</body>

</html>