<?php 
include_once("servidor/db.php");

$identificacion=$_POST['identificacion'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$f_matricula=$_POST['f_matricula'];
$no_matricula=$_POST['no_matricula'];
$folio=$_POST['folio'];
$direccion=$_POST['direccion'];
$barrio=$_POST['barrio'];
$telefono_celular=$_POST['telefono_celular'];
$rh=$_POST['rh'];
$genero=$_POST['genero'];
$dto_residencia=$_POST['dto_residencia'];
$mpio_residencia=$_POST['mpio_residencia'];
$f_nacimiento=$_POST['f_nacimiento'];
$departamento=$_POST['departamento'];
$municipio=$_POST['municipio'];
$calendario=$_POST['calendario'];
$zona=$_POST['zona'];
$institución=$_POST['institucion'];
$sede=$_POST['sede'];
$institucion_bienestar=$_POST['institucion_bienestar'];
$capacidad=$_POST['capacidad'];
$discapacidad=$_POST['discapacidad'];
$v_conflicto=$_POST['v_conflicto'];
$dpto_procedencia=$_POST['dpto_procedencia'];
$mpio_procedencia=$_POST['mpio_procedencia'];
$etnia=$_POST['etnia'];
$resguardo=$_POST['resguardo'];
$sisben=$_POST['sisben'];
$estrato=$_POST['estrato'];
$eps=$_POST['eps'];
$ars=$_POST['ars'];
$situacion_matricula=$_POST['situacion_matricula'];
$id_grado=$_POST['id_grado'];
$id_curso=$_POST['id_curso'];
$jornada=$_POST['jornada'];

$nombre_a=$_POST['nombre_a'];
$tipo_documento=$_POST['tipo_documento'];
$numero_documento=$_POST['numero_documento'];
$parentezco=$_POST['parentezco'];
$residencia_a=$_POST['residencia_a'];
$dir_residencia=$_POST['dir_residencia'];
$dir_laboral=$_POST['dir_laboral'];
$tel_laboral=$_POST['tel_laboral'];
$ceular_a=$_POST['ceular_a'];
$ocupacion=$_POST['ocupacion'];

echo "los datos son los siguientes: <br>";
echo"$nombre_a,$tipo_documento,$numero_documento,$parentezco,$residencia_a,$dir_residencia,$dir_laboral,$tel_laboral,$ceular_a
$ocupacion,$identificacion";


$conectar=conn();

$sql="INSERT INTO `estudiantes` (`identificacion`, `nombres`, `apellidos`, `f_matricula`, `no_matricula`, `folio`, `direccion`, `barrio`, `telefono_celular`, `rh`, `genero`, `dto_residencia`, `mpio_residencia`, `f_nacimiento`, `departamento`, `municipio`, `calendario`, `zona`, `institución`, `sede`, `institucion_bienestar`, `capacidad`, `discapacidad`, `v_conflicto`, `dpto_procedencia`, `mpio_procedencia`, `etnia`, `resguardo`, `sisben`, `estrato`, `eps`, `ars`, `situacion_matricula`, `id_grado`, `id_curso`, `jornada`, `nombre_a`,`tipo_documento`, `numero_documento`, `parentezco`, `residencia_a`, `dir_residencia`, `dir_laboral`, `tel_laboral`, `ceular_a`, `ocupacion`) VALUES ('$identificacion', '$nombres', '$apellidos', '$f_matricula', '$no_matricula', '$folio','$direccion', '$barrio', '$telefono_celular', '$rh', '$genero', '$dto_residencia', '$mpio_residencia', '$f_nacimiento', '$departamento', '$municipio', '$calendario', '$zona', '$institución', '$sede', '$institucion_bienestar', '$capacidad', '$discapacidad', '$v_conflicto', '$dpto_procedencia', '$mpio_procedencia', '$etnia', '$resguardo', '$sisben', '$estrato', '$eps', '$ars', '$situacion_matricula', '$id_grado','$id_curso', '$jornada','$nombre_a','$tipo_documento', '$numero_documento', '$parentezco', '$residencia_a', '$dir_residencia', '$dir_laboral', '$tel_laboral', '$ceular_a', '$ocupacion')";

$resul = mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL - ERROR:" .mysqli_error($conectar), E_USER_ERROR);


header('location: ../assets/html/administracion/matricula.php');


?>