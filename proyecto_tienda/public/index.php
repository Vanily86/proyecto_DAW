<?php
// Cargar el controlador automáticamente
require_once '../controllers/ProductoController.php';

// Obtener parámetros de la URL, con valores por defecto
$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'producto';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Lógica de enrutamiento
if ($controllerName == 'producto') {
    $controller = new ProductoController();
    
    // Verificar que la acción (método) exista en el controlador
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        echo "Error 404: La acción '$action' no existe.";
    }
} else {
    echo "Error 404: Controlador no encontrado.";
}