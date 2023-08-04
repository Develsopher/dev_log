<?php

$routes = require('routes.php');

// path와 query 나눠주는 역할
// path뒤에 query가 붙어도 정상적으로 페이지 랜딩 유도
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
// dd($uri);
function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}


routeToController($uri, $routes);