<?php
$arr = explode('/', $_SERVER["REQUEST_URI"]);
require_once('../../Usuarios/Modelo/Usuarios.php');

$ModeloUsuarios = new Usuarios();
$perfil = $ModeloUsuarios->getPerfil();
$navBarOptions = ($perfil == 'Administrador' ? ['Administradores', 'Docentes', 'Estudiantes', 'Materias'] : ['Estudiantes']);

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">Sistema de Notas</a>
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php
          foreach ($navBarOptions as $op) { ?>
            <li class="nav-item">
              <a class="nav-link <?php echo ($arr[3] == $op ? "active" : "") ?>" aria-current="page" <?php echo 'href="../../'.$op.'/vistas/index.php"' ?> ><?php echo $op ?></a>
            </li>
          <?php
          }
          ?>
        </ul>
        <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $ModeloUsuarios->getNombre(); ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="../../Usuarios/Controladores/Salir.php">Cerrar Sesion</a></li>
          </ul>
        </li>
        <a class="nav-link"></a>
        <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      </div>
    </div>
  </div>

</nav>