<!DOCTYPE html>
<html lang="en">
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
		<a href="/blog/admin">Панель администратора</a>
		<div>
			<form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
				<label>
				Название
					<input class="form-item" name="title" required autofocus type="text" value="<?=$article['title']?>">
				</label>
				<label>
				Дата
					<input class="form-item" name="posted" type="date" value="<?=$article['posted']?>" required>
				</label>
				<label>
				Текст
					<textarea class="form-item" name="content" required><?=$article['content']?></textarea>
				</label>
				<input type="submit" value="Сохранить" class="btn">
			</form>
		</div>
	</div>
</div>
<footer>
	<p><a href='/blog'>Мой Первый Блог</a> <br>Copyrite &copy 2016</p>
</footer>
</body>
</html>