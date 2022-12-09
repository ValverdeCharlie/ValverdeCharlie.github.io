<?php
include("includes/bd.php");
include "mcript.php";
session_start();

if (isset($_POST['login'])) {

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  $user = $database->select("usuarios_tb", "*", ["id" => $usuario]);
  
  if (count($user) > 0) {

    if ($desencriptar($user[0]['passw'])===$password) {
      $_SESSION['login_user'] = $usuario;
      header("location: perfil_usuario.php");
    } else {
      $error = "Error en la contraseña";
    }
  } else {
    $error = "Usuario invalido";
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PHP CRUD Clase</title>
  <!--BOOTSRRAP 4.5.2-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--FONT AWESOME-->
  <!--https://fontawesome.com/start/confirm-- link-->
  <script src="https://kit.fontawesome.com/7c416d91d9.js" crossorigin="anonymous"></script>
</head>

<body>



    

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

                <form action="" method="post">


                    <div class="mb-0">
                      <label for="exampleInputEmail1" class="form-label">Usuario</label>
                      <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">Su correo electronico no sera compartido con nadie </div>
                    </div>
                    <div class="mb-0">
                    <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX">Contraseña</label>
                    </div>
                   
                    <button  href="perfil_usuario.php?id=<?php echo $result[$i]['id'] ?>"class="btn btn-outline-light btn-lg px-5 btn-success mt-2" name="login" type="submit">Conectarse</button>
                  </form>

                  <p class="">Olvidaste tu contrseña? <a name="password" type="button" class="btn btn-link color_verde" href="recuperar.php"
                    role="button">Recuperar contraseña</a>
                  </p>
  
  
                  <p class="">No tienes una cuena? <a href="frm_usuario.php" class="btn-succes">Crear un usuario</a></p>

            </div>


        </section>


    </section>






    </Section>



</body>

</html>