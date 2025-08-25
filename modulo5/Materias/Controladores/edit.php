<?php
require_once('../Modelo/Materias.php');
if ($_POST) {
    $Materias = new Materias();

    $id = $_POST['id'];
    $materia = $_POST['materia'];
    $Materias->update($id, $materia);

} else {
    header('header: ../../index.php');
}