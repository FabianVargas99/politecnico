<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Ejercicio 2</title>
</head>

<body class="container bg-dark text-white">
    <h1>Agenda Telefonica</h1>
    <?php
    include_once("Contacto.php");
    include_once("Agenda.php");

    $agenda = new Agenda();

    $agenda->registrarContacto(new Contacto("Fabian", "300 370 9431"));
    $agenda->registrarContacto(new Contacto("Mateo", "370 300 3194"));
    $agenda->registrarContacto(new Contacto("Matias", "312 720 8860"));

    function listarContactos()
    {
        global $agenda;
        echo "<h2>Contactos</h2>";
        $contactos = $agenda->listarContactos();
        if (count($contactos) > 0) {
            foreach ($contactos as $contacto) {
                echo "<p>" . $contacto . "</p>";
            }
        } else {
            echo "<p>No hay contactos en la agenda.</p>";
        }
    }
    function cambioNombre($oldnombre, $newNombre)
    {
        global $agenda;
        echo "<h3>Cambio de nombre</h3>";
        if (!($agenda->cambiarNombre($oldnombre, $newNombre))) {
            echo "<b>$oldnombre</b> no encontrado";
        } else {
            listarContactos($agenda);
        }
    }
    function buscarContato($nombre)
    {
        global $agenda;
        $contactoBuscado = $agenda->buscarContacto($nombre);
        if ($contactoBuscado) {
            echo "<h2>Contacto \"" . $contactoBuscado->getNombre() . "\" encontrado:</h2>";
            echo "<p>" . $contactoBuscado->getNumero() . "</p>";
        } else {
            echo "<p>Contacto no encontrado.</p>";
        }
    }
    function eliminarContacto($nombre)
    {
        global $agenda;
        echo "<h2>Eliminar</h2>";
        echo $nombre;
        if ($agenda->eliminarContacto($nombre)) {
            echo " eliminado.";
            listarContactos($agenda);
        } else {
            echo " no encontrado.";
        }
    }

    listarContactos();
    buscarContato("Mateo");
    eliminarContacto("Matias");
    cambioNombre("Mateo", "Juan");
    cambioNombre("Jose", "Juan");
    cambioNombre("Juan", "Parker");

    ?>


</body>

</html>