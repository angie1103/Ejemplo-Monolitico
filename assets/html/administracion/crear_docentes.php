<?php 
include('../../../php/servidor/db.php');
$conectar=conn();

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../../../index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../../../index.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Docente</title>
    <link rel="stylesheet" href="../../css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
    
<main>
        <h1>Nuevo Docente</h1><br>
        <div>
            <center><h3>Informacion</h3></center>
            <form class="padre" name="form" action="../../../php/tabla_docentes/registro.php" method="post">

            <p>Identificacion:<input type="text" name="identificacion" required></p>
            <p>Nombres:<input type="text" name="nombres" required></p>
            <p>Apellidos:<input type="text" name="apellidos" required></p>
            <p>Titulo<input type="text" name="titulo" required></p>
            <p>Direccion:<input type="text" name="direccion" required></p>
            <p>telefono<input type="text" name="telefono" required></p>
            <p>f_nacimiento<input type="date" name="f_nacimiento" required></p>
            <p>eps<input type="text" name="eps" required></p>
            <p>rh<input type="text" name="rh" required></p>
            <input type="submit" value="Cargar" class="btn btn-success">
            <input type="reset" value="Restablecer" class="btn btn-dark">

            <a href="Docentes.html"><button type="button" class="btn btn-primary">Volver</button></a>
       
            
            </form>
        </div>

    </main>

</body>

</html>