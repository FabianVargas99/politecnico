<?php
include_once ("Usuarios.php");

$Usuario = new Usuarios();

// $Usuario->addUser(1,"Fabian", "Vargas", "fvargas", "123456", "Administrador", "Activo");
// $Usuario->addUser(2,"Matias", "De la cruz", "mdelacruz", "654321", "Docente", "Activo");
// $Usuario->addUser(3,"Jhon", "Doe", "jdoe", "159357", "Docente", "Activo");
$getUsuarios = $Usuario->listar();
echo "<br>";
foreach ($getUsuarios as $k => $user) {
    echo $user["ID_USUARIO"]." - ";
    echo $user["NOMBRE"]." - ";
    echo $user['APELLIDO']." - ";
    echo $user['USUARIO']." - ";
    echo $user['PASSWORD']." - ";
    echo $user['PERFIL']." - ";
    echo $user['ESTADO']."<br>";
}
