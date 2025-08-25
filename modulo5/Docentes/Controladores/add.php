<?php
require_once('../Modelo/Docentes.php');
if($_POST){
$modeloDocentes = new Docentes();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$modeloDocentes->add($nombre, $apellido, $usuario, $password);

}else{
    header('header: ../../index.php');
}
?>