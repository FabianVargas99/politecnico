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
    <title>Modulo 4, Ejercicio 1</title>
</head>

<body class="container bg-dark text-white">
    <h1 class="text-success">Desarrollo web I</h1>
    <h2 class="text-danger">Ejercicio 1 - Formulario</h2>
    <?php $paises = array("Colombia", "Venezuela", "Ecuador", "Argentina", "Mexico", "Otro");
    $diplomados = array("Programación en PHP", "Programación en Java", "Bases de Datos en MySQL", "Diseño Digital", "Marketing");
    $edades = array("Menor de 18", "18 a 25", "26 a 35", "36 a 45", "Mayor a 45");
    ?>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="row">
                <div class="col-3">
                    <label for="documento" class="form-label">Número de documento</label>
                    <input name="documento" id="documento" type="number" min="10000000" class="form-control" required>

                    <label for="confirmarDocumento" class="form-label">Confirmar número de documento</label>
                    <input name="confirmarDocumento" id="confirmarDocumento" type="number" min="10000000"
                        class="form-control" required>

                    <label for="nombres" class="form-label">Nombres</label>
                    <input name="nombres" id="nombres" type="text" class="form-control" required>

                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input name="apellidos" id="apellidos" type="text" class="form-control" required>

                    <label for="correo" class="form-label">Correo</label>
                    <input name="correo" id="correo" type="email" class="form-control" required>

                    <label for="confirmarCorreo" class="form-label">Confirmar Correo</label>
                    <input name="confirmarCorreo" id="confirmarCorreo" type="email" class="form-control" required>
                </div>
                <div class="col-3">
                    <label for="pais" class="form-label">Pais</label>
                    <select name="pais" id="pais" class="form-select" required="true">
                        <option disabled selected>Pais</option>
                        <?php foreach ($paises as $pais) { ?>
                            <option value="<?php echo $pais ?>"><?php echo $pais ?></option>
                        <?php } ?>
                    </select>

                    <label for="departamento" class="form-label">Departamento</label>
                    <input name="departamento" id="departamento" type="text" class="form-control" required>

                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input name="ciudad" id="ciudad" type="text" class="form-control" required>

                    <label for="edad" class="form-label">Edad</label>
                    <select name="edad" id="edad" class="form-select" required="true">
                        <option disabled selected>Edad</option>
                        <?php foreach ($edades as $edad) { ?>
                            <option value="<?php echo $edad ?>"><?php echo $edad ?></option>
                        <?php } ?>
                    </select>

                    <label for="direccion" class="form-label">Direccion</label>
                    <input name="direccion" id="direccion" type="text" class="form-control" required>

                    <label for="telefono" class="form-label">Telefono de contacto</label>
                    <input name="telefono" id="telefono" type="text" class="form-control" required>
                </div>
                <div class="col-3">
                    <label for="diplomado" class="form-label">Diplomado</label>
                    <select name="diplomado" id="diplomado" class="form-select" required="true">
                        <option disabled selected>diplomado</option>
                        <?php foreach ($diplomados as $diplomado) { ?>
                            <option value="<?php echo $diplomado ?>"><?php echo $diplomado ?></option>
                        <?php } ?>
                    </select>
                    <div class="row">
                        <label for="">¿Como se enteró de la institución?</label>
                        <div class="col-6">
                            <div class="form-check">
                                <input name="informacion" value="Opcion 1" type="radio" class="form-check-input"
                                    required>
                                <label for="informacion" class="form-check-label">Opcion 1</label>
                            </div>
                            <div class="form-check">
                                <input name="informacion" value="Opcion 2" type="radio" class="form-check-input"
                                    required>
                                <label for="informacion" class="form-check-label">Opcion 2</label>
                            </div>
                            <div class="form-check">
                                <input name="informacion" value="Opcion 3" type="radio" class="form-check-input"
                                    required>
                                <label for="informacion" class="form-check-label">Opcion 3</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input name="informacion" value="Opcion 4" type="radio" class="form-check-input"
                                    required>
                                <label for="informacion" class="form-check-label">Opcion 4</label>
                            </div>
                            <div class="form-check">
                                <input name="informacion" value="Opcion 5" type="radio" class="form-check-input"
                                    required>
                                <label for="informacion" class="form-check-label">Opcion 5</label>
                            </div>
                            <div class="form-check">
                                <input name="informacion" value="Opcion 6" type="radio" class="form-check-input"
                                    required>
                                <label for="informacion" class="form-check-label">Opcion 6</label>
                            </div>
                        </div>
                    </div>
                    <label for="">Genero</label>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-check">
                                <input name="genero" value="Masculino" type="radio" class="form-check-input" required>
                                <label for="genero" class="form-check-label">Masculino</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input name="genero" value="Femenino" type="radio" class="form-check-input" required>
                                <label for="genero" class="form-check-label">Femenino</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
        <?php include_once("informacionInscripcion.php"); ?>
        <div id="mostrarDatos"></div>
    </div>
    <script>
        document.getElementById("documento").value = 1065848405;
        document.getElementById("confirmarDocumento").value = 1065848405;
        document.getElementById("nombres").value = "Fabian Mateo";
        document.getElementById("apellidos").value = "Vargas De la cruz";
        document.getElementById("correo").value = "vargasfabian@gmail.com";
        document.getElementById("confirmarCorreo").value = "vargasfabian@gmail.com";
        document.getElementById("pais").value = "Colombia";
        document.getElementById("departamento").value = "Cesar";
        document.getElementById("ciudad").value = "Valledupar";
        document.getElementById("edad").value = "26 a 35";
        document.getElementById("direccion").value = "Calle 16 D 20 70";
        document.getElementById("telefono").value = "3003709431";
        document.getElementById("diplomado").value = "Programación en PHP";
        document.querySelector('input[name="informacion"][value="Opcion 3"]').checked = true;
        document.querySelector('input[name="genero"][value="Masculino"]').checked = true;
    </script>
</body>

</html>