<?php
    $greeting = "Hello";

    $a = 5;
    $b = 2;

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

