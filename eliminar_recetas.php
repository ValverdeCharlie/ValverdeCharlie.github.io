<?php
    include_once("includes/bd.php");
   

    if(isset($_GET['id'])){
        
        $result= $database->delete("recetas_tb",["id"=>$_GET['id']]);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['mensaje']=" receta eliminada correctamente!";
        $_SESSION['mensaje_tipo']="danger";

        header("location:lista-recetas.php");
    }
?>