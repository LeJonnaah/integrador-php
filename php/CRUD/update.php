<?php
include_once("../conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tema = $_POST['tema'];

$query = "UPDATE oradores SET nombre = '$nombre', apellido = '$apellido', tema = '$tema' WHERE id_orador = $id";
$result = mysqli_query($conexion, $query);

if ($result) {
    header("Location: ../../oradores.php");
} else {
    echo "Error updating record: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>