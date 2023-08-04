<?php
$config = require ('config.php');
$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 5;

$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id']
    ])->findOrFail();

authorize(intval($note['user_id']) === $currentUserId);

require "views/layouts/app.blade.php";