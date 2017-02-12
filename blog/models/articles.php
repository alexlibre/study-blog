<?php 
function articles_all($connection)
{
	$query = "SELECT * FROM articles ORDER BY id DESC";
	$res = mysqli_query($connection, $query);

	if (!$res)
		die (mysqli_error($connection));

	$n = mysqli_num_rows($res);
	$articles = array();

	for ($i=0; $i < $n; $i++) { 
		$row = mysqli_fetch_assoc($res);
		$articles[] = $row;
	}
	return $articles;
}

function article_get($connection, $id_article)
{
	$query = sprintf("SELECT * FROM articles WHERE id = %d", (int)$id_article);
	$res = mysqli_query($connection, $query);
	if (!$res)
		die (mysqli_error($connection));

	$article = mysqli_fetch_assoc($res);
	return $article;
}

function articles_new($connection, $title, $posted, $content)
{
	$title = trim($title);
	$content = trim($content);

	$load = "INSERT INTO articles (title, posted, content) VALUES ('%s', '%s', '%s')";
	$query = sprintf($load, 
		mysqli_real_escape_string($connection, $title),
		mysqli_real_escape_string($connection, $posted),
		mysqli_real_escape_string($connection, $content));
	$res = mysqli_query($connection, $query);

	if (!$res)
		die(mysqli_error($connection));

	return true;
}

function articles_edit($connection, $id, $title, $posted, $content)
{
	$title = trim($title);
	$content = trim($content);
	$posted = trim($posted);
	$id = (int)$id;

	if ($title == '')
		return false;
	$update = "UPDATE articles SET title='%s', content='%s', posted='%s' WHERE id='%d'";
	$query = sprintf($update,
		mysqli_real_escape_string($connection, $title),
		mysqli_real_escape_string($connection, $content),
		mysqli_real_escape_string($connection, $posted),
		$id);
	$res = mysqli_query($connection, $query);

	if (!$res)
		die(mysqli_error($connection));
	return mysqli_affected_rows($connection);
}

function articles_delete($connection, $id)
{
	$id = (int)$id;
	if ($id == 0)
		return false;

	$query = sprintf("DELETE from articles WHERE id='%d'", $id);
	$res = mysqli_query($connection, $query);

	if (!$res)
		die(mysqli_error($connection));
	return mysqli_affected_rows($connection);
}

function articles_intro($text, $len = 500)
{
	return mb_substr($text, 0, $len);
}

function publish_date($date)
{
	return date('d-m-Y', strtotime($date));
}

?>