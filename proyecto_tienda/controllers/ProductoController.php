<?php
require_once '../models/Producto.php';

class ProductoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Producto();
    }

    public function index() {
        $productos = $this->modelo->listar();
        require_once '../views/listar.php';
    }

    public function create() {
        require_once '../views/crear.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = trim($_POST['nombre']);
            $descripcion = $_POST['descripcion'];
            $precio = (float)$_POST['precio'];
            $stock = (int)$_POST['stock'];

            // VALIDACIONES
            $errores = [];
            if (strlen($nombre) < 3) $errores[] = "El nombre es obligatorio (mín. 3 caracteres).";
            if ($precio <= 0) $errores[] = "El precio debe ser mayor a 0.";
            if ($stock < 0) $errores[] = "El stock no puede ser negativo.";

            if (empty($errores)) {
                $this->modelo->guardar($nombre, $descripcion, $precio, $stock);
                header("Location: index.php?controller=producto&action=index");
            } else {
                // Si hay errores, volvemos a la vista de crear enviando los fallos
                require_once '../views/crear.php';
            }
        }
    }

    public function edit() {
        $id = $_GET['id'];
        $producto = $this->modelo->obtenerPorId($id);
        require_once '../views/editar.php';
    }

    public function update() {
        $id = $_GET['id'];
        $nombre = trim($_POST['nombre']);
        $precio = (float)$_POST['precio'];
        $stock = (int)$_POST['stock'];

        // Repetimos validaciones similares al store...
        if (strlen($nombre) >= 3 && $precio > 0 && $stock >= 0) {
            $this->modelo->actualizar($id, $nombre, $_POST['descripcion'], $precio, $stock);
            header("Location: index.php?controller=producto&action=index");
        } else {
            $errores = ["Datos inválidos, verifica los campos."];
            $producto = $this->modelo->obtenerPorId($id); // Recargar datos
            require_once '../views/editar.php';
        }
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $this->modelo->eliminar($_GET['id']);
        }
        header("Location: index.php?controller=producto&action=index");
    }
}