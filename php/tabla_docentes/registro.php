<?php 
include_once("../servidor/db.php");

$identificacion=$_POST['identificacion'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$titulo=$_POST['titulo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$f_nacimiento=$_POST['f_nacimiento'];
$eps=$_POST['eps'];
$rh=$_POST['rh'];



echo "los datos son los siguientes: <br>";



$conectar=conn();

$sql="INSERT INTO `docentes` (`identificacion`, `nombres`, `apellidos`, `titulo`, `direccion`, `telefono`, `f_nacimiento`, `eps`, `rh`) VALUES ('$identificacion', '$nombres', '$apellidos', '$titulo', '$direccion', '$telefono', '$f_nacimiento', '$eps','$rh')";

$resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL - ERROR:" .mysqli_error($conectar), E_USER_ERROR);

echo "$sql";

$resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL - ERROR:" .mysqli_error($conectar), E_USER_ERROR);

echo "$sql";
?>