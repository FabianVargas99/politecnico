<?php
require_once "././Conexion.php";
class Materias extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }
}
?>