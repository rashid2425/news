<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		$title = "Новости обо всем";
		require_once "blocks/head.php";
	?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>
	<div id="wrapper">
		<div id="leftCol">
			<div id="bigArticle">
				<img src="img/articles/1.jpg" alt="Статья 1" title="Статья 1">
				<h2>Статья 1</h2>
				<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации "Здесь ваш текст.. Здесь ваш текст.. Здесь ваш текст.."
				</p>
				<a href="article.php">
					<div class="more">Далее</div>
				</a>
			</div>
			<div class="clear"><br></div>
			<div class="article">
				<img src="img/articles/2.jpg" alt="Статья 1" title="Статья 1">
				<h2>Статья 2</h2>
				<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона.
				</p>
				<a href="article.php">
					<div class="more">Далее</div>
				</a>
			</div>
			<div class="article">
				<img src="img/articles/3.jpg" alt="Статья 1" title="Статья 1">
				<h2>Статья 3</h2>
				<p>Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона.
				</p>
				<a href="article.php">
					<div class="more">Далее</div>
				</a>
			</div>
		</div>
		<?php require_once "blocks/rightCol.php" ?>
	</div>
	<?php require_once "blocks/footer.php" ?>
</body>
</html>
