<?php

include 'conexion.php';

$nombre = $_POST['nombre'];

$apellido = $_POST['apellido'];

$tema = $_POST['tema'];


if ($nombre == "" || $apellido == "" || $tema == "") {
    echo "Error, debe completar todos los campos";
    exit();
} else {
    $sql = "INSERT INTO oradores (nombre, apellido, tema) VALUES ('$nombre', '$apellido', '$tema');";
    $resultado = mysqli_query($conexion, $sql);
}

if ($resultado) {
    echo "Se ha enviado el formulario correctamente";
} else {
    echo "Error al enviar el formulario";
}

mysqli_close($conexion);

?>