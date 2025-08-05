<?php
require_once "././BD/Conexion.php";
class Docentes extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($nombre, $apellido, $usuario, $password)
    {
        $statement = $this->db->prepare("INSERT INTO usuarios (NOMBRE, APELLIDO, USUARIO, PASSWORD, PERFIL, ESTADO) VALUES (:nombre, :apellido, :usuario, :password, 'Docente', 'Activo')");
        $statement->bindParam(':nombre',    $nombre);
        $statement->bindParam(':apellido',  $apellido);
        $statement->bindParam(':usuario',   $usuario);
        $statement->bindParam(':password',  $password);
        if ($statement->execute()) {
            header('location: ./Vistas/index.php');
        } else {
            header('location: ./Vistas/add.php');
        }
    }

    public function get()
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Docente'");
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($id)
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE PERFIL = 'Docente' AND ID_USUARIO = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($id, $nombre, $apellido, $usuario, $password, $estado)
    {
        $query = "UPDATE usuarios SET NOMBRE = :nombre, APELLIDO = :apellido, USUARIO = :usuario, PASSWORD = :password,  ESTADO = :estado WHERE ID_USUARIO = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id',    $id);
        $statement->bindParam(':nombre',    $nombre);
        $statement->bindParam(':apellido',  $apellido);
        $statement->bindParam(':usuario',   $usuario);
        $statement->bindParam(':password',  $password);
        $statement->bindParam(':estado',    $estado);
        if ($statement->execute()) {
            header('location: ./Vistas/index.php');
        } else {
            header('location: ./Vistas/edit.php');
        }
    }

    public function delete($id)
    {
        $statement = $this->db->prepare("DELETE FROM usuarios WHERE ID_USUARIO = :id");
        $statement->bindParam(':id', $id);
        if ($statement->execute()) {
            header('location: ./Vistas/index.php');
        } else {
            header('location: ./Vistas/delete.php');
        }
    }
}
