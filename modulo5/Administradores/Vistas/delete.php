<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Administradores.php');
$ModeloUsuarios = new Usuarios();
$ModeloAdministradores = new Administradores();
$ModeloUsuarios->validarSesion();
$id = $_GET['id'];
$Administrador = null;
if ($ModeloAdministradores->getById($id) != null) $Administrador = $ModeloAdministradores->getById($id)[0];

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
    <title>Eliminar Administradores</title>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <h1>Eliminar Administradores</h1>
        <?php if ($Administrador != null){ ?>
            <form action="../Controladores/delete.php" method="post">
                <div class="row">
                    <div class="col-3">
                        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
                        <p>¿Estas seguro que deseas eliminar este Administrador: <?php echo $Administrador->NOMBRE. ' '. $Administrador->APELLIDO ?>?</p>
                    </div>
                </div>
                <input class="btn btn-success" type="submit" value="Eliminar">
                <a class="btn btn-danger" href="../Vistas/index.php">Cancelar</a>
            </form><br><?php 
        }else echo "<h2 class='text-danger'>No hay Administradores con el id=$id</h2>" ?>
    </div>
</body>

</html>