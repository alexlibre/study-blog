<?php 
require_once 'db.php';
require_once 'models/articles.php';

$connection = db_connect();
$articles = articles_all($connection);
include 'views/articles.php';

?>