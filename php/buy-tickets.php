<?php

include 'conexion.php';

$nombre = $_POST['nombre'];

$apellido = $_POST['apellido'];

$correo = $_POST['correo'];

$cantidad = $_POST['cantidad'];

$categoria = $_POST['categoria'];


if ($nombre == "" || $apellido == "" || $correo == "" || $cantidad == "" || $categoria == "") {
    echo "Error, debe completar todos los campos";
    exit();
} else {
    $sql = "INSERT INTO tickets (nombre, apellido, correo, cantidad, categoria) VALUES ('$nombre', '$apellido', '$correo', '$cantidad', '$categoria');";
    $resultado = mysqli_query($conexion, $sql);
}

if ($resultado) {
    echo "Se ha enviado el formulario correctamente";
} else {
    echo "Error al enviar el formulario";
}

?>