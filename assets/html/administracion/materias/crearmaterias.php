<?php 
include('../../../../php/servidor/db.php');
$conectar=conn();

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../../../../index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../../../../index.php');
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
    <link rel="stylesheet" href="../../../css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
    
<main>
        <h1>Nuevo Materia</h1><br>
        <div>
            <center><h3>Informacion</h3></center>
            <form class="padre" name="form" action="registro.php" method="post">

            <p>Nombre Asignatura:<input type="text" name="nombre" required></p>
            <p>Cantidad de notas<input type="text" name="cantidad_notas" required></p>
            <p>Grado:<select name="id_grado" required>
                    <option value="1" selected>Sexto</option>
                    <option value="2">Septimo</option>
                    <option value="3">Octavo</option>
                    <option value="4">Noveno</option>
                    <option value="5">Decimo</option>
                    <option value="6">Once</option>
                    </select><ol></ol>
            </p>
            <input type="submit" value="Cargar" class="btn btn-success">
            <input type="reset" value="Restablecer" class="btn btn-dark">
            <a href="../Asignaturas.php"><button type="button" class="btn btn-primary">Volver</button></a>
       
            
            </form>
        </div>

    </main>

</body>

</html>