<?php
abstract class Conexion {
    private static $db_host = 'localhost';
    private static $db_user = 'devjfelipe';
    private static $db_pass = 'prjctphp2024';
    protected $db_name = 'proyecto_php_db';
    protected $query;
    protected $rows = array();
    private $conn;

    private function abrir_conexion() {
        $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
    }

    private function cerrar_conexion() {
        $this->conn->close();
    }

    protected function ejecutar_query() {
        $this->abrir_conexion();
        $this->conn->query($this->query);
        $this->cerrar_conexion();
    }

    protected function obtener_resultados_query() {
        $this->abrir_conexion();
        $result = $this->conn->query($this->query);
        while ($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->cerrar_conexion();
        array_pop($this->rows);
    }
}
?>
