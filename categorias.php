<?php
include_once("includes/bd.php");
include_once("session.php");
include_once("includes/header.php");


if (isset($_GET['id'])) {

    $categoria = $_GET['id'];
}

?>

<body>

    <section class="container">
        <?php
        if ($categoria === "Todas") {

        ?>

        <?php } else {

        ?>

            <h1 class="text-center m-5">Las recetas de <?php echo $categoria ?></h1>

        <?php
        }
        ?>

        <div class="container overflow-hidden text-center mt-4">

            <div class="row gy-5">

                <?php

                $result = $database->select("recetas_tb", "*");

                for ($i = 0; $i < count($result); $i++) {

                    if ($result[$i]['categoria'] == $categoria || $result[$i]['ocacion'] == $categoria) {

                ?>

                        <div class="col-6">

                            <div class="card">
                                <div class="card-body d-flex flex-row">
                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fca%2F3c%2F2c%2Fca3c2c184846ed27a5637476b3977087.png&f=1&nofb=1&ipt=3454bd472fa884defdb0c7ad9a53d85aa703da98643671a463063597fa299de9&ipo=images" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
                                    <div>
                                        <h2 class="card-title font-weight-bold mb-2"><?php echo $result[$i]['nombre'] ?></h2>
                                    </div>
                                </div>
                                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                    <img class="img-fluid" src="<?php echo $result[$i]['imagen'] ?>" alt="Card image cap" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <h5>Calificación: 5</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a name="" id="" class="btn btn-primary btn-success " href="detalle-receta.php" role="button"> ver mas</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php
                    } else if ($categoria == "Todas") {

                    ?>

                        <div class="col-6">

                            <div class="card">
                                <div class="card-body d-flex flex-row">
                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.pinimg.com%2Foriginals%2Fca%2F3c%2F2c%2Fca3c2c184846ed27a5637476b3977087.png&f=1&nofb=1&ipt=3454bd472fa884defdb0c7ad9a53d85aa703da98643671a463063597fa299de9&ipo=images" class="rounded-circle me-3" height="50px" width="50px" alt="avatar" />
                                    <div>
                                        <h2 class="card-title font-weight-bold mb-2"><?php echo $result[$i]['nombre'] ?></h2>
                                    </div>
                                </div>
                                <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
                                    <img class="img-fluid" src="<?php echo $result[$i]['imagen'] ?>" alt="Card image cap" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <h5>Calificación: 5</h5>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <a name="" id="" class="btn btn-primary btn-success " href="detalle-receta.php" role="button"> ver mas</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>



    </section>

</body>

</html>

<!--Footer-->
<?php
include("includes/footer.php");
?>