<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB ASIX</title>
        <style>
            /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }

        /* Barra de navegación */
        nav {
            background-color: #007bff;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            padding: 15px;


        }

        nav a {
            color: white;
            margin: 0 15px;
            font-size: 1.1em;
            text-decoration: none;
            text-transform: uppercase;
        }

        nav a:hover {
            text-decoration: underline;
        }

        nav a.active {
            font-weight: bold;
            background-color: #0056b3; /* Fondo resaltado */
            padding: 5px 10px;
            border-radius: 4px;
        }

        /* Estilos para la tabla */
        .container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Estilos para las acciones */
        .actions a {
            margin-right: 10px;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }

        .actions a:hover {
            background-color: #0056b3;
        }

        /* Crear nuevo enlace */
        .create-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }

        .create-link:hover {
            background-color: #218838;
        }

        /* Pie de página */
        footer {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Estilos responsivos */
            <!DOCTYPE html>
            <html lang="es">
            <head>
            <meta charset="UTF-8">
            <title>Demo ASIX</title>
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
            </head>
            <body class="bg-gray-100">
            <section>
            <div class="max-w-7xl mx-auto bg-white shadow-lg py-6 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold mb-6">Eliminar software:</h1>
            <div>
            <p class="text-lg mb-4">Estàs segur que vols eliminar aquest software? <strong><?= $hacking_software->name ?></strong>?</p>
            <form action="/software/delete/<?= $hacking_software->id ?>" method="POST" class="flex items-center space-x-4">
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Eliminar</button>
            <a href="/software" class="text-blue-500 hover:text-blue-700">Cancel·lar</a>
            </form>
            </div>
            </div>
            </section>
            </body>
            </html>

        </style>
</head>
<body>

<!-- Barra de navegación -->
<nav>
    <a href="/home" id="nav-home">Inici</a>
    <a href="/books" id="nav-books">Llibres</a>
    <a href="/software" id="nav-software" class="active">Software</a>
</nav>

<!-- Contenido principal -->
<div class="container">
    <h2>Llista de Programari de Hacking:</h2>
    <a href="/software/create" class="create-link">Afegir Nou Programari</a>

    <div>
        <table>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Tipus</th>
                <th scope="col">Descripció</th>
                <th scope="col">Plataforma</th>
                <th scope="col">Llicència</th>
                <th scope="col">Data</th>
                <th scope="col">URL Oficial</th>
                <th scope="col">Accions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($software as $hacking_software): ?>
            <tr>
                <td><?=$hacking_software->id;?></td>
                <td><?=$hacking_software->name;?></td>
                <td><?=$hacking_software->type;?></td>
                <td><?=$hacking_software->description;?></td>
                <td><?=$hacking_software->platform;?></td>
                <td><?=$hacking_software->license;?></td>
                <td><?=$hacking_software->data;?></td>

                <td><a href="<?=$hacking_software->official_url;?>" target="_blank">Veure</a></td>
                <td class="actions">
                    <a href="/software/edit/<?= $hacking_software->id?>" class="edit">Editar</a>
                    <a href="/software/destroy/<?= $hacking_software->id?>" class="delete">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Pie de página -->
<footer>
    <p>&copy; 2024 ASIX. Tots els drets reservats.</p>
</footer>
<script>
    // Obtener la URL actual
    const currentPath = window.location.pathname;

    // Función para eliminar la clase 'active' de todos los enlaces
    function removeActiveClass() {
        const links = document.querySelectorAll('nav a');
        links.forEach(link => link.classList.remove('active'));
    }

    // Añadir la clase 'active' al enlace correspondiente
    function setActiveLink() {
        removeActiveClass();
        if (currentPath.includes('/home')) {
            document.getElementById('nav-home').classList.add('active');
        } else if (currentPath.includes('/books')) {
            document.getElementById('nav-books').classList.add('active');
        } else if (currentPath.includes('/software')) {
            document.getElementById('nav-software').classList.add('active');
        }
    }

    // Llamar a la función para establecer el enlace activo
    setActiveLink();
</script>