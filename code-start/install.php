<?php require_once("config.php") ?>
<?php

//Php DataBase Object (PDO)
$connection = new PDO($dsn, $db_user, $db_password, $options);

$sql = "CREATE TABLE IF NOT EXISTS ideasTable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(40) NOT NULL,
    content TEXT NOT NULL
);";

$connection->exec($sql);

echo "You are connected to the database successfully";

?>