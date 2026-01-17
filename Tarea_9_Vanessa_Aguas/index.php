<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Institución Educativa - Tarea PHP</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 20px; }
        nav { background: #f4f4f4; padding: 10px; margin-bottom: 20px; }
        nav a { margin-right: 15px; text-decoration: none; color: blue; }
        .resultado { background: #e7f3fe; border-left: 6px solid #2196F3; padding: 10px; margin: 20px 0; }
        form { background: #f9f9f9; padding: 15px; border: 1px solid #ccc; width: 300px; }
        label { display: block; margin-top: 10px; }
    </style>
</head>
<body>

    <h1>Portal Educativo</h1>

    <nav>
        <a href="index.php?seccion=Inicio">Inicio</a>
        <a href="index.php?seccion=Unidades">Unidades</a>
        <a href="index.php?seccion=Contacto">Contacto</a>
    </nav>

    <?php
    // Lógica para capturar GET
    if (isset($_GET['seccion'])) {
        $seccion = $_GET['seccion'];
        echo "<div class='resultado'><h3>Sección seleccionada: $seccion</h3></div>";
    }
    ?>

    <hr>

    <h2>Formulario de Contacto</h2>
    <form action="index.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <br><br>
        <button type="submit">Enviar Datos</button>
    </form>

    <?php
    // Lógica para capturar POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];

        echo "<div class='resultado'>";
        echo "<h3>Datos recibidos por POST:</h3>";
        echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
        echo "Email: " . htmlspecialchars($email);
        echo "</div>";
    }
    ?>

</body>
</html>