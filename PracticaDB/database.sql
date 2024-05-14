CREATE DATABASE IF NOT EXISTS PracticaDB;

USE PracticaDB;

CREATE TABLE Usuarios(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  apellido VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  tipo ENUM('admin', 'cliente') NOT NULL DEFAULT 'cliente'
);

CREATE TABLE Productos(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  precio DECIMAL(10, 2) NOT NULL,
  descripcion TEXT NOT NULL,
  categoria INT NOT NULL,
  FOREIGN KEY (categoria) REFERENCES Categoria(id)
);

CREATE TABLE Categoria(
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL
);

/* Examples */
INSERT INTO
  Categoria(nombre)
VALUES
  ('Electronica');

INSERT INTO
  Categoria(nombre)
VALUES
  ('Hogar');

INSERT INTO
  Categoria(nombre)
VALUES
  ('Deportes');

INSERT INTO
  Productos(nombre, precio, descripcion, categoria)
VALUES
  (
    'Laptop',
    1000.00,
    'Laptop de ultima generacion',
    1
  );

INSERT INTO
  Productos(nombre, precio, descripcion, categoria)
VALUES
  ('Sillon', 500.00, 'Sillon de cuero', 2);

INSERT INTO
  Productos(nombre, precio, descripcion, categoria)
VALUES
  ('Balon', 20.00, 'Balon de futbol', 3);

INSERT INTO
  Usuarios(nombre, apellido, email, password, tipo)
VALUES
  (
    'admin',
    'admin',
    'admin@admin.com',
    'admin',
    'admin'
  )
INSERT INTO
  Usuarios(nombre, apellido, email, password, tipo)
VALUES
  (
    'cliente',
    'cliente',
    'cliente@cliente.com',
    'cliente',
    'cliente'
  );


INSERT INTO Categoria(nombre) VALUES ('Electtrodomesticos');
