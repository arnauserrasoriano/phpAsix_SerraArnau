<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo ASIX</title>
</head>
<body>
<h1>Afegir nou llibre</h1>
<div>
    <form action="/books/store" method="POST">
        <div>
            <label for="name"></label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="author"></label>
            <input type="text" name="author" id="author">
        </div>
        <div>
            <label for="releaseYear"></label>
            <input type="number" name="releaseYear" id="releaseYear">
        </div>
        <button type="submit">Crear</button>
    </form>
</div>
</body>
</html>