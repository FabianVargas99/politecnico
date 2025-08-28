<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Estudiantes.php');
require_once('../../Metodos.php');
$ModeloUsuarios = new Usuarios();
$ModeloMetodos = new Metodos();
$ModeloEstudiantes = new Estudiantes();

$ModeloUsuarios->validarSesion();
$Materias = $ModeloMetodos->getMaterias();
$Docentes = $ModeloMetodos->getDocentes();

$id = $_GET['id'];
$Estudiantes = $ModeloEstudiantes->getById($id);
if ($Estudiantes != null) $Estudiantes = $ModeloEstudiantes->getById($id)[0];
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
    <title>Editar Estudiantes</title>
</head>

<body class="bg-dark text-white">
    <div class="container">
        <h1>Editar Estudiantes</h1>
        <form action="../Controladores/edit.php" method="post">
            <div class="row">
                <?php if ($Estudiantes != null){ ?>
                    <div class="col-3">
                        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" value="<?php echo $Estudiantes->NOMBRE; ?>" placeholder="Nombre" name="nombre" id="nombre" required>
                        <label for="documento" class="form-label">Documento</label>
                        <input type="text" class="form-control" value="<?php echo $Estudiantes->DOCUMENTO; ?>" placeholder="Documento" name="documento" id="documento" required>
                    </div>
                    <div class="col-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" value="<?php echo $Estudiantes->APELLIDO; ?>" placeholder="Apellido" name="apellido" id="apellido" required>
                        <label for="correo" class="form-label">Correo</label>
                        <input type="text" class="form-control" value="<?php echo $Estudiantes->CORREO; ?>" placeholder="Correo" name="correo" id="correo" required>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="materia" class="form-label">Materia</label>
                            <select class="form-select" name="materia" id="materia" required>
                                <option>Seleccione</option>
                                <?php if ($Materias != null) {
                                    foreach ($Materias as $Materia) { ?>
                                        <option <?php echo ($Materia->MATERIA == $Estudiantes->MATERIA? " selected ":' '); ?> value="<?php echo $Materia->MATERIA; ?>"><?php echo $Materia->MATERIA; ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="docente" class="form-label">Docente</label>
                            <select class="form-select" name="docente" id="docente" required>
                                <option>Seleccione</option>
                                <?php if ($Docentes != null) {
                                    foreach ($Docentes as $Docente) { 
                                        $nombreCompletoBd = $Docente->NOMBRE . ' ' . $Docente->APELLIDO;
                                        ?>
                                        <option <?php echo ($nombreCompletoBd == $Estudiantes->DOCENTE ? " selected ":' '); ?> value="<?php echo $nombreCompletoBd; ?>"><?php echo $nombreCompletoBd; ?></option>
                                <?php }
                                } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 mb-3">
                            <label class="form-label" for="number">Promedio</label>
                            <input class="form-control" min="0" max="100" type="number" value="<?php echo $Estudiantes->PROMEDIO; ?>" placeholder="Promedio" name="promedio" id="promedio" required>
                        </div>
                    </div>
                    <input class="btn btn-success" type="submit" value="Editar">
                    <a class="btn btn-danger" href="../Vistas/index.php">Cancelar</a><?php 
                }else echo "<h2 class='text-danger'>No hay estudiante con el id=$id<h2>" ?>
        </form><br>
    </div>
</body>

</html>