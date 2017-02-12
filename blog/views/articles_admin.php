<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Мой Первый Блог</title>
</head>
<body>
<div class="main">
	<div class="container">
		<h1>Мой Первый Блог</h1>
		<a href="index.php?action=add">Добавить статью</a>
		<table class='admin-articles'>
			<thead>
				<tr>
					<th>Дата</th>
					<th>Заголовок</th>
					<th colspan="2"></th>
				</tr>
			</thead>
			<tbody>
		<?php foreach ($articles as $a): ?>
				<tr>
					<td><?=publish_date($a["posted"])?></td>
					<td><?=$a["title"]?></td>
					<td><a href='index.php?action=edit&id=<?=$a["id"]?>'>Редактировать</a></td>
					<td><a href='index.php?action=delete&id=<?=$a["id"]?>'>Удалить</a></td>
				</tr>
		<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
<footer class="footer">
	<p><a href='/blog'>Мой Первый Блог</a> <br>Copyrite &copy 2016</p>
</footer>
</body>
</html>