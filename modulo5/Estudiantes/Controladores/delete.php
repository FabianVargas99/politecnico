<?php
require_once('../Modelo/Estudiantes.php');
if($_POST){
$modeloEstudiantes = new Estudiantes();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$documento = $_POST['documento'];
$correo = $_POST['correo'];
$materia = $_POST['materia'];
$docente = $_POST['docente'];
$promedio = $_POST['promedio'];
$fecha = date('Y-m-d');
$modeloEstudiantes->add($nombre, $apellido, $documento, $correo, $materia, $docente, $promedio, $fecha);

}else{
    header('header: ../../index.php');
}
?>