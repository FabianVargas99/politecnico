<?php
require_once "././Conexion.php";
class Docentes extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }
}
