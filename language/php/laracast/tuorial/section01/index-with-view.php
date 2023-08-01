<!-- html코드랑 분리를 해준다.  -->

<?php

$movies = [
    [
        'title' => 'once upon a time',
        'released' => 1999,
        'director' => 'taylers',
        'purchase_url' => 'https://google.com'
    ],
    [
        'title' => 'the wind',
        'released' => 1985,
        'director' => 'maroon',
        'purchase_url' => 'https://google.com'
    ],
    [
        'title' => 'old boy',
        'released' => 2003,
        'director' => 'bong',
        'purchase_url' => 'https://google.com'
    ],
    [
        'title' => 'inception',
        'released' => 2010,
        'director' => 'christoper',
        'purchase_url' => 'https://naver.com'
    ],
    [
        'title' => 'joker',
        'released' => 2019,
        'director' => 'idontknow',
        'purchase_url' => 'https://naver.com'
    ],
];


// build-in function 활용하기
$filteredMovies = array_filter($movies, function ($movie) {
    return $movie['released'] > 2000;
});

require "index.view.php";