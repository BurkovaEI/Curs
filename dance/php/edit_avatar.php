<?php 

	define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
	$id = $_SESSION['id'];
	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['avatar'])){
		if(!empty($_FILES['avatar']['name'])){
			$imgName = time() . "_" . $_FILES['avatar']['name'];
			$tmpFileName = $_FILES['avatar']['tmp_name'];
			$avatar = $imgName;
			$path = SITE_ROOT . "/dance/img/" . $imgName;
			$result = move_uploaded_file($tmpFileName, $path);
			if($_SESSION['avatar'] != ""){
				unlink(SITE_ROOT . "/dance/img/" . $_SESSION['avatar']);
			}
			if($result){
				$mysql->query("UPDATE `user` SET `avatar` = '$avatar' WHERE `id` = '$id'");
				$_SESSION['avatar'] = $avatar;
			}
			else{
			}
		}
		else{
		}

	}

?>