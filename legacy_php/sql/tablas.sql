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

CREATE TABLE `materias` (
	`id_materias` INT(11) NOT NULL AUTO_INCREMENT,
	`nombre_materia` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id_materias`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;

CREATE TABLE `notas` (
	`id_notas` INT(11) NOT NULL AUTO_INCREMENT,
	`nombre_estudiante` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`carrera_estudiante` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nombre_materia` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nombre_docente` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id_notas`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
CREATE TABLE `administrador` (
	`id_administrador` INT(10) NOT NULL AUTO_INCREMENT,
	`nombre_administrador` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`clave_administrador` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id_administrador`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
