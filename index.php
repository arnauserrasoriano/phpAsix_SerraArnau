<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Demo ASIX</title>
    </head>
    <body>
        <h1>
            <?php
                $greeting = "Hello";
                echo $greeting . " World!<br>";

                 $a = 5;
                 $b = 2;
                 echo "Resultat: " . $a + $b . "<br>";
                 //Array
//                 $books = [
//                     "Dune",
//                     "The Hobbit",
//                     "The Lord of the Rings: The Fellowship of the Ring",
//                     "Harry Potter: The Philosopher's Stone",
//                     "A Song of Ice and Fire: A Game of Thrones",
//                     "Foundation",
//                     "Do Androids Dreams of Electric Sheep?"
//                 ];
                 $books = [
                         [
                             "name" => "Dune",
                             "author" => "Frank Herbert",
                             "releaseYear" => "1965"
                         ],
                     [
                         "name" => "The Hobbit",
                         "author" => "J. R. R. Tolkien",
                         "releaseYear" => "1937"
                     ],
                     [
                         "name" => "The Lord of the Rings: The Fellowship of the Ring",
                         "author" => "J. R. R. Tolkien",
                         "releaseYear" => "1954"
                     ],
                     [
                         "name" => "Harry Potter: The Philosopher's Stone",
                         "author" => "J. K. Rowling",
                         "releaseYear" => "1997"
                     ],
                     [
                         "name" => "A Song of Ice and Fire: A Game of Thrones",
                         "author" => "George R. R. Martin",
                         "releaseYear" => "1996"
                     ],
                     [
                         "name" => "Foundation",
                         "author" => "Isaac Asimov",
                         "releaseYear" => "1951"
                     ],
                     [
                         "name" => "Do Androids Dream of Electric Sheep?",
                         "author" => "Philip K. Dick",
                         "releaseYear" => "1968"
                     ],
                 ];
 //           echo $books[1];
//            var_dump($books);
                function filterByAuthor($books, $author) {
                    //creem array
                    $filteredAuthors = [];
                    //bucle
                    foreach ($books as $book) {
                        //mirem si es l'autor que toca
                        if ($book["author"] === $author) {
                            //posem dins l'array
                            $filteredAuthors[] = $book;
                        }
                    }
                    //retornem l'array
                    return $filteredAuthors;
                }

            function filterByYear($books) {
                //creem array
                $filteredBooks = [];
                //bucle
                foreach ($books as $book) {
                    //mirem si el llibre es posterior al 1990
                    if ($book["releaseYear"] >= 1990) {
                        //posem dins l'array
                        $filteredBooks[] = $book;
                    }
                }
                //retornem l'array
                return $filteredBooks;
            }

            //funcio lambda
            $filteredBooks = array_filter($books, function ($book) {
                return $book["releaseYear"] >= 1950 && $book["releaseYear"] <= 1996;
            });
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