<?php
require_once "././Conexion.php";
session_start();
class Usuarios extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function login($usuario, $password){
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :usuario AND PASSWORD = :password");
        $query->bindParam(':usuario', $usuario);
        $query->bindParam(':password', $password);
        $query->execute();
        if ($query->rowCount() == 1) {
            $result = $query->fetch();
            $_SESSION['NOMBRE'] = $result["NOMBRE"];
            $_SESSION['APELLIDO'] = $result["APELLIDOS"];
            $_SESSION['ID'] = $result["ID_USUARIO"];
            $_SESSION['PERFIL'] = $result["PERFIL"];
            return true;
        }
        return false;
    }

    public function addUser($nombre, $apellido, $usuario, $password, $perfil, $estado)
    {
        $query = $this->db->prepare("INSERT INTO usuarios (NOMBRE, APELLIDO, USUARIO, PASSWORD, PERFIL, ESTADO) VALUES (:nombre, :apellido, :usuario, :password, :perfil, :estado)");
        $query->bindParam(':nombre',    $nombre);
        $query->bindParam(':apellido',  $apellido);
        $query->bindParam(':usuario',   $usuario);
        $query->bindParam(':password',  $password);
        $query->bindParam(':perfil',    $perfil);
        $query->bindParam(':estado',    $estado);
        if ($query->execute()) {
            echo "Registrado Con éxito<br>";
        } else {
            echo "Error al registrar usuario<br>";
        }
    }
    public function updateUser($id, $nombre, $apellido, $usuario, $password, $perfil, $estado)
    {
        $query = $this->db->prepare("UPDATE usuarios SET NOMBRE = :nombre, APELLIDO = :apellido, USUARIO = :usuario, PASSWORD = :password, PERFIL = :perfil, ESTADO = :estado WHERE ID_USUARIO = :id");
        $query->bindParam(':id',        $id);
        $query->bindParam(':nombre',    $nombre);
        $query->bindParam(':apellido',  $apellido);
        $query->bindParam(':usuario',   $usuario);
        $query->bindParam(':password',  $password);
        $query->bindParam(':perfil',    $perfil);
        $query->bindParam(':estado',    $estado);
        if ($query->execute()) {
            echo "Actualizado Con éxito<br>";
        } else {
            echo "Error al actualizar usuario<br>";
        }
    }
    public function getUsuarios()
    {
        $rows = null;
        $query = $this->db->prepare("SELECT ID_USUARIO, NOMBRE, APELLIDO, USUARIO, PASSWORD, PERFIL, ESTADO FROM usuarios");
        $query->execute();
        while ($result = $query->fetch()) {
            $rows[] = $result;
        }
        return $rows;
    }
    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM usuarios WHERE ID_USUARIO = :id");
        $query->bindParam(':id', $id);
        if ($query->execute()) {
            echo "Eliminado exitosamente.";
        } else {
            echo "Ocurrio un Error al eliminar.";
        }
    }
}
