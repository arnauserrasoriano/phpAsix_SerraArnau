<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Llibre - WEB ASIX</title>
    <style>
        /* Reutilizar el estilo existente */
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;

        }

        /* Barra de navegación */
        nav {
            background-color: #007bff;
            text-align: center;
            border-radius: 5px;
            padding: 15px;
            margin: 20px;


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
            background-color: #0056b3;
            padding: 5px 10px;
            border-radius: 4px;
        }

        /* Contenedor principal */
        .container {
            margin: 40px auto;
            padding: 20px;
            width: 80%;
            max-width: 800px;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;

        }

        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }

        /* Estilo del formulario */
        form div {
            margin-bottom: 20px;
        }

        label {
            font-size: 1.1em;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="number"], input[type="url"], textarea, input[type="date"] {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="text"]:focus, input[type="number"]:focus, input[type="url"]:focus, textarea:focus, input[type="date"]:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            font-size: 1.2em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Enlace de regreso */
        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            text-align: center;
            width: 100%;
        }

        .back-link:hover {
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

        <style>
             /* Estilos responsivos para smartphones */
        @media screen and (max-width: 768px) {
            /* Ajustar el contenedor principal */
            .container {
                width: 95%; /* Más pequeño para pantallas pequeñas */
                padding: 15px;
            }

            /* Reducir el tamaño de la barra de navegación */
            nav {
                padding: 10px;
                font-size: 0.9em;
            }

            nav a {
                display: block; /* Los enlaces se muestran en columna */
                margin: 10px 0;
                font-size: 1em;
            }

            /* Reducir los márgenes y fuentes de los formularios */
            form div {
                margin-bottom: 15px;
            }

            input[type="text"], input[type="number"], input[type="url"], textarea, input[type="date"] {
                font-size: 0.9em; /* Reducir ligeramente el tamaño de fuente */
                padding: 8px;
            }

            label {
                font-size: 1em; /* Ajustar el tamaño de la etiqueta */
            }

            button {
                font-size: 1em; /* Reducir tamaño del botón */
                padding: 10px;
            }

            /* Ajustar el enlace de regreso */
            .back-link {
                font-size: 1em;
                padding: 10px 12px;
            }

            /* Footer adaptado */
            footer {
                font-size: 0.9em;
                padding: 8px;
            }
        }

        @media screen and (max-width: 480px) {
            /* Contenedor más pequeño aún para pantallas pequeñas */
            .container {
                width: 90%;
            }

            nav a {
                font-size: 0.85em;
            }

            button {
                font-size: 0.9em;
                padding: 8px;
            }

            input[type="text"], input[type="number"], input[type="url"], textarea, input[type="date"] {
                padding: 6px; /* Reducir padding */
                font-size: 0.85em;
            }

            footer {
                font-size: 0.8em;
            }
        }
    </style>

    </style>
</head>
<body>

<!-- Barra de navegació -->
<nav>
    <a href="/home" id="nav-home">Inici</a>
    <a href="/books" id="nav-books" class="active">Llibres</a>
    <a href="/software" id="nav-software">Software</a>
</nav>

<!-- contingut principal -->
<div class="container">
    <h1>Editar llibre: <?= htmlspecialchars($book->name) ?></h1>
    <form action="/books/update/<?= htmlspecialchars($book->id) ?>" method="POST">
        <div>
            <label for="name">Títol</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($book->name) ?>" required>
        </div>
        <div>
            <label for="author">Autor</label>
            <input type="text" name="author" id="author" value="<?= htmlspecialchars($book->author) ?>" required>
        </div>
        <div>
            <label for="releaseYear">Any</label>
            <input type="number" name="releaseYear" id="releaseYear" value="<?= htmlspecialchars($book->releaseYear) ?>" required>
        </div>
        <button type="submit">Guardar cambis</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 ASIX. Tots els drets reservats.</p>
</footer>

<script>
    // Mismo script para manejar el enlace activo
    const currentPath = window.location.pathname;

    function removeActiveClass() {
        const links = document.querySelectorAll('nav a');
        links.forEach(link => link.classList.remove('active'));
    }

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

    setActiveLink();
</script>

</body>
</html>
