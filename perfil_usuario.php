<?php
include_once("includes/bd.php");
include_once("session.php");
include_once("includes/header.php");
?>

<?php


$result = $database->select("usuarios_tb", "*");
for ($i = 0; $i < count($result); $i++) {   
   
       $usuario=$result[$i]['id']; 
       $nombre=$result[$i]['nombre'];
       $apellidos=$result[$i]['apellidos'] ;
       $perfil=$result[$i]['perfil'] ;
       $correo_electronico=$result[$i]['correo_electronico'] ;
      


      

}
?>








   
   





    <section class=" seccion-perfil-usuario">
        <div class=" perfil-usuario-header">
            <div class="perfil-usuario-portada ">
                <div class="perfil-usuario-avatar">
                <img src="<?php echo  $imagen=$result[0]['imagen'] ;?>" alt="foto-perfil">

                </div>

            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo $nombre." ".$apellidos?><br><br>
                   

                </h3>

            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i></i> Correo: <?php echo $correo_electronico?></li>
                   
                    <li><i></i> Tipo de Usuario: <?php echo $perfil?></li>

                </ul>


                <div class="d-grid gap-2 d-md-block">
                    <a name="" id="" class="btn btn-primary btn-secondary " href="principal.php" role="button">Lista de Usuarios</a>
                    <a name="" id="" class="btn btn-primary btn-secondary " href="lista-recetas.php" role="button">Lista de Recetas</a>
                </div>


            </ul>


        </div>

    </div>




</section>
<br><br>
<div class="container">



    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h1>
                    Coleccion de recetas
                </h1>
                <br>
            </div>

        </div>







        <main class="container">
            <br>

            <div class="container overflow-hidden text-center">
                <div class="row gy-5">


                    <?php

                    $result = $database->select("recetas_tb", "*");
                    for ($i = 0; $i < count($result); $i++) {   ?>
                        <div class="col-6  ">


                            <div class="card mt-4" style="width: 18rem;">
                                <div class="card-body d-flex flex-row">
                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fca%2F3c%2F2c%2Fca3c2c184846ed27a5637476b3977087.png&f=1&nofb=1&ipt=3454bd472fa884defdb0c7ad9a53d85aa703da98643671a463063597fa299de9&ipo=images" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
                                    <div>
                                        <h2 class="card-title font-weight-bold mb-2"><?php echo $result[$i]['nombre'] ?></h2>
                                    </div>
                                </div>



                                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                    <img class="weight-50 mt-3 p-3" style="width: 18rem;" src=" <?php echo $result[$i]['imagen'] ?>" alt="<?php echo $result[$i]['nombre'] ?>">
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>

                                </div>
                                <div class="card-body ">
                                    <p class="card-text"> <?php echo $result[$i]['descripcion'] ?></p>
                                    <div class="d-flex justify-content-between">


                                        <a href="detalle-receta.php?id=<?php echo $result[$i]['id'] ?>" class="btn btn-success  "> Ver
                                            mas</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>

        </main>




        <?php
include("includes/footer.php");
?>