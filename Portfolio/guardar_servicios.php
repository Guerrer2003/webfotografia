<?php
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registro-login";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar los datos para la inserción
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    
    // Guardar la imagen en el servidor
    $imagen = $_FILES['imagen']['name'];
    $imagen_temp = $_FILES['imagen']['tmp_name'];
    $ruta_imagen = "imagenes/" . $imagen; // Ajusta la carpeta según donde quieras guardar las imágenes
    move_uploaded_file($imagen_temp, $ruta_imagen);

    // Insertar los datos en la tabla servicios
    $sql = "INSERT INTO servicios (titulo, descripcion, imagen) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $titulo, $descripcion, $ruta_imagen);

    if ($stmt->execute() === TRUE) {
        echo "Servicio guardado correctamente";
        header("Location: servicios.php");
    exit(); 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
