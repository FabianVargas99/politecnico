<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Administradores.php');
$ModeloUsuarios = new Usuarios();
$ModeloAdministradores = new Administradores();

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
    <title>Registrar Administradores</title>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <h1>Registrar Administradores</h1>
        <form action="../Controladores/add.php" method="post">
            <div class="row">
                <div class="col-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" required>
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required>
                </div>
                <div class="col-3 mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" placeholder="Apellido" name="apellido" id="apellido" required>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                </div>
            </div>
            
            <input class="btn btn-success" type="submit" value="Registrar">
            <a class="btn btn-danger" href="../Vistas/index.php">Cancelar</a>
        </form><br>
    </div>
</body>

</html>