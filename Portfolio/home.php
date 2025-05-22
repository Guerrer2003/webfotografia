<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<?php include("cabecera.php"); ?>
<HTML>

<HEAD>
    <TITLE>Hola de nuevo</TITLE>
    <link href="assets/css/cweb-style.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        
        /* Estilo para centrar la tabla */
table {
    margin: 0 auto;
}


table {
    border-collapse: collapse;
    border: 1px solid #ccc;
}


td, th {
    padding: 8px;
    border: 1px solid #ccc;
}


tr:nth-child(even) {
    background-color: #f2f2f2;
}


th {
    background-color: #333;
    color: #fff;
}


td {
    border-right: 1px solid #ccc;
}


tr:hover {
    background-color: #ddd;
}
    </style>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</HEAD>

<BODY>
    <div class="cweb-container">
        <div class="page-header">
            
            <span class="login-signup"><a href="logout.php">Logout</a></span>
        </div>
        <br>
        
    </div>
    <div class="container">
  <h2>Formulario de Servicios</h2>
  <form id="formulario-servicio" action="guardar_servicios.php" method="post" enctype="multipart/form-data">
    <input type="hidden" id="servicio-id" name="servicio-id"> <!-- Campo oculto para guardar el ID del servicio -->
    <div class="form-group">
      <label for="titulo">Título:</label>
      <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>
    <div class="form-group">
      <label for="imagen">Imagen:</label>
      <input type="file" class="form-control-file" id="imagen" name="imagen" accept="image/*" required>
    </div>
    <div class="form-group">
      <label for="descripcion">Descripción:</label>
      <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>

  <h2>Tabla de Servicios</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Título</th>
        <th>Descripción</th>
        <th>Imagen</th>
      </tr>
    </thead>
    <tbody id="tabla-servicios">
      <!-- Aquí se llenarán los datos de la tabla mediante PHP -->
    </tbody>
  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
// Script para llenar el formulario con los datos de la fila seleccionada
$(document).on("click", "#tabla-servicios tr", function() {
  var servicioId = $(this).attr('data-servicio-id');
  var titulo = $(this).find('td:eq(0)').text();
  var descripcion = $(this).find('td:eq(1)').text();
  var imagen = $(this).find('td:eq(2)').text(); // Puedes cambiar esto según cómo estén almacenadas las imágenes

  $("#servicio-id").val(servicioId);
  $("#titulo").val(titulo);
  $("#descripcion").val(descripcion);
  // Puedes manejar la imagen de manera diferente dependiendo de tu estructura de datos
});

// Script para cargar los datos de los servicios en la tabla
$(document).ready(function() {
  $.ajax({
    url: "cargar_servicios.php", // Archivo PHP para cargar los servicios desde la base de datos
    method: "GET",
    success: function(data) {
      $("#tabla-servicios").html(data);
    }
  });
});
</script>
    <?php

$conexion = new mysqli('localhost', 'root', '', 'registro-login');


if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


$sql = "SELECT * FROM contactos";
$resultado = $conexion->query($sql);


if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Evento</th><th>Celular</th><th>Email</th><th>Mensaje</th></tr>";
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["nombre"]. "</td>";
        echo "<td>" . $fila["evento"]. "</td>";
        echo "<td><a href='https://api.whatsapp.com/send?phone=" . $fila["celular"] . "'>" . $fila["celular"] . "</a></td>";
        echo "<td><a href='mailto:" . $fila["email"]. "'>" . $fila["email"]. "</a></td>";
        echo "<td>" . $fila["mensaje"]. "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay datos para mostrar.";
}





    

// Cerrar la conexión
$conexion->close();
?>
</BODY>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</HTML>