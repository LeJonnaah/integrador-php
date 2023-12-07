<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "root";
$baseDeDatos = "integradorphp";


$conexion = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);

if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?>