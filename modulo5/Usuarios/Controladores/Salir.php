<?php
require_once('../Modelo/Usuarios.php');
$modeloUsuarios = new Usuarios();
$modeloUsuarios->salir();
header('location: ../../index.php');