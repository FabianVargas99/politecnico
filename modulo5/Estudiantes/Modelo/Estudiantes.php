<?php
require_once "././BD/Conexion.php";
class Estudiantes extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }
}
?>