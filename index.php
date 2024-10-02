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
            ?>
        </h1>
        <p>Llista de llibres:</p>
        <ul>
            <?php foreach($books as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>