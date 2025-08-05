<?php
include_once("./Administradores/Modelo/Administradores.php");
include_once("Modelo/Usuarios.php");

$Usuario = new Usuarios();
$admins = new Administradores();

$Usuario->login('fvargas', '123456');
function lis($admins)
{
    echo "Nombre: " . $_SESSION['NOMBRE'];
    echo "<br>";
    echo "Rol: " . $_SESSION['PERFIL'];
    echo "<br>";
    $getUsuarios = $admins->get();
    echo "<br>";
    foreach ($getUsuarios as $k => $user) {
        echo $user->ID_USUARIO    . " - ";
        echo $user->NOMBRE        . " - ";
        echo $user->APELLIDO      . " - ";
        echo $user->USUARIO       . " - ";
        echo $user->PASSWORD      . " - ";
        echo $user->PERFIL        . " - ";
        echo $user->ESTADO        . "<br>";
    }
}
lis($admins);
echo "<br>";
print_r($_SESSION);