<?php

session_start();

if(!isset($_SESSION['rol'])){
    header('location: ../../../index.php');
}else{
    if($_SESSION['rol'] != 3){
        header('location: ../../../index.php');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Estudiante</title>
    <link rel="stylesheet" href="../../css/estilosInterfazEstudiante.css">
</head>
<body>
    <div class="card">
        <div class="imgBx">
            <img src="../../images/logo.png">
        </div>
        <div class="contentBx">
            <h3>Visualizar perfil estudiantil</h3>
            <h2 class="price">2022</small></h2>
            <a href="perfil.php?id=1" class="buy">Ver Perfil</a>
        </div>
    </div>
    <p>-</p>
    <div class="card">
        <div class="imgBx">
            <img src="../../images/logo.png">
        </div>
        <div class="contentBx">
            <h3>Visualizar materias inscritas</h3>
            <h2 class="price"><small>8 materias disponibles</small></h2>
            <a href="consultanotas.php" class="buy">Ver Materias</a>
        </div>
    </div>
</body>
</html>