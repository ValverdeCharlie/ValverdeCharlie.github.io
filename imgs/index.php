<?php
include("includes/bd.php");
include "mcript.php";

include_once("includes/header.php");


if (isset($_POST['login'])) {

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  $user = $database->select("usuario_tb", "*", ["id" => $usuario]);
  
  if (count($user) > 0) {

    if ($desencriptar($user[0]['passw'])===$password) {
      $_SESSION['login_user'] = $usuario;
      header("location: principal.php");
    } else {
      $error = "Error en la contraseña";
    }
  } else {
    $error = "Usuario invalido";
  }
}

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

                <img class="img-fluid w-100 mt-2" src="CSS/img/vegetales.jpg" alt="vegetables">

            </div>


            <div class="col-md">

                <h1 class="titulo text-center">Iniciar sesion en <span class="titulo_negrita">Organic
                    Taste</span></h1>

                <form action="inicio-session.php" method="post">


                    <div class="mb-0">
                      <label for="exampleInputEmail1" class="form-label">Usuario</label>
                      <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Su usuario no sera compartido con nadie </div>
                    </div>
                    <div class="mb-0">
                      <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                      <input type="text" class="form-control" name="password">
                    </div>
                   
                    <a name="login" id="" class="btn btn-primary btn-danger mt-3 " 
                    role="button"> Conectarse</a>
                  </form>

                  <p class="">Olvidaste tu contrseña? <a name="password" type="button" class="btn btn-link color_verde" href="recuperar.php"
                    role="button">Recuperar contraseña</a>
                  </p>
  
  
                  <p class="">No tienes una cuena? <a name="registrarse" type="button" class="btn btn-link color_verde" href="registrarse.php"
                    role="button">Registrarse</a></p>

            </div>


        </section>


    </section>






    </Section>