<?php

require 'function.php';
// require 'router.php';
require 'Database.php';

$config = require ('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];

// to protect malicious sql injesction sol 01
$posts = $db->query("select * from posts where id = ?", [$id])->fetch();
// sol2
// $posts = $db->query("select * from posts where id = :id", [':id' => $id])->fetch();

dd($posts);
// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] ."</li>";
// }


// #################// #################// #################// #################// #################// #################
// class Person
// {
//     public $name;
//     public $age;

//     public function breathe()
//     {
//         echo $this->name . " is breathing";
//     }
// }


// $person = new Person();

// $person->name =  'John Doe';
// $person->age = 25;

// dd($person->breathe());