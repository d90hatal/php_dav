<?php

require "functions.php";

// require "router.php";

//connect to mysql database.

$dsn = "mysql:host=localhost;port=3306;dbname=php_db;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("SELECT title FROM untitled_table_1");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);







