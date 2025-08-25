<?php
require_once('../Modelo/Docentes.php');
if ($_POST) {
    $modeloDocentes = new Docentes();

    $id = $_POST['id'];
    $modeloDocentes->delete($id);

} else {
    header('header: ../../index.php');
}
?>