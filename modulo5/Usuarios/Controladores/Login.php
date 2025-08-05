<?php
require_once "../Modelo/Usuarios.php";
if ($_POST) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $Modelo = new Usuarios();
    if($Modelo->login($usuario, $password)){
        header('location: ../../Estudiantes/Vistas/index.php');
    }else{
        header('location: ../../index.php');
    }
}else{
    header('location: ../../index.php');
}
?>