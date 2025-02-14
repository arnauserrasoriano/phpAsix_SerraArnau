<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo ASIX - Llibres</title>
    <style>
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
        @media screen and (max-width: 768px) {
            nav {
                padding: 10px 5px;

            }

            nav a {
                font-size: 1em;
                margin: 0 10px;
            }

            table {
                font-size: 0.9em;
            }

            table th, table td {
                padding: 8px;
            }

            .create-link {
                display: block;
                width: 100%;
                text-align: center;
                padding: 12px;
            }

            .actions a {
                display: block;
                width: 100%;
                text-align: center;
                padding: 12px;
                margin-bottom: 5px;
            }

            footer {
                padding: 15px;
                font-size: 0.9em;
            }
        }

        @media screen and (max-width: 480px) {
            nav a {
                font-size: 0.9em;
            }

            table th, table td {
                padding: 6px;
            }

            .actions a {
                padding: 10px;
                font-size: 0.9em;
            }

            .create-link {
                padding: 15px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

<!-- Barra de navegación -->
<nav>
    <a href="/home" id="nav-home">Inici</a>
    <a href="/books" id="nav-books" class="active">Llibres</a>
    <a href="/software" id="nav-software">Software</a>
</nav>

<!-- Contenido principal -->
<div class="container">
    <h2>Llista de llibres:</h2>
    <a href="/books/create" class="create-link">Crear Llibre</a>

    <div>
        <table>
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Año</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?=$book->id;?></td>
                <td><?=$book->name;?></td>
                <td><?=$book->author;?></td>
                <td><?=$book->releaseYear;?></td>
                <td class="actions">
                    <a href="/books/edit/<?= $book->id?>" class="edit">Editar</a>
                    <a href="/books/destroy/<?= $book->id?>" class="delete">Eliminar</a>
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

</body>
</html>
