<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
    <title>WEB ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<section class="flex justify-center items-center min-h-screen px-4">
    <div class="w-full max-w-md bg-white shadow-lg py-6 px-6 sm:px-8 rounded-lg">
        <h2 class="text-xl sm:text-2xl font-bold text-center mb-4">Afegir nou llibre</h2>
        <form action="/books/store" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-sm sm:text-base font-medium text-gray-700">Títol</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 min-h-[48px]" required>
            </div>
            <div class="mb-4">
                <label for="author" class="block text-sm sm:text-base font-medium text-gray-700">Autor</label>
                <input type="text" name="author" id="author" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 min-h-[48px]" required>
            </div>
            <div class="mb-4">
                <label for="releaseYear" class="block text-sm sm:text-base font-medium text-gray-700">Any</label>
                <input type="number" name="releaseYear" id="releaseYear" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 min-h-[48px]" required>
            </div>
            <div class="flex justify-between items-center space-x-2">
                <!-- Botón Salir -->
                <a href="/books" class="w-1/2 text-center bg-red-500 text-white font-medium text-sm sm:text-base px-4 py-2 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    Sortir
                </a>
                <!-- Botón Crear -->
                <button type="submit" class="w-1/2 bg-blue-500 text-white font-medium text-sm sm:text-base px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Crear
                </button>
            </div>
        </form>
    </div>
</section>
</body>
</html>
