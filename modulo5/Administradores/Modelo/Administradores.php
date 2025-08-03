<?php
require_once "././Conexion.php";
class Administradores extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }
}
