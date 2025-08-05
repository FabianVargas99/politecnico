<?php
include_once("Modelo/Usuarios.php");

$Usuario = new Usuarios();
$Usuario->login('fvargas', '123456');
echo "Usuario: " . $_SESSION['USUARIO'];
echo "<br>";
echo "Nombre: " . $_SESSION['NOMBRE'] . " " . $_SESSION['APELLIDO'];
echo "<br>";
echo "Rol: " . $_SESSION['PERFIL'];
echo "<br>";
function lis($Usuario)
{
    $getUsuarios = $Usuario->getUsuarios();
    echo "<br>";
    foreach ($getUsuarios as $k => $user) {
        echo $user->ID_USUARIO    . " - ";
        echo $user->NOMBRE        . " - ";
        echo $user->APELLIDO      . " - ";
        echo $user->USUARIO       . " - ";
        echo $user->PASSWORD      . " - ";
        echo $user->PERFIL        . " - ";
        echo $user->ESTADO        . "<br>";
        // echo $user['ID_USUARIO']    . " - ";
        // echo $user['NOMBRE']        . " - ";
        // echo $user['APELLIDO']      . " - ";
        // echo $user['USUARIO']       . " - ";
        // echo $user['PASSWORD']      . " - ";
        // echo $user['PERFIL']        . " - ";
        // echo $user['ESTADO']        . "<br>";
    }
}
// $Usuario->addUser(1,"Fabian", "Vargas", "fvargas", "123456", "Administrador", "Activo");
// $Usuario->addUser(2,"Matias", "De la cruz", "mdelacruz", "654321", "Docente", "Activo");
// $Usuario->addUser(3,"Jhon", "Doe", "jdoe", "159357", "Docente", "Activo");
// $Usuario->updateUser(3, 'Jhon1', 'Doe1', 'jdoe1', '159357a', 'Docente1', 'Activos');
// $Usuario->updateUser(3, "Jhon", "Doe", "jdoe", "159357", "Docente", "Activo");
// $Usuario->delete(9);
lis($Usuario);
print_r($_SESSION);