<?php

require "functions.php";
$heading ="home" ;

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}



require "views/index.view.php";