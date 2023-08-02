<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function - refactor</title>
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

    function filter($items, $fn)
    {
        $newArr = [];

        foreach ($items as $item) {

            if ($fn($item)) {
                $newArr[] = $item;
            }
        }
        return $newArr;
    }

    $filteredByDirector = filter($movies, function ($item) {
        return $item['director'] === 'bong';
    });

    $filterLatestMovies = filter($movies, function ($item) {
        return $item['released'] >= 2010;
    });

    // built in 함수에 사실 있다 이게
    $built_in = array_filter($movies, function($item) {
        return $item['released'] >= 2000 && $item['released'] < 2010;
    });
    ?>

    <ul>
        <?php foreach ($built_in as $movie) : ?>
            <li>
                <a href="<?= $movie['purchase_url'] ?>">
                    <?= $movie['title'] ?> (<?= $movie['released'] ?>) made by <?= $movie['director'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>