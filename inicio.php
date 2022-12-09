<?php
include_once("includes/bd.php");
include_once("session.php");
include_once("includes/header.php");
?>
<html>

<body>

    <section class="seccion-perfil-receta ">
        <div class="perfil-receta-header">
            <div class="perfil-receta-portada">
                <!--Slider principal-->


                <section class="container p-0 mt-5  ">


                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imgs/1.png" class="d-block w-100" alt="slider">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>


                            <div class="carousel-item">
                                <img src="imgs//2.jpg" class="d-block w-100 " alt="slider">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="imgs/3.jpg" class="d-block w-100" alt="slider">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>



                </section>

            </div>
        </div>
    </section>


    </section>



    <!--Primera sección cards-->

    <section class="container mt-5">

        <h2>Recomendadas del día</h2>

        <section class="container-fluid cards-wrapper justify-content-center mt-5 row">


            <div class="container overflow-hidden text-center">
                <div class="row gy-5">


                    <?php
                    $contador = 0;
                    $result = $database->select("recetas_tb", "*");
                    for ($i = 0; $i < count($result); $i++) {

                        if ($result[$i]['destacada'] == "si") {

                            $contador += 1;

                    ?>
                            <div class="col-4  ">


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

                                        <p class="cad-text">Calificación: <?php for ($i = 0; $i < 5; $i++) {
                                                                            ?>
                                                <img src="imgs/star.png" alt="star"><?php } ?>
                                        </p>
                                        <div class="d-flex justify-content-between">


                                            <a href="detalle-receta.php?id=<?php echo $result[$i]['id'] ?>" class="btn btn-success  "> Ver
                                                mas</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    <?php

                            if ($contador == 6) {

                                break;
                            }
                        }
                    } ?>
                </div>
            </div>

        </section>



    </section>


    <!--Segunda sección cards-->

    <section class="container mt-5">

        <h2>Platillos con mejor calificación</h2>

        <section class="container-fluid cards-wrapper justify-content-center mt-5 row">

            <div class="container overflow-hidden text-center">
                <div class="row gy-5">


                    <?php
                    $contador = 0;
                    $result = $database->select("recetas_tb", "*");
                    for ($i = 0; $i < count($result); $i++) {

                        if ($result[$i]['votos'] == "5") {

                            $contador += 1;

                    ?>
                            <div class="col-4  ">


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

                                        <p class="cad-text">Calificación: <?php for ($i = 0; $i < 5; $i++) {
                                                                            ?>
                                                <img src="imgs/star.png" alt="star"><?php } ?>
                                        </p>
                                        <div class="d-flex justify-content-between">


                                            <a href="detalle-receta.php?id=<?php echo $result[$i]['id'] ?>" class="btn btn-success  "> Ver
                                                mas</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    <?php

                            if ($contador == 6) {

                                break;
                            }
                        }
                    } ?>
                </div>
            </div>



        </section>

    </section>



    <!--Footer-->


</body>

</html>


<?php
include("includes/footer.php");
?>