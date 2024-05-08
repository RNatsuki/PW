<?php
require_once '../db.php';

$instance = DatabaseConnectionMysqli::get_instance();


$id = $_GET['id'];
$title = $_POST['titulo'];
$description = $_POST['descripcion'];
$price = $_POST['precio'];
$category = $_POST['categoria'];
$image = addslashes(file_get_contents($_FILES['imagen']['tmp_name'])) ?? null;


$query = "UPDATE  producto SET nombre = '$title', imagen = ifnull('$image', imagen), descripcion = '$description', precio = '$price', categoria = '$category' WHERE id = $id";
$instance->query($query);

header('Location: ../index.php');
