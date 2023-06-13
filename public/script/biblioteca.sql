DROP DATABASE IF EXISTS libreria;
CREATE DATABASE libreria;
USE libreria;

CREATE TABLE categorias (
    id INT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
);

CREATE TABLE libros (
    id INT PRIMARY KEY,
    id_categoria INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    autor VARCHAR(255) NOT NULL,
    fecha_publicacion DATE NOT NULL,
    cantidad INT NOT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categorias(id),
);

CREATE TABLE usuarios (
    id INT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    telefono VARCHAR(255) NOT NULL,
    correo_electronico VARCHAR(255) NOT NULL
);

CREATE TABLE prestamos (
    id INT PRIMARY KEY,
    id_libro INT NOT NULL,
    id_usuario INT NOT NULL,
    fecha_prestamo DATE NOT NULL,
    fecha_devolucion DATEclear NOT NULL,
    FOREIGN KEY (id_libro) REFERENCES libros(id),
    FOREIGN KEY (id_usuarios) REFERENCES usuarios(id)
);

CREATE TABLE devoluciones (
    id INT PRIMARY KEY,
    id_prestamo INT NOT NULL,
    fecha_devolucion_real DATE NOT NULL,
    FOREIGN KEY (id_prestamo) REFERENCES prestamos(id)
);


-- miguel@gmail.com 12345678