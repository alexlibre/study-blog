<?php 
require_once ("../db.php");
require_once ("../models/articles.php");
$connection = db_connect();

$article['title']='';
$article['posted']='';
$article['content']='';

if (isset($_GET['action'])) {
	$action = $_GET['action'];
}
else {
	$action = "";
}

if ($action == "add") {
	if (!empty($_POST)) {
		articles_new($connection, 
			$_POST['title'],
			$_POST['posted'],
			$_POST['content']);
		header("location: index.php");
	}
	include("../views/article_admin.php");
} else if ($action == "edit") {
	if (!isset($_GET['id'])) 
		header("location: index.php");
	$id = (int)$_GET['id'];

	if (!empty($_POST) && $id > 0) {
		articles_edit($connection, $id, $_POST['title'], $_POST['posted'], $_POST['content']);
		header("location: index.php");
	}
	$article = article_get($connection, $id);
	include("../views/article_admin.php");
} else if ($action == "delete") {
	$id = $_GET['id'];
	$article = articles_delete($connection, $id);
	header("location: index.php");
}
else {
	$articles = articles_all($connection);
	include("../views/articles_admin.php");
}

 ?>