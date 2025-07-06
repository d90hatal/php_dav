<?php



$config = require base_path("config.php");
$db = new Database($config['database']);


$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (! Validator::string($_POST['body'], 1, 15)) {
        $errors['body'] = 'Note must be contain a character and less than 15 characters';
    }
    if (empty($errors)) {
        $db->query('INSERT INTO `notes` (`body`, `user_id`) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
        header('Location: /php-sandbox/php_dav/notes');
        exit();
    }
   
}



view("notes/create.view.php", [
    "heading" => "Create Note",
    "errors" => $errors
]);
