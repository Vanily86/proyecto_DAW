<?php
class Database {
    private static $host = "localhost";
    private static $db_name = "gestion_citas";
    private static $user = "root";
    private static $password = "";

    public static function conectar() {
        try {
            $conexion = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name . ";charset=utf8", self::$user, self::$password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}