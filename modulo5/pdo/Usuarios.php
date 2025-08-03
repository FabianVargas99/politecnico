<?php
require_once "Conexion.php";
class Usuarios extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function addUser($id, $nombre, $apellido, $usuario, $password, $perfil, $estado)
    {
        $query = $this->db->prepare("INSERT INTO usuarios (ID_USUARIO, NOMBRE, APELLIDO, USUARIO, PASSWORD, PERFIL, ESTADO) VALUES (:id, :nombre, :apellido, :usuario, :pass, :perfil, :estado)");
        $query->bindParam(':id', $id);
        $query->bindParam(':nombre', $nombre);
        $query->bindParam(':apellido', $apellido);
        $query->bindParam(':usuario', $usuario);
        $query->bindParam(':pass', $password);
        $query->bindParam(':perfil', $perfil);
        $query->bindParam(':estado', $estado);
        if ($query->execute()) {
            echo "Registrado Con éxito";
        } else {
            echo "Error al registrar usuario";
        }
    }
    public function listar(){
        $rows = null;
        $query = $this->db->prepare("SELECT * FROM usuarios");
        $query->execute();
        while ($result = $query->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }
}
