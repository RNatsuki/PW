<?php

include_once '../db.php';


$instance = DatabaseConnectionMysqli::get_instance();


$title = $_POST['titulo'];
$description = $_POST['descripcion'];
$price = $_POST['precio'];
$category = $_POST['categoria'];

$image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$instance->query("INSERT INTO Producto (nombre, imagen, descripcion, precio, categoria) VALUES ('$title', '$image', '$description', '$price', '$category')");

header('Location: ../index.php');
