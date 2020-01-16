<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

session_start();

//База данных для локалки
$host = '127.0.0.1:3306';
$username = 'admin';
$password = '1tkT30gkUI8s';
$dbName = 'register';

//База данных для хостинга

// $host = '127.0.0.1:3306';
// $username = 'cg48799_notes';
// $password = '1tkT30gkUI8s';
// $dbName = 'cg48799_notes';


$link = mysqli_connect($host, $username, $password, $dbName);
mysqli_query($link, "SET NAMES 'utf8'");

?>