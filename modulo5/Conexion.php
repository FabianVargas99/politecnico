<?php
class Conexion
{
    protected $db;
    private $drive      =   'mysql';
    private $host       =   'localhost';
    private $dbname     =   'notas';
    private $usuario    =   'root';
    private $password   =   '';
    private $dsn        =   '';
    public function __construct()
    {
        try {
            $this->dsn = "{$this->drive}:dbname={$this->dbname};host={$this->host};";
            $db = new PDO($this->dsn, $this->usuario, $this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Error de conexion de la BD: " . $e->getMessage();
        }
    }
}
