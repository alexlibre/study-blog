<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Мой Первый Блог</title>
</head>
<body>
<div class="main">
	<div class="container">
		<h1>Мой Первый Блог</h1>
		<a href="/blog/admin">Панель администратора</a>
		<?php foreach ($articles as $a): ?>
		<div class="article">
			<h3>
				<a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
			</h3>
			<em>Опубликовано: <?=publish_date($a["posted"])?></em>
			<p><?=articles_intro($a['content'])?></p>
		</div>
		<?php endforeach ?>
	</div>
</div>
<footer class="footer">
	<p><a href='/blog'>Мой Первый Блог</a> <br>Copyrite &copy 2016</p>
</footer>
</body>
</html>