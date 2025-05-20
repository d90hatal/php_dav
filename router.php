<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];




$routes = [
    "/php-sandbox/php_dav/" => "./controlers/index.php",
    "/php-sandbox/php_dav/about" => "./controlers/about.php",
    "/php-sandbox/php_dav/notes" => "./controlers/notes.php",
    "/php-sandbox/php_dav/note" => "./controlers/note.php",
    "/php-sandbox/php_dav/contact" => "./controlers/contact.php",

];


function routeToController($uri, $routes)
{ {
        if (array_key_exists($uri, $routes)) {
            require $routes[$uri];
        } else {
            abort();
        }
    }
}

function abort($code = 404)
{
    require "./views/{$code}.php";
}

routeToController($uri, $routes);