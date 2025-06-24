<?php

$config = require "config.php";

$db = new Database($config['database']);

$heading ="my notes" ;

$notes = $db->query("SELECT * FROM notes ")->get();

require "views/notes.view.php";