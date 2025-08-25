<?php
require_once('../Modelo/Docentes.php');
if ($_POST) {
    $Docentes = new Docentes();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $estado = $_POST['estado'];
    $Docentes->update($id, $nombre, $apellido, $usuario, $password, $estado);

} else {
    header('header: ../../index.php');
}