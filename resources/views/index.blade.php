<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
</head>
<body>
<h1>
    <?php
    echo $greeting . " World!<br>";
    echo "Resultat: " . $a + $b . "<br>";
    ?>
</h1>
<p>Llista de llibres:</p>
<ul>
    <?php foreach($books as $book) : ?>
    <li><?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?></li>
    <?php endforeach; ?>
</ul>
<p>Llista de llibres de Tolkien en filtro:</p>
<ul>
    <?php foreach($books as $book) : ?>
        <?php if ($book['author'] === "J. R. R. Tolkien") : ?>
    <li><?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?></li>
    <?php endif;?>
    <?php endforeach; ?>
</ul>
<p>Llista de llibres de Tolkien en funcions:</p>
<ul>
    <?php foreach(filterByAuthor($books, "J. R. R. Tolkien") as $book) : ?>
    <li><?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?></li>
    <?php endforeach; ?>
</ul>
<p>Llista de llibres a partir del 1990:</p>
<ul>
    <?php foreach(filterByYear($books) as $book) : ?>
    <li><?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?></li>
    <?php endforeach; ?>
</ul>
<p>Llista de llibres del 1950 al 1996 en lambda:</p>
<ul>
    <?php foreach($filteredBooks as $book) : ?>
    <li><?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>