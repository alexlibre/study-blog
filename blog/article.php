<?php 
require_once ("db.php");
require_once ("models/articles.php");

$connection = db_connect();
$article = article_get($connection, $_GET['id']);
include ("views/article.php");

?>