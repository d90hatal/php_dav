<?php

require "functions.php";

// require "router.php";

//connect to mysql database.

require "Database.php";

$config = require "config.php";


$db = new Database($config['database']);

$posts = $db->query("SELECT * FROM untitled_table_1")->fetchAll();

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
dd($posts);
