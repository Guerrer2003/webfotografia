<?php include("cabecera.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="contenedor-imagen2">
    <img src="https://marcosllanos.com/media/Contacto-con-un-fotografo-distinto-en-argentina.jpg" alt="Descripción de la imagen" class="imagen-achicada2">
    <div class="texto-encima2">JUNTOS PODEMOS HACER COSAS <br> INCREIBLES</div>
    </div>


    <h1 class="titulo-contacto"> Somos una empresa de fotografía mendocina</h1>
    <ul class="li-contacto" >
    <br>
        
       
        <li>
            <a href="guerrerojj937@gmail.com" class="enlace-color" title="correo">guerrerojj937@gmail.com</a>
        </li>
        <li>
            <a href="https://wa.link/pak5bn" class="enlace-color" title="Whatsapp"><strong>Whatsapp</strong> (+54 9) 261 596-9420</a>
        </li>
    </ul>
   
<br>

    <section>
		<p style="text-align: center;">Es un honor que consideren mi trabajo para el día de su boda. Pueden presentarse en este formulario y contarme sobre ustedes, me gustaría conocerlos!</p>
        <p style="text-align: center;">Les contestaré a la brevedad.</p>
        <p style="text-align: center;">Si no tienen noticias mías en 24 horas revisen su casilla de “correo no deseado” o escríbanme a <a href="guerrerojj937@gmail.com" class="enlace-color" target="_blank" rel="noopener noreferrer"><strong>guerrerojj937@gmail.com</strong></a></p>
		</section>

        <br>
        <br>
       

        <h2 style="text-align: center;">Formulario de Contacto</h2>

    <form action="guardar.php" method="POST" class="formulario">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="evento">Tipo de Evento:</label><br>
        <input type="text" id="evento" name="evento" ><br>

        <label for="celular">Celular:</label><br>
        <input type="text" id="celular" name="celular" ><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" required></textarea><br>
<a href="index.php">
        <input type="submit" value="Enviar" class="boton-enviar">
        </a>
    </form>





</body>
</html>
<?php include("pie.php"); ?>