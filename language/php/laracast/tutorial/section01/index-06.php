<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>
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

    // 변수에 (익명)함수를 할당하기 가능
    // more generic function 
    // function filter($items, $key, $value)
    // {
    //     $newArray = [];

    //     foreach ($items as $item) {
    //         if ($item[$key] >= $value) {
    //             $newArray[] = $item;
    //         }
    //     }

    //     return $newArray;
    // };

    function filter($items, $fn)
    {
        $newArray = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $newArray[] = $item;
            }
        }

        return $newArray;
    };

    // $filteredMovies = filter($movies, 'released', 2010);
    $filteredMovies2 = filter($movies, function ($movie) {
        return $movie['released'] < 2000;
    });
    // 조건식을 callback함수로 만듬으로서 more flexible


    // build-in function 활용하기
    $filteredMovies = array_filter($movies, function($movie) {
        return $movie['released'] > 2000;
    })
    ?>

    <ul>
        <?php foreach ($filteredMovies as $movie) : ?>
            <li>
                <a href="<?= $movie['purchase_url'] ?>">
                    <?= $movie['title']; ?> (<?= $movie['director'] ?>) - By <?= $movie['released'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>