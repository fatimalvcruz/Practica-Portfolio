<?php   include("cabecera.php"); ?>
<?php   include("conexion.php"); ?>

<?php
$objConexion= new conexion();
$proyectos= $objConexion->consultar("SELECT * FROM `proyectos`");


?>

    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Bienvenid@</h1>
            <p class="lead">Fátima Portfolio</p>
            <hr class="my-2">
            <p>Más información</p>
        </div>
    </div>



    <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php foreach($proyectos as $proyecto)  {?>
        <div class="col">
            <div class="card">
            <img  width="100" src="imagenes/<?php echo $proyecto['imagen'];?>" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $proyecto['nombre'];?></h5>
                <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
            </div>
            </div>
        </div>        
    <?php }?>

       
    </div>
<?php   include("footer.php"); ?>
