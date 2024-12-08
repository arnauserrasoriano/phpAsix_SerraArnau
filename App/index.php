<?php

use Core\App;

    $greeting = "Hello";

    $a = 5;
    $b = 2;

    //consultem els registres e la taula books de la base de dades
try {
    $books = App::get('database')->selectAll('books');
} catch (Exception $e) {

}

try {
    $books = App::get('database')->selectAll('hacking_software');
} catch (Exception $e) {

}


//cridem a la vista
    require '../resources/views/index.blade.php';

