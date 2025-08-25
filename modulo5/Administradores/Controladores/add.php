<?php
require_once('../Modelo/Administradores.php');
if($_POST){
$modeloAdministradores = new Administradores();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$modeloAdministradores->add($nombre, $apellido, $usuario, $password);

}else{
    header('header: ../../index.php');
}
?>