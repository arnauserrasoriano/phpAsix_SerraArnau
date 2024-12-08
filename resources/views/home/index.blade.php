<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web avançada ASIX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- FontAwesome para iconos -->
    <style>
        /* Estilo general */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #e0efff; /* Fondo azul suave */
            color: #333;
        }

        /* Barra de navegación */
        nav {
            background-color: #007bff;
            padding: 15px;
            text-align: center;
            border-radius: 5px;

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
            margin-top: 20px;
            text-align: center;
        }

        /* Estilos para la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
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

        /* Sección central */
        .center-section {
            background-color: #007bff; /* Fondo azul */
            color: white;
            padding: 50px 20px;
            margin-bottom: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .center-section h2 {
            margin: 0;
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra para el texto */
        }

        .center-section p {
            font-size: 1.4rem;
            margin-top: 20px;
        }

        /* Sección adicional para mayor detalle */
        .center-section .extra-info {
            margin-top: 30px;
            background-color: rgba(0, 86, 179, 0.8); /* Fondo azul semitransparente */
            padding: 20px;
            border-radius: 5px;
        }

        .center-section .extra-info h3 {
            font-size: 1.8rem;
            font-weight: bold;
        }

        .center-section .extra-info p {
            font-size: 1.1rem;
        }

        footer {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        /* Iconos en el texto */
        .icon-container {
            margin-top: 20px;
            text-align: left;
            font-size: 1.2rem;
        }

        .icon-container i {
            margin-right: 10px;
            color: #28a745;
        }

        .info-section {
            background-color: #f7f9fc; /* Fondo gris suave */
            padding: 40px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .info-section h3 {
            font-size: 2rem;
            color: #007bff;
        }

        .info-section p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>

<!-- Barra de navegació -->
<nav>
    <!-- Enllaç a la pàgina d'inici -->
    <a href="/home" id="nav-home">Inici</a>
    <!-- Enllaç a la secció de llibres -->
    <a href="/books" id="nav-software">Llibres</a>
    <!-- Enllaç a la secció de software -->
    <a href="/software" id="nav-books">Software</a>
</nav>

<!-- Contenidor principal -->
<div class="container">
    <h2>Pàgina Principal</h2>

    <!-- Secció central amb informació principal -->
    <div class="center-section">
        <h2>Benvingut a la web d'ASIX</h2>
        <!-- Breu descripció dels recursos disponibles -->
        <p>Explora les nostres eines de ciberseguretat, escaneja xarxes, explota vulnerabilitats i aprèn sobre l'anonimat en línia.</p>

        <!-- Informació addicional sobre l'objectiu d'estudiar ASIX -->
        <div class="extra-info">
            <h3>¿Per què estudiar ASIX?</h3>
            <p>El cicle formatiu d'ASIX (Administració de Sistemes Informàtics en Xarxa) us proporciona els coneixements necessaris per administrar xarxes, servidors i sistemes operatius. A través d'aquest curs aprendràs com assegurar entorns digitals, mantenir la infraestructura tecnològica d'una organització i molt més.</p>
        </div>

        <!-- Llista amb icones informatives -->
        <div class="icon-container">
            <i class="fas fa-laptop-code"></i> Aprèn Ciberseguretat
            <br>
            <i class="fas fa-network-wired"></i> Gestió de Xarxes
            <br>
            <i class="fas fa-shield-alt"></i> Protegeix Sistemes
        </div>
    </div>

    <!-- Secció d'informació addicional sobre el cicle d'ASIX -->
    <div class="info-section">
        <h3>Què és ASIX?</h3>
        <p>El cicle formatiu d'ASIX és una formació essencial per a aquells que desitgen especialitzar-se en l'àmbit de la ciberseguretat i l'administració de xarxes. Amb una orientació pràctica i amb la possibilitat de treballar en projectes reals, aquest cicle prepara els estudiants per gestionar infraestructures informàtiques, protegir les dades i assegurar sistemes davant d'amenaces informàtiques.</p>
        <p>A més de les habilitats tècniques, els estudiants desenvolupen capacitats en resolució de problemes, treball en equip i adaptabilitat davant de nous reptes tecnològics.</p>
    </div>
</div>

<!-- Peu de pàgina -->
<footer>
    <p>&copy; 2024 ASIX. Tots els drets reservats.</p>
</footer>

<script>
    // Obtenim la ruta actual de la pàgina
    const currentPath = window.location.pathname;

    // Funció per eliminar la classe 'active' de tots els enllaços
    function removeActiveClass() {
        const links = document.querySelectorAll('nav a');
        // Iterem per cada enllaç i eliminem la classe 'active'
        links.forEach(link => link.classList.remove('active'));
    }

    // Funció per afegir la classe 'active' a l'enllaç corresponent
    function setActiveLink() {
        removeActiveClass();
        // Comprovem la ruta i afegim la classe 'active' al botó corresponent
        if (currentPath.includes('/home')) {
            document.getElementById('nav-home').classList.add('active');
        } else if (currentPath.includes('/software')) {
            document.getElementById('nav-software').classList.add('active');
        } else if (currentPath.includes('/books')) {
            document.getElementById('nav-books').classList.add('active');
        }
    }

    // Cridem la funció per establir l'enllaç actiu
    setActiveLink();
</script>

</body>

</html>
