<?php
include_once("../conexion.php");

$id = $_GET['id'];

$query = "DELETE FROM oradores WHERE id_orador = $id";
$result = mysqli_query($conexion, $query);

if ($result) {
    header("Location: ../../oradores.php");
} else {
    echo "Error deleting record: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>