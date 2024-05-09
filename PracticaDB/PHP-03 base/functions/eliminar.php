<?php

require_once '../db.php';

$instance = DatabaseConnectionMysqli::get_instance();

$id = $_GET['id'];


$query = "DELETE FROM producto WHERE id = $id";

$instance->query($query);

header('Location: ../index.php');
