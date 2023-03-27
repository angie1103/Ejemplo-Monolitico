<?php

include("../servidor/db.php");
$con=conn();

$identificacion=$_GET['id'];

$sql="DELETE FROM estudiantes  WHERE identificacion='$identificacion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../assets/html/administracion/Estudiantes.php");
    }
?>
