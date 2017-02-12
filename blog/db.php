<?php 
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', '');
define('MYSQL_DBNAME', 'blog');

function db_connect() {
	$connection = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASS, MYSQL_DBNAME)
	or die ("Error: ".mysqli_error($connection));
	if (!mysqli_set_charset($connection, "utf8"))
	{
		printf("Error: ".mysqli_error($connection));
	}
	return $connection;
}
?>