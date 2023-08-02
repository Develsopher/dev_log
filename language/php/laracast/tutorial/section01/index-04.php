<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Movies</h1>

    <?php
        $movies = [
            [
                'title' => 'old boy',
                'released' => '2003',
                'director' => 'bong',
                'purchase_url' => 'https://google.com'
            ],
            [
                'title' => 'inception',
                'released' => '2010',
                'director' => 'christoper',
                'purchase_url' => 'https://naver.com'
            ],
            [
                'title' => 'joker',
                'released' => '2019',
                'director' => 'idontknow',
                'purchase_url' => 'https://naver.com'
            ],
        ];
    ?>
    
    <p>
        <?php foreach($movies as $movie): ?>
            <li>
                <a href="<?= $movie['purchase_url']?>">
                    <?= $movie['title']?> made by <?=$movie['director']?>
                </a>
            </li>
        <?php endforeach;?>
    </p>
</body>
</html>
