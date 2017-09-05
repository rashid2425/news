<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title = "Обратная связь";
		require_once "blocks/head.php";
	?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<div id="wrapper">
		<div id="leftCol">
			<input type="text" name="name" id="name" placeholder="Имя"><br>
			<input type="text" name="email" id="email" placeholder="Email"><br>
			<input type="text" name="subject" id="subject" placeholder="Тема сообщения"><br>
			<textarea name="message" id="message" placeholder="Введите сюда ваше сообщение"></textarea><br>
			<input type="button" name="done" id="done" value="Отправить">
		</div>
		<?php require_once "blocks/rightCol.php" ?>
	</div>
	<?php require_once "blocks/footer.php" ?>
</body>
</html>