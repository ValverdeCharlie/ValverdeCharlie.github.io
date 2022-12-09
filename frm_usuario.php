<?php
include_once("includes/bd.php");
include_once("session.php");
include_once("includes/header.php");
?>


<section class="seccion-perfil-receta ">
    <div class="perfil-receta-header ">
        <div class="perfil-receta-portada ">


            <br><br>

        </div>
    </div>
</section>
<section class="container-fluid mt-5">


    <section class="container row">


        <div class="col-md">

            <img class="img-fluid w-100 mt-4" src="CSS/img/vegetales.jpg" alt="vegetables">

        </div>


        <div class="col-md">

            <h1 class="titulo text-center">Registro <span class="titulo_negrita">Organic
                    Taste</span></h1>



            <main class="container p-2 align-items-center">


                <div class="row">
                    <div class="col-8">
                        <?php
                        if (isset($_SESSION['mensaje'])) {
                        ?>
                            <div class="alert alert-<?php $_SESSION['mensaje_tipo']; ?> alert-dismissible fade show" role="alert">
                                <?php $_SESSION['mensaje']; ?>
                                <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                                    <span arial-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php session_unset();
                        } ?>

                        <div class="card card-body">
                            <form action="guardar_usuarios.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="usuario" class="form-control" placeholder="usuario" autofocus required>
                                </div>

                                <div class="mb-0">
                                    <label class="form-label mt-4  mb-2 textBold">Subir imagen para el perfil de usuario</label>
                                    <input id="imagen" type="file" name="imagen">


                                </div>
                                <div class="form-group">
                                    <input type="text" name="nombre" class="form-control mt-3" placeholder="Nombre" required>
                                </div>

                                <div class="form-group">
                                    <select name="perfil" id="perfil" class="form-control" aria-label="Seleccione un perfil">
                                        <option selected>Seleccione un perfil</option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Cliente">Cliente</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="passw" class="form-control" placeholder="Password" required>
                                </div>

                                <div class="mb-0">

                                    <input type="text" class="form-control" placeholder="Confirmar contraseña" name="passw2">

                                </div>
                                <div class="form-group mt-2">
                                    <input type="text" name="apellidos" class="form-control" placeholder="apellidos" required>
                                </div>




                                <div class="mb-0">

                                    <input type="text" class="form-control" placeholder="correo electronico" name="correo_electronico">

                                </div>


                                <br><br>

                                <input type="submit" value="Guardar usuario" class="btn btn-success btn-block" name="guardar_usuarios">
                            </form>
                        </div>

                    </div>
                </div>
        </div>


        </main>
    </section>

</section>

<?php
include("includes/footer.php");
?>