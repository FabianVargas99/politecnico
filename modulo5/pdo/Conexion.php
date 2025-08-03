<?php
class Conexion
{
    protected $db;
    private $drive = 'mysql';
    private $host = 'localhost';
    private $dbname = 'notas';
    private $usuario = 'root';
    private $password = '';

    public function __construct()
    {
        try {
            $db = new PDO("{$this->drive}:host={$this->host}; dbname={$this->dbname}", $this->usuario, $this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conectado...<br>";
            return $db;
        } catch (PDOException $e) {
            echo "Error de conexion de la BD: " . $e->getMessage();
        }
    }
}
