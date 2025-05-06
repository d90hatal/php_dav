<?php

require "functions.php";

$uri = $_SERVER["REQUEST_URI"];


if ($uri === "/php-sandbox/php_dav/") {
    require "./controlers/index.php";
} else if ($uri === "/php-sandbox/php_dav/about") {
    require "./controlers/about.php";
} else if ($uri === "/php-sandbox/php_dav/contact") {
    require "./controlers/contact.php";
} else {
    echo "Page not found: " . $_SERVER["REQUEST_URI"];
}
