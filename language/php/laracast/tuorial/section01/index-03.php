<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
            "Book 1 AAAA",
            "Book 2 BBBB",
            "Book 3 CCCC",
            "Book 4 DDDD"
        ];
    ?>
    <ul>
        <?php foreach($books as $book) {
            echo "<li>{$book}💡</li>";
        }
        ?>
    </ul>

    <ul>
        <?php foreach($books as $book): ?>
            <li><?= $book?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>