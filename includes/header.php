<?php
include_once("session.php");



   
include_once "includes/bd.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Organic Taste</title>

    <link rel="stylesheet" href="CSS/stylePrincipal.css">
    <link rel="stylesheet" href="CSS/styles_perfil.css">
    <link rel="stylesheet" href="CSS/styles-receta.css">
    <link rel="stylesheet" href="CSS/style_regitro.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    

</head>

<html>

<body>
    <header class="container-fluid ">

        <nav class="navbar navbar-expand-lg">

            <div class="container-fluid">

                <a class="navbar-brand" href="inicio.php"><img class="img-size" src="imgs/identificador.png" alt="Identificador"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="categorias.php?id=<?php echo "Todas"?>">Recetas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "desayuno"?>">Desayuno</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Bebidas"?>">Bebidas</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Entradas"?>">Entradas</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Almuerzo"?>">Almuerzo</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Postres"?>">Postres</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Sopas"?>">Sopas</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ocasiones
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Cumpleaños"?>">Cumpleaños</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Dia del padre"?>">Día del padre</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Dia de la madre"?>">Día de la madre</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Dia del niño"?>">Día del niño</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "navidad"?>">Navidad</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Semana Santa"?>">Semana Santa</a></li>
                                <li><a class="dropdown-item" href="categorias.php?id=<?php echo "Verano"?>">Verano</a></li>

                            </ul>
                             
                        </li>

                        <li class="nav-item">
 <a class="nav-link active text-light" aria-current="page" href="perfil_Usuario.php">Perfil</a>
 </li>
                    </ul>
                    
                    
                    
                          
                        
                <div class="col-md-4 offset-md-4"><h2 style="color:white">Usuario: <?php echo $login_session; ?></h2>

                
                    <h3><a href="logout.php">Cerrar sesion</a></h3>
                </div>
                    </a>

                </div>
            </div>
        </nav>


    </header>