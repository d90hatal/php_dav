<?php

$routes = require BASE_PATH . "routes.php";

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require BASE_PATH . "views/{$code}.php";
    die();
}

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
routeToController($uri, $routes);