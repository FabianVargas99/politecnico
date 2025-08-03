<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Ejercicio 1</title>
</head>

<body class="container bg-dark text-white">
    <h1>Libros</h1>
    <?php
    include_once("Libros.php");
    $libro1 = new Libros("Fabian Vargas", "Programacion en PHP Orientada a Objetos", 500);
    $libro2 = new Libros("Gabriel Garcia Marquez", "Cien años de Soledad", 482);
    $libro1->mostrarLibro();
    echo "<br>";
    $libro2->mostrarLibro();
    echo "<br>";
    $libro2->compararLibros($libro1, $libro2);
    ?>

</body>

</html>