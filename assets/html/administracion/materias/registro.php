<?php 
include_once("../../../../php/servidor/db.php");

$nombre=$_POST['nombre'];
$cantidad_notas=$_POST['cantidad_notas'];
$id_grado=$_POST['id_grado'];

$conectar=conn();

$sql="INSERT INTO `materias` (`nombre`, `cantidad_notas`, `id_grado`) VALUES ('$nombre', '$cantidad_notas', '$id_grado')";

$resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL - ERROR:" .mysqli_error($conectar), E_USER_ERROR);
header('location:crearmaterias.php')
?>