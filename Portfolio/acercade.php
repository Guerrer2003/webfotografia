<?php include("cabecera.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

    <style>
    .carousel-item {
      height: 100vh;
      min-height: 300px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .carousel-caption {
      bottom: 220px;
    }
    .carousel-caption h3 {
      font-size: 3.5em;
      font-weight: bold;
    }
    .carousel-caption p {
      font-size: 1.5em;
    }
  </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <div class="contenedor-imagen">
    <img src="https://marcosllanos.com/media/Sobre-mi.jpg" alt="Descripción de la imagen" class="imagen-achicada">
    <div class="texto-encima">Todo esto se trata de ustedes</div>
</div>

<div class="contenedor-info1">
    <img src="https://marcosllanos.com/media/Marcos-Llanos-Emiro-foto%CC%81grafode-la-Argentina.jpg" alt="Descripción de la imagen" class="imagen-info1">
    <p class="descripcion" >


¡Bienvenido a mi mundo fotográfico!
<br>
<br>

Soy Miguel, un apasionado de capturar los momentos más hermosos  
y significativos <br> a través de mi lente. Mi misión es contar historias a través de imágenes, 
creando<br> recuerdos que perduren para siempre.

<br>Cada fotografía que tomo es una oportunidad  
para explorar la belleza que nos rodea:<br> desde paisajes impresionantes hasta retratos íntimos, 
 mi objetivo es capturar la esencia<br> y la emoción de cada momento.</p>
</div>



<div class="contenedor-info2">
    <img src="https://marcosllanos.com/media/Marcos-Llanos-tiene-una-este%CC%81tica-diferente.jpg" alt="Descripción de la imagen" class="imagen-info2">
    <div class="descripcion1">
        <p>Seguramente pasaron por aquí buscando solo un fotógrafo de bodas, pero voy a contarles un pequeño SECRETO. 

La CONEXIÓN entre ustedes y yo es esencial para contar su historia, el día de su boda tendrán a las personas más queridas y cercanas, por eso no deberían tener a un extraño haciendo fotos desde lejos y sin estar comprometido, sino a una persona cercana y con quien se sientan a gusto e inspirados.
Quién creen que contaría mejor su historia de amor? Una persona que no los conoce o alguien tan cercano como un amigo ?

</p>
    </div>
</div>
<br>
<br>
<br>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicadores -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- Imágenes del carrusel -->
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('https://marcosllanos.com/media/Fotografo-de-casamientos-premiado-en-Argentina-Marcos-Llanos.jpg')">
      <div class="carousel-caption">
       
      </div>   
    </div>
    <div class="carousel-item" style="background-image: url('https://marcosllanos.com/media/Fotografo-de-casamientos-en-Argentina-chile-peru-y-ecuador-fotografo-de-mendoza-009.jpg')">
      <div class="carousel-caption">
        
      </div>   
    </div>
    <div class="carousel-item" style="background-image: url('https://marcosllanos.com/media/DSC_2236.jpg')">
      <div class="carousel-caption">
        
      </div>   
    </div>
  </div>
  
  <!-- Controles del carrusel -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br>


<div class="contenedor-botonIndex">
    <a href="contacto.php" class="boton-index">Contactame</a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>
</html>
<?php include("pie.php"); ?>