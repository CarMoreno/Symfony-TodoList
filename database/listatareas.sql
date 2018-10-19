--
-- Estructura de tabla para la tabla categoria
--

CREATE TABLE categoria (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  nombre varchar(255) NOT NULL,
  descripcion varchar(255) DEFAULT NULL
);


--
-- Estructura de tabla para la tabla tarea
--

CREATE TABLE tarea (
  id int(11) AUTO_INCREMENT PRIMARY KEY,
  categoria_id int(11) DEFAULT NULL,
  titulo varchar(255) NOT NULL,
  descripcion varchar(255) DEFAULT NULL,
  fecha datetime NOT NULL,

  FOREIGN KEY (categoria_id) REFERENCES categoria(id)
);

