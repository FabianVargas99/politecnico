<?php
require_once('../Modelo/Administradores.php');
if ($_POST) {
    $Administradores = new Administradores();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $estado = $_POST['estado'];
    $Administradores->update($id, $nombre, $apellido, $usuario, $password, $estado);

} else {
    header('header: ../../index.php');
}