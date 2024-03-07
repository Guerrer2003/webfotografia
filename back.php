<?php


if($_POST){
    
    $nombre= $_POST ['nombre'];
    $descripcion= $_POST['descripcion'];

    $fecha= new DateTime();
    $imagen= $fecha ->getTimestamp()."_".$_FILES ['archivo']['name'];

    $imagenTemporal= $_FILES ['archivo']['tmp_name'];

    move_uploaded_file($imagenTemporal, "imagenes/".$imagen);


    $objConexion= new conexion();
    $sql="INSERT INTO `proyecto` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);

    header("location:portfolio.php");

}

if($_GET){

    $id=$_GET['borrar'];
    $objConexion= new conexion();
    
    $imagen= $objConexion->consultar("SELECT imagen FROM `proyecto` WHERE id=". $id);
    
    unlink("imagenes/".$imagen[0]['imagen']);

   
    $sql= "DELETE FROM `proyecto` WHERE `proyecto`. `id`=".$id ;
    $objConexion->ejecutar($sql);
    header("location:portfolio.php");
}

$objConexion= new conexion();
$proyectos= $objConexion->consultar("SELECT * FROM `proyecto`");





?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">Información de la receta</div>
                <div class="card-body">
                    <form action="portfolio.php" method="post" enctype="multipart/form-data">

                        Nombre del plato: <input required class="form-control"   type="text" name="nombre" id="">
                        <br/>
                        
                        Imagen del plato: <input required class="form-control"    type="file" name="archivo" id="">
                        <br/>

                        Receta:
                            <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>
                        <br/>
                        

                        <input class="btn btn-outline-success" type="submit" value="Subir receta">


                    </form>
                </div>
   
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($proyectos as $proyecto){ ?>
                        <tr class="">
                            <td><?php echo $proyecto['id'];	?></td>
                            <td><?php echo $proyecto['nombre'];	?></td>


                            <td>

                                <img width="100" src="imagenes/<?php echo $proyecto['imagen'];	?>" alt="">

                                
                            
                            </td>


                            <td><?php echo $proyecto['descripcion'];	?></td>
                            <td><a
                                class="btn btn-danger"
                                href="?borrar= <?php echo $proyecto['id']; ?>"
                                >Eliminar</a
                            >
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>



        </div>
        
    </div>
</div>