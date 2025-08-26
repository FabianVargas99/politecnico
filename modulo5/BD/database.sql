CREATE TABLE `estudiantes` (
  `ID_ESTUDIANTE` int(15) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `APELLIDO` varchar(60) NOT NULL,
  `DOCUMENTO` varchar(12) NOT NULL,
  `CORREO` varchar(60) NOT NULL,
  `MATERIA` varchar(40) NOT NULL,
  `DOCENTE` varchar(60) NOT NULL,
  `PROMEDIO` int(3) NOT NULL,
  `FECHA_REGISTRO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `estudiantes`;
INSERT INTO `estudiantes` (`ID_ESTUDIANTE`, `NOMBRE`, `APELLIDO`, `DOCUMENTO`, `CORREO`, `MATERIA`, `DOCENTE`, `PROMEDIO`, `FECHA_REGISTRO`) VALUES
(1, 'Jhon', 'Doe', '1593574862', 'jdoe@mail.com', 'Estructura de datos', 'Adrian De la cruz', 85, '2025-08-26'),
(2, 'Carlos ', 'Palencia', '7539514825', 'cpalencia@mail.com', 'Ingles', 'Juan Venera', 75, '2025-08-26');

CREATE TABLE `materias` (
  `ID_MATERIA` int(15) NOT NULL,
  `MATERIA` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `materias`;
INSERT INTO `materias` (`ID_MATERIA`, `MATERIA`) VALUES
(1, 'Ingles'),
(2, 'Calculo'),
(3, 'Programacion I'),
(4, 'Programacion II'),
(5, 'Programacion III'),
(6, 'Estructura de datos');

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(15) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `APELLIDO` varchar(60) NOT NULL,
  `USUARIO` varchar(40) NOT NULL,
  `PASSWORD` varchar(80) NOT NULL,
  `PERFIL` varchar(30) NOT NULL,
  `ESTADO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

TRUNCATE TABLE `usuarios`;
INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRE`, `APELLIDO`, `USUARIO`, `PASSWORD`, `PERFIL`, `ESTADO`) VALUES
(1, 'Fabian', 'Vargas', 'fvargas', '123456', 'Administrador', 'Activo'),
(2, 'Adrian', 'De la cruz', 'Adelacruz', '321654', 'Docente', 'Activo'),
(3, 'Juan', 'Venera', 'jvenera', '654321', 'Docente', 'Activo'),
(4, 'Sam', 'Sepiol', 'S3pi0l', 'holamundo', 'Administrador', 'Inactivo');


ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`ID_ESTUDIANTE`);

ALTER TABLE `materias`
  ADD PRIMARY KEY (`ID_MATERIA`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);


ALTER TABLE `estudiantes`
  MODIFY `ID_ESTUDIANTE` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `materias`
  MODIFY `ID_MATERIA` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
