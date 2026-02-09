<?php
require_once '../app/controllers/CitaController.php';

$controller = new CitaController();

$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)) {
    $controller->$action();
} else {

    echo "Acción no encontrada: " . htmlspecialchars($action);
}