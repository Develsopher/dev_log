<?php

// path와 query 나눠주는 역할
// path뒤에 query가 붙어도 정상적으로 페이지 랜딩 유도
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// if ($uri === '/') {
//     require 'controllers/index.php';
// } elseif ($uri === '/about') {
//     require 'controllers/about.php';
// } elseif ($uri === '/contents') {
//     require 'controllers/contents.php';
// } elseif ($uri === '/mission') {
//     require 'controllers/mission.php';
// }

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contents' => 'controllers/contents.php',
    '/mission' => 'controllers/mission.php',
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}


routeToController($uri, $routes);