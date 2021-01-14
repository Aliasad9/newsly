<?php
include_once ('/wamp64/www/newsly/env.php');
$HOST = getenv('DB_HOST');
$NAME = getenv('DB_NAME');
$USER = getenv('DB_USER');
$PASSWORD = getenv('DB_PASSWORD');

$dsn = 'mysql:host='.$HOST.';dbname='.$NAME;

$pdo = new PDO($dsn, $USER, $PASSWORD);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>