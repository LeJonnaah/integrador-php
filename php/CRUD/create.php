<?php
include_once("../conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tema = $_POST['tema'];

$query = "INSERT INTO oradores (nombre, apellido, tema) VALUES ('$nombre', '$apellido', '$tema')";
$result = mysqli_query($conexion, $query);

if ($result) {
    header("Location: ../../oradores.php");
} else {
    echo "Error creating record: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>