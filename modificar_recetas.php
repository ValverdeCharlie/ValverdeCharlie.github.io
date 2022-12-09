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


        $nombre = $result[0]['nombre'];

        $descripcion = $result[0]['descripcion'];

        $tiempo_preparacion = $result[0]['tiempo_preparacion'];
        $tiempo_coccion = $result[0]['tiempo_coccion'];
        $tiempo_total = $result[0]['tiempo_total'];
        $porciones = $result[0]['porciones'];
        $complejidad = $result[0]['complejidad'];
        $ocacion = $result[0]['ocacion'];
        $categoria = $result[0]['categoria'];
        $destacada = $result[0]['destacada'];
        $votos = $result[0]['votos'];

        $ingredientes = $result[0]['ingredientes'];
        $instrucciones = $result[0]['instrucciones'];

        $recetas_relacionadas = $result[0]['recetas_relacionadas'];
    }
}
?>


<?php

if (isset($_POST['actualizar'])) {


    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $tiempo_preparacion = $_POST['tiempo_preparacion'];
    $tiempo_coccion = $_POST['tiempo_coccion'];
    $tiempo_total = $_POST['tiempo_total'];
    $porciones = $_POST['porciones'];
    $complejidad = $_POST['complejidad'];
    $ocacion = $_POST['ocacion'];
    $categoria = $_POST['categoria'];
    $destacada = $_POST['destacada'];
    $votos = $_POST['votos'];
    $ingredientes = $_POST['ingredientes'];
    $instrucciones = $_POST['instrucciones'];
    $recetas_relacionadas = $_POST['recetas_relacionadas'];





    $result = $database->update("recetas_tb", [



        "nombre" => $nombre,
        "tiempo_preparacion" => $tiempo_preparacion,
        "tiempo_coccion" => $tiempo_coccion,
        "tiempo_total" => $tiempo_total,
        "porciones" => $porciones,
        "complejidad" => $complejidad,
        "ocacion" => $ocacion,
        "categoria" => $categoria,
        "destacada" => $destacada,
        "votos" => $votos,
        "descripcion" => $descripcion,
        "ingredientes" => $ingredientes,
        "instrucciones" => $instrucciones,
        "recetas_relacionadas" => $recetas_relacionadas,
        "ingredientes" => $ingredientes,



    ], [
        "id" => $id
    ]);




    echo "<h1> La receta se ha modificado, presione atras</h1>";
}

?>

<section class="seccion-perfil-receta">
    <div class="perfil-receta-header ">
        <div class="perfil-receta-portada ">


            <br><br>

        </div>
    </div>
</section>




<main class="container col-12 align-items-center mt-3">
    <section class="card text-white col-12 " style="border-radius:1rem;">
        <div class="card-body p-5 text-center col-12 ">
            <div class="col-12">
                <div class="col-12">


                    <div class="container text-center">
                        <div class="row">
                            <div class="col">
                                <h3 class="text-primary ">Modifique los datos del producto </h3>
                            </div>
                            <div class="col">
                                <a href="lista-recetas.php" class=" m-4 btn btn-danger">Atras </a>
                            </div>
                        </div>

                        <br><br>




                        <form action="modificar_recetas.php?id=<?php echo $_GET['id'] ?>" method="post">

                            <div class="form-group">
                                <input type="text" name="id" disabled value="<?php echo $_GET['id'] ?>" class="text-dark  form-control" placeholder="id" autofocus required>
                            </div>
                            <br>





                            <dd><label class="form-label text-dark  mt-4 mb-0 textBold">Nombre de la receta:</label> </dd>
                            <dt> <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $nombre ?>" required></dt>

                            <dd><label class="form-label text-dark  mt-4 mb-0 textBold">Descripción:</label></dd>
                            <dt> <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" value="<?php echo $descripcion ?>" cols="30" rows="3" required></dt>


                            <dd><label class="form-label text-dark  mt-4 mb-0 textBold">Tiempo de preparación:</label></dd>
                            <dt> <input type="text" class="form-control" name="tiempo_preparacion" value="<?php echo $tiempo_preparacion ?>" placeholder="ejemplo:10,20,30,40" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required></dt>

                            <dd><label class="text-dark  form-label mt-4 mb-0 textBold">Tiempo de cocción:</label></dd>
                            <dt> <input type="text" class="form-control" name="tiempo_coccion" value="<?php echo $tiempo_coccion ?>" id="validationCustomCoccion" placeholder="ejemplo:10,20,30,40" placeholder="ej:30 " aria-describedby="inputGroupPrepend" required></dt>

                            <dd><label class="text-dark  form-label mt-4 mb-0 textBold">Tiempo de total:</label></dd>
                            <dt> <input type="text" class="form-control" name="tiempo_total" value="<?php echo $tiempo_total ?>" id="validationCustomUsername" placeholder="ejemplo:10,20,30,40" aria-describedby="inputGroupPrepend" required></dt>




                            <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 text-dark  textBold">Lista de ingredientes:</label></dd>
                            <dt>
                            <dt> <input type="text" name="ingredientes" class="form-control" placeholder="Ingredientes" value="<?php echo $ingredientes ?>" cols="30" rows="3" required></dt>

                            <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 text-dark  textBold">Instrucciones para la preparación:</label></dd>
                            <dt> <input type="text" name="instrucciones" class="form-control" placeholder="Instrucciones" value="<?php echo $instrucciones ?>" cols="30" rows="3" required></dt>

                            <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 text-dark  textBold">Recetas relacionadas:</label></dd>
                            <dt> <input type="text" class="form-control" name="recetas_relacionadas" id="recetas_relacionadas" value="<?php echo $recetas_relacionadas ?>" placeholder="recetas relacionadas" aria-describedby="inputGroupPrepend" required></dt>

                            <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 text-dark  textBold">Porciones:</label></dd>
                            <dt> <input type="text" class="form-control" name="porciones" value="<?php echo $porciones ?>" id="porciones" aria-describedby="inputGroupPrepend" placeholder="ejemplo:1,2,3,4,5" required></dt>

                            <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 text-dark  textBold">Nivel de complejidad:</label></dd>
                            <dt> <input type="text" class="form-control" name="complejidad" value="<?php echo $complejidad ?>" id="complejidad" aria-describedby="inputGroupPrepend" placeholder="Facil, Media, Dificil" required></dt>


                            <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 text-dark  textBold">Ocasión para la receta:</label></dd>
                            <dt> <select class="form-select" name="ocacion" value="<?php echo $ocacion ?>" id="ocacion" >
                                    <?php if ($ocacion == "cumpleaños") {  ?>

                                        <option selected value="Cumpleaños">Cumpleaños</option>
                                        <option value="Dia del padre">Dia del padre</option>
                                        <option value="Dia de la madre">Dia de la madre</option>
                                        <option value="Dia del niño">Dia del niño</option>
                                        <option value="Navidad">Navidad</option>


                                    <?php } else if ($ocacion == "Dia del padre") { ?>
                                        <option selected value="Dia del padre">Dia del padre</option>
                                        <option value="Cumpleaños">Cumpleaños</option>

                                        <option value="Dia de la madre">Dia de la madre</option>
                                        <option value="Dia del niño">Dia del niño</option>
                                        <option value="Navidad">Navidad</option>


                                    <?php } else if ($ocacion == "Dia de la madre") { ?>

                                        <option value="Cumpleaños">Cumpleaños</option>
                                        <option value="Dia de padre">Dia del padre</option>
                                        <option selected value="Dia de la madre">Dia de la madre</option>
                                        <option value="Dia del niño">Dia del niño</option>
                                        <option value="Navidad">Navidad</option>

                                    <?php } else if ($ocacion == "Dia del niño") { ?>

                                        <option value="Cumpleaños">Cumpleaños</option>
                                        <option value="Dia de padre">Dia del padre</option>
                                        <option value="Dia de la madre">Dia de la madre</option>
                                        <option selected value="Dia del niño">Dia del niño</option>
                                        <option value="Navidad">Navidad</option>

                                    <?php } else if ($ocacion == "Navidad") { ?>

                                        <option value="Cumpleaños">Cumpleaños</option>
                                        <option value="Dia de padre">Dia del padre</option>
                                        <option value="Dia de la madre">Dia de la madre</option>
                                        <option value="Dia del niño">Dia del niño</option>
                                        <option selected value="Navidad">Navidad</option>
                                    <?php } ?>

                                </select>
                            </dt>


                            <dd><label for="validationCustomTiempoTotal" class=" mt-4 mb-0 form-label text-dark  textBold">Categoría de la receta:</label></dd>
                            <dt> <select class="form-select" name="categoria" value ="<?php echo $categoria ?>" id="categoria">
                                    <?php if ($categoria === "Desayuno") {  ?>
                                        <option selected value="Desayuno">Desayuno</option>
                                        <option value="Almuerzo">Almuerzo</option>
                                        <option value="Postres">Postres</option>
                                        <option value="Sopas">Sopas</option>
                                        <option value="Bebidas">Bebidas</option>
                                        <option value="Entradas">Entradas</option>


                                    <?php } else if ($categoria == "Almuerzo") {  ?>
                                        <option selected value="Almuerzo">Almuerzo</option>
                                        <option value="Desayuno">Desayuno</option>
                                        <option value="Postres">Postres</option>
                                        <option value="Sopas">Sopas</option>
                                        <option value="Bebidas">Bebidas</option>
                                        <option value="Entradas">Entradas</option>


                                    <?php } else if ($categoria == "Postres") {  ?>
                                        <option value="Desayuno">Desayuno</option>
                                        <option value="Almuerzo">Almuerzo</option>
                                        <option selected value="Postres">Postres</option>
                                        <option value="Sopas">Sopas</option>
                                        <option value="Bebidas">Bebidas</option>
                                        <option value="Entradas">Entradas</option>


                                    <?php } else if ($categoria == "Sopas") {  ?>
                                        <option value="Desayuno">Desayuno</option>
                                        <option value="Almuerzo">Almuerzo</option>
                                        <option value="Postres">Postres</option>
                                        <option selected value="Sopas">Sopas</option>
                                        <option value="Bebidas">Bebidas</option>
                                        <option value="Entradas">Entradas</option>


                                    <?php } else if ($categoria == "Bebidas") {  ?>
                                        <option value="Desayuno">Desayuno</option>
                                        <option value="Almuerzo">Almuerzo</option>
                                        <option value="Postres">Postres</option>
                                        <option value="Sopas">Sopas</option>
                                        <option selected value="Bebidas">Bebidas</option>
                                        <option value="Entradas">Entradas</option>

                                    <?php } else if ($categoria == "Entradas") {  ?>
                                        <option value="Desayuno">Desayuno</option>
                                        <option value="Almuerzo">Almuerzo</option>
                                        <option value="Postres">Postres</option>
                                        <option value="Sopas">Sopas</option>
                                        <option value="Bebidas">Bebidas</option>
                                        <option selected value="Entradas">Entradas</option>


                                    <?php } ?>




                                </select>
                            </dt>


                            <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 text-dark  textBold">Cantidad de votos para la receta:</label></dd>
                            <dt> <input type="text" class="form-control" value="<?php echo $votos ?>" name="votos" id="votos" aria-describedby="inputGroupPrepend" placeholder="ejemplo:1,2,3,4,5" required>


                            <dd><label for="validationCustomTiempoTotal" class="form-label  mt-4 mb-0 text-dark  textBold"> Receta destacada:</label></dd>

                            <dt> <select class="form-select" name="destacada" value="<?php echo $destacada ?>" id="destacada" required>
                                    <?php if ($destacada == "si") {  ?>
                                        <option selected value="si">Si</option>
                                        <option value="no">No</option>



                                    <?php } else if ($destacada == "no") {  ?>

                                        <option selected value="no">No</option>
                                        <option value="si">Si</option>



                                    <?php }  ?>

                                    </dl>

                                    <br><br>
                        </form>
                        <br><br>
                        <input type="submit" value="Actualizar Receta" class="btn btn-success btn-block mt-4" name="actualizar">
                        <input type="button" class="btn btn-success btn-block mt-4" onclick="history.back()" name="Atras" value="Atrás">

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<?php


include("includes/footer.php");

?>