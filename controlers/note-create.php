<?php

$heading = "Create Note";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd("your form has been submitted");
}

require "views/note-create.view.php";