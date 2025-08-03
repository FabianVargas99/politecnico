<?php
function validadVariable(string $variable)
{
    if (isset($_POST[$variable])) {
        return $_POST[$variable];
    }
}

?>
<h1>Información de inscripción</h1><?php
if (isset($_POST['documento']) and isset($_POST['confirmarDocumento']) and isset($_POST['nombres']) and isset($_POST['apellidos']) and isset($_POST['correo']) and isset($_POST['confirmarCorreo']) and isset($_POST['pais']) and isset($_POST['departamento']) and isset($_POST['ciudad']) and isset($_POST['edad']) and isset($_POST['direccion']) and isset($_POST['telefono']) and isset($_POST['diplomado']) and isset($_POST['informacion']) and isset($_POST['genero'])) {
    $documento = validadVariable("documento");
    $confirmarDocumento = validadVariable("confirmarDocumento");
    $nombres = validadVariable("nombres");
    $apellidos = validadVariable("apellidos");
    $correo = validadVariable("correo");
    $confirmarCorreo = validadVariable("confirmarCorreo");
    $pais = validadVariable("pais");
    $departamento = validadVariable("departamento");
    $ciudad = validadVariable("ciudad");
    $edad = validadVariable("edad");
    $direccion = validadVariable("direccion");
    $telefono = validadVariable("telefono");
    $diplomado = validadVariable("diplomado");
    $informacion = validadVariable("informacion");
    $genero = validadVariable("genero");
    $datos = ["Documento" => $documento, "Confirmar documento" => $confirmarDocumento, "Nombres" => $nombres, "Apellidos" => $apellidos, "Correo" => $correo, "Confirmar correo" => $confirmarCorreo, "Pais" => $pais, "Departamento" => $departamento, "Ciudad" => $ciudad, "Edad" => $edad, "Direccion" => $direccion, "Telefono" => $telefono, "Diplomado" => $diplomado, "Informacion" => $informacion, "Genero" => $genero];
    ?>
    <!-- <h1>Información de inscripción</h1> -->
    <div class="container text-center">
        <div class="row">
            <div class="col-6">
                <table class="table table-dark table-striped table-bordered">
                    <tr>
                        <th>Requisito</th>
                        <th>Dato</th>
                    </tr>
                    <?php foreach ($datos as $name => $dato) { ?>
                        <tr>
                            <td class="text-warning"><?php echo $name; ?></td>
                            <td class="text-success"><?php echo $dato; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <?php
} else { ?>
    <h2>
        No se han enviado datos.
    </h2>
<?php }