<?php

include_once("includes/bd.php");
include_once("session.php");
include_once("includes/header.php");
?>

<?php

if (isset($_GET['usuario']) && isset($_SESSION['login_user'])) {
    $usuario = $_GET['usuario'];

    $result = $database->select("usuarios_tb", "*", ["id" => $usuario]);

    if (count($result) == 1) {
        $nombre = $result[0]['nombre'];
        $perfil = $result[0]['perfil'];
        $passw = $result[0]['passw'];
        $apellidos = $result[0]['apellidos'];
        
    }
}
?>
<?php

if (isset($_POST['actualizar'])) {
    $usuario = $_GET['usuario'];
    $nombre = $_POST['nombre'];
    $perfil = $_POST['perfil'];
    $passw = $_POST['passw'];
    $apellidos= $_POST['apellidos'];

    $result = $database->update("usuarios_tb", [
        "nombre" => $nombre,
        "perfil" => $perfil,
        "passw" => $passw,
        "apellidos" => $apellidos
    ], [
        "id" => $usuario
    ]);

    if (!$result) {
        die("Query failed");
    }

    $_SESSION['mensaje'] = "Usuario actualizado";
    $_SESSION['mensaje_tipo'] = "warning";
    $_SESSION['login_user'] = $login_session;

    echo "<h1> La receta se ha modificado, presione atras</h1>";
   
}
?>

<section class="seccion-perfil-receta ">
        <div class="perfil-receta-header ">
            <div class="perfil-receta-portada ">

<br>
            <a href="principal.php" class=" btn btn-danger">Atras </a>
<br>
            </div>
        </div>
    </section>

<main class="container p-2 align-items-center">
   
        <div class="card-body p-5 text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <form action="editar_usuario.php?usuario=<?php echo $_GET['usuario'] ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="usuario" disabled value="<?php echo $_GET['usuario'] ?>" class="form-control" placeholder="Cédula" autofocus required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nombre" value="<?php echo $nombre ?>" class="form-control" placeholder="Nombre" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="apellidos" value="<?php echo $apellidos ?>" class="form-control" placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <select name="perfil" value="<?php echo $perfil ?>" id="perfil" class="form-control" aria-label="Seleccione un perfil">
                                    <?php if ($perfil == "Administrador") { ?>
                                        <option selected value="Administrador">Administrador</option>
                                        <option value="Consulta">Consulta</option>
                                        <option value="Soporte">Soporte</option>
                                    <?php } else if ($perfil == "Consulta") { ?>
                                        <option selected value="Consulta">Consulta</option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Soporte">Soporte</option>
                                    <?php   } else { ?>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Consulta">Consulta</option>
                                        <option selected value="Soporte">Soporte</option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="password" name="passw" value="<?php echo $passw ?>" class="form-control" placeholder="Password" required>
                            </div>
                           <br><br>
                            <input type="submit" value="Actualizar usuario" class="btn btn-success btn-block" name="actualizar">
                            <input type="button" class="btn btn-success btn-block" onclick="history.back()" name="Atras" value="Atrás">
                        </form>
                    </div>
                </div>
            </div>
        </div>
   
</main>