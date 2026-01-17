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