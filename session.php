<?php
    include_once('includes/bd.php');
    session_start();

    $user_check= $_SESSION['login_user'];
    $result=$database->select("usuarios_tb","*",["id"=>$user_check]);

    $login_session= $result[0]['id'];

    if(!isset($_SESSION['login_user'])){
        header("location: index.php");
        die();
    }

?>