<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>


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