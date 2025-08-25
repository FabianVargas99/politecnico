<?php
require_once('../Modelo/Materias.php');
if($_POST){
$modeloMaterias = new Materias();

$materia = $_POST['materia'];
$modeloMaterias->add($materia);

}else{
    header('header: ../../index.php');
}
?>