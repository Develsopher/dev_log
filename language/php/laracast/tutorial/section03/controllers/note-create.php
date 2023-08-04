<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Create Note";


// data저장할때 스크립트 인젝션이 발생할 수 있다.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required';
    } 

    if (empty($errors)) {
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 5
        ]);
    }
}

require "views/layouts/app.blade.php";
