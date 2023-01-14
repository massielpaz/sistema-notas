CREATE TABLE `docente` (
	`id_docente` INT(11) NOT NULL AUTO_INCREMENT,
	`nombre_docente` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`titulo_docente` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`correo_docente` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`telefono_docente` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id_docente`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB;

CREATE TABLE `estudiante` (
	`id_estudiante` INT(11) NOT NULL AUTO_INCREMENT,
	`carnet_estudiante` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nombre_estudiante` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`correo_estudiante` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`carrera_estudiante` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`anio_estudiante` INT(11) NOT NULL,
	PRIMARY KEY (`id_estudiante`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB;

CREATE TABLE `horario` (
	`id_horario` INT(11) NOT NULL AUTO_INCREMENT,
	`carrera` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nombre_docente` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nombre_materia` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`seccion` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id_horario`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB;
