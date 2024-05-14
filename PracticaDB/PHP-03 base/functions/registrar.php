<?php

include_once '../db.php';
include_once 'limpia.php';

$instance = DatabaseConnectionMysqli::get_instance();


$title = $_POST['titulo'];
$description = $_POST['descripcion'];
$price = $_POST['precio'];

$title = limpia($title);
$description = limpia($description);
$price = limpia($price);


$category = $_POST['categoria'];

$image = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$instance->query("INSERT INTO Producto (nombre, imagen, descripcion, precio, categoria) VALUES ('$title', '$image', '$description', '$price', '$category')");

header('Location: ../index.php');
