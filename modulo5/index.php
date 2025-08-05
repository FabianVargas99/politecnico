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
    <title>Modulo 5 - Desarrollo web II</title>
</head>

<body class="bg-dark text-white">
    <div class="container text-center">
        <div class="row align-items-center justify-content-md-center position-absolute top-50 start-50 translate-middle">
            <h1 class="text-primary">Desarrollo web II</h1>
            <h2 class="text-warning">Proyecto:<br>Sistema de notas</h2>
            <div class="col-6">
                <h2>LOGIN</h2>
                <form action="" method="post">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="text" class="form-control" value="Usuario" name="usuario" id="usuario">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="text" class="form-control" value="Contraseña" , name="password" , id="password">
                    <input type="submit" class="btn btn-success" value="Entrar" , name="" , id="">
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        include_once("Usuarios/Vistas/index.php");
        include_once("Usuarios/ProcesosUsuario.php");
        ?>
    </div>
</body>

</html>