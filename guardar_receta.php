<?php

include_once("includes/bd.php");



if(isset($_POST['guardar_receta'])){

    $nombre= $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $tiempo_preparacion= $_POST['tiempo_preparacion'];
    $tiempo_coccion= $_POST['tiempo_coccion'];
    $tiempo_total= $_POST['tiempo_total'];
    $porciones= $_POST['porciones'];
    $complejidad= $_POST['complejidad'];
    $ocacion = $_POST['ocacion'];
    $categoria = $_POST['categoria'];
    $destacada= $_POST['destacada'];
    $votos= $_POST['votos'];
    $ingredientes= $_POST['ingredientes'];
    $instrucciones= $_POST['instrucciones'];
    $recetas_relacionadas= $_POST['recetas_relacionadas'];



    $imagen = $_FILES['imagen']['name'];
    $temp_p =  $_FILES['imagen']['tmp_name'];

    move_uploaded_file($temp_p, 'imgs/'.$imagen);

    $resultado=$database->insert("recetas_tb",[
        "nombre"=>$nombre,
        "tiempo_preparacion"=>$tiempo_preparacion,
        "tiempo_coccion"=>$tiempo_coccion,
        "tiempo_total"=>$tiempo_total,
        "porciones"=>$porciones,
        "complejidad"=>$complejidad,
        "ocacion"=>$ocacion,
        "categoria"=>$categoria,
        "destacada"=>$destacada,
        "votos"=>$votos,
        "descripcion"=>$descripcion,
        "ingredientes"=>$ingredientes,
        "instrucciones"=>$instrucciones,
        "recetas_relacionadas"=>$recetas_relacionadas,
        "ingredientes"=>$ingredientes,
        "imagen" => 'imgs/'.$imagen
        
    ]);

    if(!$resultado){
        die("Query failed");
    }
        $_SESSION['mensaje']="Usuario guardado correctamente!";
        $_SESSION['mensaje_tipo']='success';
        header("location: perfil-usuario.php");

}

?>