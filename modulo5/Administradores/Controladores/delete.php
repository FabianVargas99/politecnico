<?php
require_once('../Modelo/Administradores.php');
if ($_POST) {
    $modeloAdministradores = new Administradores();

    $id = $_POST['id'];
    $modeloAdministradores->delete($id);

} else {
    header('header: ../../index.php');
}
?>