<?php
include_once("includes/bd.php");
include_once("session.php");
include_once("includes/header.php");
?>


<?php

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $result = $database->select("recetas_tb", "*", ["id" => $id]);

    if (count($result) == 1) {
        $nombre= $result[0]['nombre'];
        $img = $result[0]['imagen'];
        $descripcion = $result[0]['descripcion'];
      

        $tiempo_preparacion= $result[0]['tiempo_preparacion'];
        $tiempo_coccion= $result[0]['tiempo_coccion'];
        $tiempo_total= $result[0]['tiempo_total'];
        $porciones= $result[0]['porciones'];
        $complejidad= $result[0]['complejidad'];
        $ocacion = $result[0]['ocacion'];
        $categoria = $result[0]['categoria'];

        $destacada= $result[0]['destacada'];
        $votos= $result[0]['votos'];
        $descripcion= $result[0]['descripcion'];
        $ingredientes= $result[0]['ingredientes'];
        $instrucciones= $result[0]['instrucciones'];
        $recetas_relacionadas= $result[0]['recetas_relacionadas'];
    }
}
?>



    <section class="seccion-perfil-receta">

    <div class="perfil-receta-header">
        <div class="perfil-receta-portada">
       
            <div class="container mt-5 seccion-perfil-receta perfil-receta-portada"><img src="<?php echo $result[0]['imagen'] ?>" class="img-fluid weight-80" alt=""></div>
           
        </div>
    </div>
    </section>

    <section class="seccion-perfil-receta">
        
        <div class="perfil-receta-body">
            <div class="perfil-receta-bio">

            <h1></h1>
                       
                <h3 class="titulo"><?php echo $result[0]['nombre'] ?><br><br>
                    <span class="texto"><a> <?php echo $descripcion ?></a></span>
    
                </h3>
            </div>
            <div class="perfil-receta-footer">

            
                <ul class="lista-datos">
                    <li> <h4>Tiempo de preparación:</h4>  <?php echo $tiempo_preparacion?></li>
                    <li>  <h4>Tiempo de cocción:</h4> <?php echo $tiempo_coccion ?></li>
                    <li><h4> Tiempo total:</h4> <?php echo $tiempo_total ?></li>
                    <li> <h4>Porciones:</h4> <?php echo $porciones?></li>
                    <li> <h4> Nivel de complejidad:</h4> <?php echo $complejidad ?></li>
                    <li><h4> Ocasión para la receta:</h4> <?php echo $ocacion ?></li>
                    <li> <h4> Categoría de la receta:</h4> <?php echo $categoria ?></li>
                </ul>
                <ul class="lista-datos">
                    <li><h4> Si es o no una receta destacada:</h4> <?php echo $destacada ?></li>
                    <li> <h4>Cantidad de votos para la receta:</h4> <?php echo $votos ?></li>
                   
                    <li><h4>Lista de ingredientes:</h4> <?php echo $ingredientes?></li>
                    <li><h4>Instrucciones para la preparación:</h4> <?php echo $instrucciones ?></li>
                    <li><h4>Recetas relacionadas:</h4> <?php echo $recetas_relacionadas ?></li>

        

                </ul>
            </div>
            <div class="py-5">
                        <a href="inicio.php" class="btn btn-danger">Atras </a>

                    </div>
        </div>
    </section>

    

      

 <!--Footer-->

   

 <?php
include("includes/footer.php");
?>