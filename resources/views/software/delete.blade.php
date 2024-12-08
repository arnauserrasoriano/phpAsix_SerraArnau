<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>WEB ASIX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<section>
    <div class="max-w-7xl mx-auto bg-white shadow-lg py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold mb-6">Eliminar software:</h1>
        <div>
            <p class="text-lg mb-4">Estàs segur que vols eliminar aquest software? <strong><?= $hacking_software->name ?></strong>?</p>
            <form action="/software/destroy/<?= $hacking_software->id ?>" method="POST" class="flex items-center space-x-4">
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Eliminar</button>
                <a href="/software" class="text-blue-500 hover:text-blue-700">Cancel·lar</a>
            </form>
        </div>
    </div>
</section>
</body>
</html>
