<?php

$conexion = new mysqli('localhost', 'root', '', 'registro-login');


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recuperar los datos del formulario
$nombre = $_POST['nombre'];
$evento = $_POST['evento'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$sql = "INSERT INTO contactos (nombre, evento, celular, email, mensaje) VALUES ('$nombre', '$evento', '$celular', '$email', '$mensaje')";


if ($conexion->query($sql) === TRUE) {
    echo "Los datos se guardaron correctamente.";
    header("Location: index.php");
    exit(); 
}

 else {
    echo "Error al guardar los datos: " . $conexion->error;
}


$conexion->close();
?>
