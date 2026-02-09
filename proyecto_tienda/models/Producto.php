<?php
require_once '../config/db.php';

class Producto {
    private $db;

    public function __construct() {
        $this->db = Database::conectar();
    }

    public function listar() {
        $sql = "SELECT * FROM productos ORDER BY created_at DESC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $descripcion, $precio, $stock) {
        $sql = "INSERT INTO productos (nombre, descripcion, precio, stock, created_at) 
                VALUES (?, ?, ?, ?, NOW())";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $descripcion, $precio, $stock]);
    }

    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizar($id, $nombre, $descripcion, $precio, $stock) {
        $sql = "UPDATE productos SET nombre=?, descripcion=?, precio=?, stock=? WHERE id=?";
        return $this->db->prepare($sql)->execute([$nombre, $descripcion, $precio, $stock, $id]);
    }

    public function eliminar($id) {
        return $this->db->prepare("DELETE FROM productos WHERE id = ?")->execute([$id]);
    }
}