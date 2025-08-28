<?php
require_once "../../BD/Conexion.php";
session_start(['name' => 'Principal']);
class Usuarios extends Conexion
{
    public function __construct()
    {
        $this->db = parent::__construct();
    }

    public function login($usuario, $password)
    {
        $statement = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :usuario AND PASSWORD = :password");
        $statement->bindParam(':usuario', $usuario);
        $statement->bindParam(':password', $password);
        $statement->execute();
        if ($statement->rowCount() == 1) {
            $result = $statement->fetch();
            $_SESSION['NOMBRE'] = "{$result->NOMBRE} {$result->APELLIDO}";
            $_SESSION['ID'] = $result->ID_USUARIO;
            $_SESSION['PERFIL'] = $result->PERFIL;
            return true;
        }
        return false;
    }

    public function getNombre()
    {
        return $_SESSION['NOMBRE'];
    }

    public function getId()
    {
        return $_SESSION['ID'];
    }

    public function getPerfil()
    {
        return $_SESSION['PERFIL'];
    }

    public function validarSesion()
    {
        if ($_SESSION['ID'] == null) {
            header('location: ../../index.php');
        }
    }

    public function validarSesionAdministrador()
    {
        if ($_SESSION['ID'] != null) {
            if ($_SESSION['PERFIL'] == 'Docente') {
                header('location: ../../Estudiantes/Vistas/index.php');
            }
        }
    }
    public function salir(){
        $_SESSION = null;
        session_destroy();
    }
}
