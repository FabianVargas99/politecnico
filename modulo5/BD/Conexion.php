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
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            /**
             * setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
             * me permitira manejar los fetch como objetos, accediendo a las 
             * propiedades como se hace con los objetos "obeto->propiedad"
             * Ej: $user->NOMBRE; en vez de $user['NOMBRE'];
             */
            return $db;
        } catch (PDOException $e) {
            echo "Error de conexion de la BD: " . $e->getMessage();
        }
    }
}
