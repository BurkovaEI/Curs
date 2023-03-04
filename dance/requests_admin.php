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
	<title>Dance - Заявки</title>
	<link rel="stylesheet" href="/dance/css/requests_admin.css">
	<link rel="icon" href="/dance/logo.ico">
</head>

<body>

	<a href="/dance/admin_page.php">
		<p class="back">↩</p>
	</a>

	<div class="content">
		<div class="wrapper">
			<h1 class="headline">Заявки</h1>
			<div class="requests-list">
				<?php while ($row = mysqli_fetch_row($events)) : ?>
					<?php $requests = $mysql->query("SELECT * FROM `request` WHERE `id_event` = '$row[0]'");	?>
					<div class="item">
						<h2><?= $row[1] ?></h2>
						<ol>
							<?php while ($row2 = mysqli_fetch_row($requests)) : ?>
								<?php
								$result = $mysql->query("SELECT * FROM `user` WHERE `id` = '$row2[1]'");
								$user = $result->fetch_assoc();
								?>
								<li><?= $user['name'] . " " . $user['surname'] . " (" . $user['email'] . ")" ?></li>
							<?php endwhile; ?>
						</ol>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	<script src="/dance/js/input-file.js" defer></script>

</body>

</html>