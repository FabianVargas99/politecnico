<?php $arr = explode('/', $_SERVER["REQUEST_URI"]); ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema de Notas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo($arr[3] == "Administradores"? "active" :"") ?>" aria-current="page" href="../../Administradores/vistas/index.php">Administrador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($arr[3] == "Docentes"? "active" :"") ?>" href="../../Docentes/vistas/index.php">Docente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($arr[3] == "Estudiantes"? "active" :"") ?>" href="../../Estudiantes/vistas/index.php">Estudiantes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($arr[3] == "Materias"? "active" :"") ?>" href="../../Materias/vistas/index.php">Materias</a>
        </li>
        <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>