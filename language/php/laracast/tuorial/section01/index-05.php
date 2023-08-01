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

    function filterByYear($movies, $released = 2000)
    {
        $newArray = [];

        foreach ($movies as $movie) {
            if ($movie['released'] >= $released) {
                $newArray[] = $movie;
            }
        }

        return $newArray;
    }

    ?>

    <ul>
        <?php foreach (filterByYear($movies, 2010) as $movie) : ?>
            <li>
                <a href="<?= $movie['purchase_url'] ?>">
                    <?= $movie['title']; ?> (<?= $movie['director'] ?>) - By <?= $movie['released'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>