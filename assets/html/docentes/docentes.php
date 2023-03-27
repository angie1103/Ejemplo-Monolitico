<?php

    
session_start();

if(!isset($_SESSION['rol'])){
    header('location: ../../../index.php');
}else{
    if($_SESSION['rol'] != 2){
        header('location: ../../../index.php');
    }
}
    
?>


<!DOCTYPE html>
<html>
<head>
<title>Inicio | Registro de Notas</title>
    <meta name="description" content="Registro de Notas del Centro Escolar Profesor Lennin" />
    <link rel="stylesheet" href="../../css/style.css" />

</head>
<body>
<div class="header">
        <h1>Registro de Notas - Centro Escolar "Profe Lennin"</h1>
</div>
<nav>
    <ul>
        <li class="active"><a href="docentes.php">Inicio</a> </li>
        
        <li><a href="ingresonotas.php">Registro de Notas</a> </li>
        <li><a href="consultanotas.php">Consulta de Notas</a> </li>
        <li class="right"><a href="../logout.php">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
           <h1 class="text-center">Centro Escolar "Profe Lennin"</h1>
        <br>
        <hr>
        <p class="text-center"><strong>Integrantes GRUPO 5</strong><br><br>José Saúl Rodríguez Guardado<br>Eduardo Antonio	Ramirez Carias<br>Vladimir Alcides	Salguero Erazo</p>
        <br>
        </div>
</div>

<footer>

    <p>Derechos reservados &copy; 2020</p>
</footer>

</body>

</html>