<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Docentes.php');
$ModeloUsuarios = new Usuarios();
$ModeloDocentes = new Docentes();

$ModeloUsuarios->validarSesion();
$Docentes  = $ModeloDocentes->get();
$thData = ["ID", "NOMBRE", "APELLIDO", "USUARIO", "PERFIL", "ESTADO", "ACCIONES"];
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
    <title>Docentes</title>
</head>

<body class="bg-dark text-white">
    <?php include_once("../../header/navbar.php"); ?>
    <div class="container">
        <h1>Docentes</h1>
        <a class="btn btn-primary mb-3" href="add.php" >Registrar Docentes</a>
        <table class="table table-dark table-striped table-bordered">
            <thead>
                <?php 
                if ($Docentes !=null){ // Aqui habia un error al iterar porque $Docentes no tenia registros ?>
                    <tr>
                        <?php foreach ($thData as $data) { ?>
                            <th> <?php echo $data ?> </th>
                        <?php } ?>
                    </tr><?php
                } ?>
            </thead>
            <?php if ($Docentes != null){
                foreach ($Docentes as $campo => $Docente) { ?>
                    <tr><?php 
                        foreach ($Docente as $campo => $fila) {
                            if($campo!="PASSWORD"){ ?>
                                <td><?php echo $fila ?></td><?php 
                            }
                        } ?>
                        <td>
                            <a class="btn btn-warning btn-sm" href="edit.php?id=<?php echo $Docente->ID_USUARIO; ?>" >Editar</a>
                            <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $Docente->ID_USUARIO; ?>" >Eliminar</a>
                        </td>
                    </tr><?php 
                }
            } ?>
        </table>
        <h2><?php if ($Docentes == null)echo "No hay registros"; ?></h2>
    </div>

</body>

</html>