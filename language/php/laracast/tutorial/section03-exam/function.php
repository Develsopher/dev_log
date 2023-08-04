<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($status_code = 404) {
    // user experience 고려
    http_response_code($status_code);

    require "views/layouts/{$status_code}.php";

    die();
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if(! $condition) {
        abort($status);
    }
}

function redirect($url) {
    header('Location: '.$url);
    die();
}