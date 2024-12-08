<?php
//fitxer per definir les rutes
return [
    '/' => '../App/Controllers/HomeController.php@index',
    '/home' => '../App/Controllers/HomeController.php@index',
    '/index' => '../App/Controllers/HomeController.php@index',
    '/index.php' => '../App/Controllers/HomeController.php@index',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',

    '/software' => '../App/Controllers/SoftwareController.php@index',
    '/software/create' => '../App/Controllers/SoftwareController.php@create',
    '/software/store' => '../App/Controllers/SoftwareController.php@store',
    '/software/edit/{id}' => '../App/Controllers/SoftwareController.php@edit',
    '/software/update/{id}' => '../App/Controllers/SoftwareController.php@update',
    '/software/delete/{id}' => '../App/Controllers/SoftwareController.php@delete',
    '/software/destroy/{id}' => '../App/Controllers/SoftwareController.php@destroy',
    '/software/confirm-delete/{id}' => '../App/Controllers/SoftwareController.php@confirmDelete',
    '/software/show/{id]' => '../App/Controllers/SoftwareController.php@show',

];