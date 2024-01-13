<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recommennd Books </h1>
    <ul>
        <?php $filtered = filter_books($books, 'Philip K. Dick');?>
        <?php foreach ($filtered as $book) : ?>
                <li>
                    <a href=<?=$book['purchaseUrl']?>>
                        <?= $book['name'] ?> (<?=$book['releaseYear']?>)
                    </a>
                </li>
        <?php endforeach ?>
    </ul>
</body>
</html>