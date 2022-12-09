<?php
include_once("includes/bd.php");
include_once("session.php");
include_once("includes/header.php");
?>


<section class="seccion-perfil-receta">
    <div class="perfil-receta-header ">
        <div class="perfil-receta-portada ">


            <h1 class="text-center text-dark">Lista de Recetas</h1>

        </div>
    </div>
</section>

<section class="container-fluid mt-5">

    <div class="container">

        <table class="table">
            <thead>
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Calificación</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Ocasión de la receta</th>
                    <th>


                        <a class="btn btn-primary   col-7 " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg> Agregar </a>

                    </th>


                </tr>
            </thead>
            <tbody>
            <?php
            $result = $database->select("recetas_tb", "*");
            for ($i = 0; $i < count($result); $i++) {   ?>
                <tr>
                    <td><?php echo $result[$i]['id'] ?></td>
                    <td><?php echo $result[$i]['nombre'] ?></td>
                    <td><?php echo $result[$i]['votos'] ?></td>
                    <td><?php echo $result[$i]['categoria'] ?></td>
                    <td><?php echo $result[$i]['ocacion'] ?></td>
                    <td>
                                    <a href="modificar_recetas.php?id=<?php echo $result[$i]['id']; ?>"  class="btn btn-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
  <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
</svg>
                                    </a>
                                </td>
                                <td>
                                    <a href="eliminar_recetas.php?id=<?php echo $result[$i]['id']; ?>" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg>
                                    </a>
                                </td>

                </tr>

            <?php

            }
            ?>
            </tbody>
        </table>


    </div>

</section>












<div class="modal fade modal-lg" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-muted" id="staticBackdropLabel">Registro de recetas nuevas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">








                <section class="seccion-perfil-receta">

                    <div class="perfil-receta-header">
                        <div class="perfil-receta-portada">
                            <h1 class="mt-5">Ingrese los siguientes datos</h1>


                        </div>
                    </div>
                </section>









                <section class="seccion-perfil-receta container ">


                    <div class="perfil-receta-bio">


                        <main class="centrar-form">


                            <form action="guardar_receta.php" method="post" enctype="multipart/form-data">


                                <dl>
                                    <dd><label for="validationCustomNombre" class="form-label mt-4 mb-0 textBold">Imagen de receta:</label> </dd>
                                    <dt> <input id="imagen" type="file" name="imagen"></dt>

                                    <dd><label for="validationCustomNombre" class="form-label mt-4 mb-0 textBold">Nombre de la receta:</label> </dd>
                                    <dt> <input type="text" name="nombre" class="form-control" placeholder="Nombre" required></dt>

                                    <dd><label for="validationCustomDescripcion" class="form-label mt-4 mb-0 textBold">Descripción:</label></dd>
                                    <dt> <textarea class="form-textarea form-control" name="descripcion" id="comments" placeholder=Descripcion" cols="30" rows="3"></textarea></dt>

                                    <dd><label for="validationCustomTiempo" class="form-label mt-4 mb-0 textBold">Tiempo de preparación:</label></dd>
                                    <dt> <input type="text" class="form-control" name="tiempo_preparacion" placeholder="ejemplo:10,20,30,40" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required></dt>

                                    <dd><label for="validationCustomTiempoPreparacion" class="form-label mt-4 mb-0 textBold">Tiempo de cocción:</label></dd>
                                    <dt> <input type="text" class="form-control" name="tiempo_coccion" id="validationCustomCoccion" placeholder="ejemplo:10,20,30,40" placeholder="ej:30 " aria-describedby="inputGroupPrepend" required></dt>

                                    <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 textBold">Tiempo de total:</label></dd>
                                    <dt> <input type="text" class="form-control" name="tiempo_total" id="validationCustomUsername" placeholder="ejemplo:10,20,30,40" aria-describedby="inputGroupPrepend" required></dt>




                                    <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 textBold">Lista de ingredientes:</label></dd>
                                    <dt> <textarea class="form-textarea form-control" name="ingredientes" id="ingredientes" placeholder="lista de ingredientes" cols="30" rows="5"></textarea></dt>

                                    <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 textBold">Instrucciones para la preparación:</label></dd>
                                    <dt><textarea class="form-textarea form-control" name="instrucciones" id="instrucciones" placeholder="instrucciones" cols="30" rows="10"></textarea></dt>

                                    <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 textBold">Recetas relacionadas:</label></dd>
                                    <dt> <input type="text" class="form-control" name="recetas_relacionadas" id="recetas_relacionadas" placeholder="recetas relacionadas" aria-describedby="inputGroupPrepend" required></dt>

                                    <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 textBold">Porciones:</label></dd>
                                    <dt> <input type="text" class="form-control" name="porciones" id="porciones" aria-describedby="inputGroupPrepend" placeholder="ejemplo:1,2,3,4,5" required></dt>

                                    <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 textBold">Nivel de complejidad:</label></dd>
                                    <dt> <input type="text" class="form-control" name="complejidad" id="complejidad" aria-describedby="inputGroupPrepend" placeholder="Facil, Media, Dificil" required></dt>

                                    <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 textBold">Ocasión para la receta:</label></dd>
                                    <dt> <select class="form-select" name="ocacion" id="ocacion" required>
                                            <option selected disabled value="">Todas</option>
                                            <option>Cumpleaños</option>
                                            <option>Dia del padre</option>
                                            <option>Dia de la madre</option>
                                            <option>Dia del niño</option>
                                            <option>Navidad</option>
                                        </select>
                                    </dt>

                                    <dd><label for="validationCustomTiempoTotal" class=" mt-4 mb-0 form-label textBold">Categoría de la receta:</label></dd>
                                    <dt> <select class="form-select" name="categoria" id="categoria" required>
                                            <option selected disabled value="">Desayuno</option>
                                            <option>Almuerzo</option>
                                            <option>Postres</option>
                                            <option>Sopas</option>
                                            <option>Bebidas</option>
                                            <option>Entradas</option>
                                        </select>
                                        </dt>

                                    <dd><label for="validationCustomTiempoTotal" class="form-label mt-4 mb-0 textBold">Cantidad de votos para la receta:</label></dd>
                                    <dt> <input type="text" class="form-control" name="votos" id="votos" aria-describedby="inputGroupPrepend" placeholder="ejemplo:1,2,3,4,5" required>


                                    <dd><label for="validationCustomTiempoTotal" class="form-label  mt-4 mb-0 textBold"> Receta destacada:</label></dd>
                                    <dt>
                                    <select class="form-select" name="destacada" id="destacada" required>
                                            <option selected disabled value="">Elija si o no</option>
                                            <option>si</option>
                                            <option>no</option>
                                            
                                        </select>
                                    </dt>

                                </dl>

                                <div><input class="mt-5" name="guardar_receta" id="guardar_receta" type="submit" value="Guardar receta" /></div>
                            </form>


                        </main>

                        </h3>
                    </div>


                </section>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>

        </div>
</div></div>






















        <section style="height: 50vh">.</section>



        <?php
include("includes/footer.php");
?>