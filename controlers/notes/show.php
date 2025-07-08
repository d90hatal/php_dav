<?php

use Core\Database;

$config = require base_path("config.php");

$db = new Database($config['database']);

$currentUserId = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $note = $db->query("SELECT * FROM notes WHERE id = :id", [
        "id" => $_GET['id']
    ])->findOrFail();
    
    authorize($note['user_id'] === $currentUserId);

    $db->query("DELETE FROM notes WHERE id = :id", [
        "id" => $_GET['id']
    ]);
    header('location: /php-sandbox/php_dav/notes');
    exit();
}
else{


$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    "id" => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);



view("notes/show.view.php", [
    "heading" => "note",
    "note" => $note
]);

}