<?php
$servidor = "localhost";
$usuario = "id21505920_root";
$contraseña = "Jx9p#4sLqR2t";
$baseDeDatos = "id21505920_integradorphp";


$conexion = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);

if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}

?>