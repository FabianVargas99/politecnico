<?php
require_once "../../BD/Conexion.php";
class Estudiantes extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function add($nombre, $apellido, $documento, $correo, $materia, $docente, $promedio, $fecha)
    {
        $statement = $this->db->prepare("INSERT INTO estudiantes (NOMBRE, APELLIDO, USUARIO, DOCUMENTO, DOCENTE, PROMEDIO, FECHA_REGISTRO) VALUES (:nombre, :apellido, :documento, :correo, :materia, :docente, :promedio, :fecha)");
        $statement->bindParam(':nombre',    $nombre);
        $statement->bindParam(':apellido',  $apellido);
        $statement->bindParam(':documento', $documento);
        $statement->bindParam(':correo',    $correo);
        $statement->bindParam(':materia',   $materia);
        $statement->bindParam(':docente',   $docente);
        $statement->bindParam(':promedio',  $promedio);
        $statement->bindParam(':fecha',     $fecha);
        if ($statement->execute()) {
            header('location: ./Vistas/index.php');
        } else {
            header('location: ./Vistas/add.php');
        }
    }

    public function get()
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM estudiantes");
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function getById($id)
    {
        $rows = null;
        $statement = $this->db->prepare("SELECT * FROM estudiantes WHERE ID_ESTUDIANTE = :id");
        $statement->bindParam(':id', $id);
        $statement->execute();
        while ($result = $statement->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }

    public function update($id, $nombre, $apellido, $documento, $correo, $materia, $docente, $promedio, $fecha)
    {
        $query = "UPDATE estudiantes SET NOMBRE = :nombre, APELLIDO = :apellido, DOCUMENTO = :documento, CORREO = :correo,  MATERIA = :materia, DOCENTE = :docente, PROMEDIO = :promedio, FECHA_REGISTRO = :fecha WHERE ID_ESTUDIANTE = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id',        $id);
        $statement->bindParam(':nombre',    $nombre);
        $statement->bindParam(':apellido',  $apellido);
        $statement->bindParam(':documento', $documento);
        $statement->bindParam(':correo',    $correo);
        $statement->bindParam(':materia',   $materia);
        $statement->bindParam(':docente',   $docente);
        $statement->bindParam(':promedio',  $promedio);
        $statement->bindParam(':fecha',     $fecha);
        if ($statement->execute()) {
            header('location: ./Vistas/index.php');
        } else {
            header('location: ./Vistas/edit.php');
        }
    }

    public function delete($id)
    {
        $statement = $this->db->prepare("DELETE FROM estudiantes WHERE ID_ESTUDIANTE = :id");
        $statement->bindParam(':id', $id);
        if ($statement->execute()) {
            header('location: ./Vistas/index.php');
        } else {
            header('location: ./Vistas/delete.php');
        }
    }
}
?>