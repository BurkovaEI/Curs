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
	<title>Dance - Админ-панель</title>
	<link rel="stylesheet" href="/dance/css/admin_page.css">
	<link rel="icon" href="/dance/logo.ico">
</head>

<body>

	<div class="wrapper">
		<div class="content">
			<a href="/dance/events_admin.php"><div class="task btn_events">
				<p class="btn-text">Мероприятия</p>
			</div></a>
			<a href="/dance/direction_admin.php"><div class="task btn-direction">
				<p class="btn-text">Направления</p>
			</div></a>
			<a href="/dance/requests_admin.php"><div class="task btn-requests">
				<p class="btn-text">Заявки</p>
			</div></a>
			<a href="/dance/php/exit.php"><div class="task btn-exit">
				<p class="btn-text">Выйти</p>
			</div></a>
		</div>
	</div>

</body>

</html>