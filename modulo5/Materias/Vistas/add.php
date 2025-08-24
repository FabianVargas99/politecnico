<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');
$ModeloUsuarios = new Usuarios();
$ModeloMaterias = new Materias();

$ModeloUsuarios->validarSesion();
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
    <title>Registrar Materias</title>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <h1>Registrar Materias</h1>
        <form action="../Controladores/add.php" method="post">
            <div class="row">
                <div class="col-3 mb-3">
                    <label for="materia" class="form-label">Materia</label>
                    <input type="text" class="form-control" placeholder="Materia" name="materia" id="materia" required>
                </div>

            </div>
            <input class="btn btn-success" type="submit" value="Registrar">
            <a class="btn btn-danger" onclick="window.close()">Cancelar</a>
        </form><br>
    </div>
</body>

</html>