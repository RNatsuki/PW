<?php

require_once '../db.php';
include_once 'limpia.php';
$instancia = DatabaseConnectionMysqli::get_instance();

$id = $_GET['id'];

$title = limpia($_POST['titulo']);

$description = limpia($_POST['descripcion']);

$price = limpia($_POST['precio']);

$category = limpia($_POST['categoria']);

$image = $_FILES['imagen']['tmp_name'];

if (!$image) {
  $query = "UPDATE producto SET nombre = '$title', descripcion = '$description', precio = '$price', categoria = '$category' WHERE id = $id";
} else {
  $image = addslashes(file_get_contents($image));
  $query = "UPDATE producto SET nombre = '$title', descripcion = '$description', precio = '$price', categoria = '$category', imagen = '$image' WHERE id = $id";
}

$instancia->query($query);

header('Location: ../index.php');
