<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo 3</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>

<body class="container bg-dark text-white">

    <h1>Programacion Orientada a Objetos POO</h1>
    <b>
        <h4>1. Getters, Setters y Atributos</h4>
        <p>Solución</p>
    </b>
    <?php
    include_once "Clase.php";
    include_once "Facebook.php";
    $Facebook = new Facebook();
    $obj = new Clase("Gatossss", "Perro");
    $obj->setAtributo1("Gatos");
    echo "<b>Getter: </b>" . $obj->getAtributo1() . "<br>";
    $obj->funcion();

    $result = $Facebook->iniciarSesion("vargasfabian@gmail.com", "123face");
    if ($result) {
        echo "<p class=text-success><b>Bienvenido: " . $Facebook->getNombreUsuario() . "</b></p>";
    } else {
        echo "<p class=text-danger><b>Usuario o contraseña incorrecta</b></p>";
    }
    ?>
    <script src="modulo3.js"></script>
</body>

</html>