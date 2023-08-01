<?php

require 'function.php';
// require 'router.php';

// connect to our MYSQL database;

$dsn = "mysql:host=localhost;port=3306;dbname=my_php;charset=utf8mb4";
$pdo = new PDO($dsn, "root", 3329);

$statement = $pdo->prepare("select * from posts where id=1");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
dd($posts);

foreach ($posts as $post) { 
    echo "<li>" . $post['title'] . "</li>";
    
}

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