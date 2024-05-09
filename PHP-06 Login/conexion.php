<?php

$servidor = 'localhost';
$usuario = 'root';
$pass = '';
$db = 'login';

$con = new mysqli($servidor, $usuario, $pass, $db);

if($con->connect_error){
    die("Error al conectar: ".$con->connect_error);
}
