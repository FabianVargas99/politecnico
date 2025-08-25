<?php
require_once('../Modelo/Estudiantes.php');
if ($_POST) {
    $modeloEstudiantes = new Estudiantes();

    $id = $_POST['id'];
    $modeloEstudiantes->delete($id);

} else {
    header('header: ../../index.php');
}
?>