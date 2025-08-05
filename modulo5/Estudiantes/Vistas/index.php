<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Estudiantes.php');
$ModeloUsuarios = new Usuarios();
$ModeloEstudiantes = new Estudiantes();

$ModeloUsuarios->validarSesion();
$Estudiantes = $ModeloEstudiantes->get();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <title>Estudiantes</title>
</head>

<body class="bg-dark text-white">
    <h1>Estudiantes</h1>
    <a href="add.php" target="_blank">Registrar Estudiante</a>
    <table class="table table-dark table-striped table-bordered">
        <tr>
            <?php foreach ($Estudiantes as $campo => $Estudiante) { ?>
            <tr>
                <?php foreach ($Estudiante as $campo => $fila) { ?>
                    <th> <?php echo $campo ?> </th>
                <?php } ?>
            </tr>
        <?php } ?>
        </tr>
        <?php foreach ($Estudiantes as $campo => $Estudiante) { ?>
            <tr>
                <?php foreach ($Estudiante as $campo => $fila) { ?>
                    <td> <?php echo $fila ?> </td>
                <?php } ?>
            </tr>
        <?php } ?>

    </table>
</body>

</html>