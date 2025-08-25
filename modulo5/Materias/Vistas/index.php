<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');
$ModeloUsuarios = new Usuarios();
$ModeloMaterias = new Materias();

$ModeloUsuarios->validarSesion();
$Materias = $ModeloMaterias->get();
$thData = ["ID", "MATERIA", "ACCIONES"];
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
    <title>Materias</title>
</head>

<body class="bg-dark text-white">
    <?php include_once("../../header/navbar.php"); ?>
    <div class="container">
        <h1>Materias</h1>
        <a class="btn btn-primary mb-3" href="add.php" target="_blank">Registrar Materia</a>
        <table class="table table-dark table-striped table-bordered table-responsive">
            <thead>
                <?php 
                if ($Materias !=null){ // Aqui habia un error al iterar porque $Materias no tenia registros ?>
                    <tr>
                        <?php foreach ($thData as $data) { ?>
                            <th id="<?php echo $data ?>" ><?php echo $data ?></th>
                        <?php } ?>
                    </tr><?php
                } ?>
            </thead>
            <?php if ($Materias!=null){
                foreach ($Materias as $campo => $materia) { ?>
                    <tr>
                        <?php foreach ($materia as $campo => $fila) { ?>
                            <td><?php echo $fila ?></td>
                        <?php } ?>
                        <td>
                            <a class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $materia->ID_MATERIA; ?>" target="_blank">Editar</a>
                            <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $materia->ID_MATERIA; ?>" target="_blank">Eliminar</a>
                        </td>
                    </tr>
                <?php }
            } ?>
        </table>
        <h2><?php if ($Materias==null)echo "No hay registros"; ?></h2>
    </div>

</body>

</html>