<?php

include("../db.php");
$con=conn();

$identificacion=$_GET['id'];

$sql="DELETE FROM docentes  WHERE identificacion='$identificacion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../../assets/html/alumno.php");
    }
?>
