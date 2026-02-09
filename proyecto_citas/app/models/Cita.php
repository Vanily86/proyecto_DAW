<?php
require_once '../app/config/db.php';

class Cita {
    private $db;

    public function __construct() {
        $this->db = Database::conectar();
    }

    public function listar() {
        $sql = "SELECT * FROM citas ORDER BY fecha ASC, hora ASC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($paciente, $especialidad, $fecha, $hora, $motivo) {
        $sql = "INSERT INTO citas (paciente, especialidad, fecha, hora, motivo) VALUES (?, ?, ?, ?, ?)";
        return $this->db->prepare($sql)->execute([$paciente, $especialidad, $fecha, $hora, $motivo]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM citas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $paciente, $especialidad, $fecha, $hora, $motivo) {
        $sql = "UPDATE citas SET paciente=?, especialidad=?, fecha=?, hora=?, motivo=? WHERE id=?";
        return $this->db->prepare($sql)->execute([$paciente, $especialidad, $fecha, $hora, $motivo, $id]);
    }

    public function eliminar($id) {
        return $this->db->prepare("DELETE FROM citas WHERE id = ?")->execute([$id]);
    }
}