<?php 

$config = require('config.php');
$db = new Database($config['database']);
$heading = 'Notes';

$notes = $db->query("select * from notes where user_id = 5")->findAll();

require "views/layouts/app.blade.php";