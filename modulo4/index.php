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
    <title>Modulo 4</title>
</head>

<body class="container bg-dark text-white">
    <h1 class="text-warning">Desarrollo web</h1>
    <?php
    $informacion = array(
        array("Fabian", 26, "vargasfabian@gmail.com"),
        array("Jesus", 30, "jesusalfonso@gmail.com"),
        array("Adrian", 19, "delacruzadrian@gmail.com")
    );
    array_push($informacion, ["Mateo", 16, "vargasmateo@gmail.com"]);
    ?>
    <div class="container text-center">
        <div class="row">
            <div class="col-1">
                <table class="table table-dark table-striped-columns table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Correo</th>
                    </tr>
                    <?php foreach($informacion as $rows){ ?>
                        <tr>
                            <?php foreach ($rows as $col) {?>
                                <td><?php echo $col ?></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <a href="ejercicio-1">Ejercicio 1</a>
</body>

</html>