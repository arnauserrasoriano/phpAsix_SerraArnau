<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<section class="flex justify-center items-center min-h-screen p-4">
    <div class="w-full max-w-lg bg-white shadow-lg py-6 px-6 sm:px-8 rounded-lg">
        <h1 class="text-xl sm:text-2xl font-bold text-center mb-6">Afegir nou software de hacking</h1>
        <form action="/software/store" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Tipus</label>
                <input type="text" name="type" id="type" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Descripció</label>
                <textarea name="description" id="description" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" rows="4" required></textarea>
            </div>
            <div class="mb-4">
                <label for="platform" class="block text-sm font-medium text-gray-700">Plataforma</label>
                <input type="text" name="platform" id="platform" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="license" class="block text-sm font-medium text-gray-700">Llicència</label>
                <input type="text" name="license" id="license" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="data" class="block text-sm font-medium text-gray-700">Data</label>
                <input type="date" name="data" id="data" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="official_url" class="block text-sm font-medium text-gray-700">URL oficial</label>
                <input type="text" name="official_url" id="official_url" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
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
        </form>
    </div>
</section>
</body>
</html>
