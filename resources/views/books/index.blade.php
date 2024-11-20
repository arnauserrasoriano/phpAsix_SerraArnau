<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
</head>
<body>
<p>Llista de llibres:</p>
<a href="/books/create">Crear Llibre</a>
<div>
    <table>
        <thead>
        <tr>
            <th scope="col">
                Id
            </th>
            <th scope="col">
                Title
            </th>
            <th scope="col">
                Author
            </th>
            <th scope="col">
                Year
            </th>
            <th scope="col">
                Actions
            </th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $book): ?>
        <tr>
            <td>
                    <?=$book->id;?>
            </td>
            <td>
                    <?=$book->name;?>
            </td>
            <td>
                    <?=$book->author;?>
            </td>
            <td>
                    <?=$book->releaseYear;?>
            </td>
            <td>
                <a href="/books/edit/<?= $book->id?>">Editar</a>
                <a href="/books/confirm-delete/<?= $book->id?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>