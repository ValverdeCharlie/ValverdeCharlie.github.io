<?php

include_once("includes/bd.php");
include_once ("session.php");
include_once "mcript.php";

if(isset($_POST['guardar_usuarios'])){

    $nombre= $_POST['nombre'];
    $apellidos= $_POST['apellidos'];
    $correo_electronico= $_POST['correo_electronico'];
    $usuario= $_POST['usuario'];
    $perfil= $_POST['perfil'];
    $passw= $encriptar($_POST['passw']);


  

    $resultado=$database->insert("usuarios_tb",[
        "id"=>$usuario,
        "nombre"=>$nombre,
        "perfil"=>$perfil,
        "passw"=>$passw,
        "correo_electronico" => $correo_electronico,
        
        "apellidos"=>$apellidos,
       
    ]);

    if(!$resultado){
        die("Query failed");
    }
        $_SESSION['mensaje']="Usuario guardado correctamente!";
        $_SESSION['mensaje_tipo']='success';
        header("location: index.php");

}

?>