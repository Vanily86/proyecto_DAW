<?php
require_once '../app/models/Cita.php';

class CitaController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Cita();
    }

    public function index() {
        $citas = $this->modelo->listar();
        require_once '../app/views/listar.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $paciente = trim($_POST['paciente'] ?? '');
            $especialidad = $_POST['especialidad'] ?? '';
            $fecha = $_POST['fecha'] ?? '';
            $hora = $_POST['hora'] ?? '';
            $motivo = $_POST['motivo'] ?? '';

        
            if (empty($paciente) || empty($fecha) || empty($hora)) {
                $error = "Todos los campos marcados son obligatorios.";
                require_once '../app/views/crear.php';
            } else {
                $this->modelo->guardar($paciente, $especialidad, $fecha, $hora, $motivo);
                header("Location: index.php?controller=cita&action=index");
            }
        }
    }
    
    public function delete() {
        $this->modelo->eliminar($_GET['id']);
        header("Location: index.php?controller=cita&action=index");
    }


public function edit() {
    $id = $_GET['id'];
    $cita = $this->modelo->obtenerPorId($id);
    require_once '../app/views/editar.php';
}

public function update() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_GET['id'];
        $paciente = trim($_POST['paciente']);
        $especialidad = $_POST['especialidad'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $motivo = $_POST['motivo'];

        if (strlen($paciente) < 5 || empty($fecha)) {
            $error = "Datos inválidos. El nombre debe ser real.";
            $cita = $this->modelo->obtenerPorId($id); 
            require_once '../app/views/editar.php';
        } else {
            $this->modelo->actualizar($id, $paciente, $especialidad, $fecha, $hora, $motivo);
            header("Location: index.php?action=index");
        }
    }
}

public function create() {
    require_once '../app/views/crear.php';
}


}