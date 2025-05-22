<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro-login";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los servicios
$sql = "SELECT id, titulo, descripcion, imagen FROM servicios";
$result = $conn->query($sql);

// Construir la tabla HTML con los datos de los servicios
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr data-servicio-id='" . $row["id"] . "'>";
        echo "<td>" . $row["titulo"] . "</td>";
        echo "<td>" . $row["descripcion"] . "</td>";
        echo "<td>" . $row["imagen"] . "</td>"; // Puedes cambiar esto según cómo estén almacenadas las imágenes
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No hay servicios disponibles</td></tr>";
}

$conn->close();
?>
