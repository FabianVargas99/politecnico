<?php
require_once "../../BD/Conexion.php";
class Materias extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($materia)
    {
        $statement = $this->db->prepare("INSERT INTO materias (MATERIA) VALUES (:materia)");
        $statement->bindParam(':materia',    $materia);
        if ($statement->execute()) {
            header('location: ../Vistas/index.php');
        } else {
            header('location: ../Vistas/add.php');
        }
    }

    public function get()
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM materias");
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($id)
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM materias WHERE ID_MATERIA = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($id, $materia)
    {
        $query = "UPDATE materias SET MATERIA = :materia WHERE ID_USUARIO = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id',    $id);
        $statement->bindParam(':materia',    $materia);
        if ($statement->execute()) {
            header('location: ../Vistas/index.php');
        } else {
            header('location: ../Vistas/edit.php');
        }
    }

    public function delete($id)
    {
        $statement = $this->db->prepare("DELETE FROM materias WHERE ID_MATERIA = :id");
        $statement->bindParam(':id', $id);
        if ($statement->execute()) {
            header('location: ../Vistas/index.php');
        } else {
            header('location: ../Vistas/delete.php');
        }
    }
}
?>