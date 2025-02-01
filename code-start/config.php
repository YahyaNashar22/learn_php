<?php

$hostname = "localhost";
$db_name = "learn_php";
$db_user = "yahya";
$db_password = "yahya";

 //database source name
 $dsn = "mysql:host=$hostname;dbname=$db_name";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];


 ?>