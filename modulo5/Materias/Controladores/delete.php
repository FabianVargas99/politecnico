<?php
require_once('../Modelo/Materias.php');
if ($_POST) {
    $modeloMaterias = new Materias();

    $id = $_POST['id'];
    $modeloMaterias->delete($id);

} else {
    header('header: ../../index.php');
}
?>