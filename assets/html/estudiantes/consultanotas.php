<?php

session_start();

if(!isset($_SESSION['rol'])){
    header('location: ../../../index.php');
}else{
    if($_SESSION['rol'] != 3){
        header('location: ../../../index.php');
    }
}

//conexion a bd
require('../../../php/servidor/conexionPOO.php');


//consulta las materias


$materias = $conn->prepare("select * from materias");
$materias->execute();
$materias = $materias->fetchAll();


//consulta de grados


$grados = $conn->prepare("select * from grados");
$grados->execute();
$grados = $grados->fetchAll();


//consulta las secciones


$cursos = $conn->prepare("select * from cursos");
$cursos->execute();
$cursos = $cursos->fetchAll();
?>

<!DOCTYPE html>

<html>
<head>
<title>Notas | Registro de Notas</title>
    <meta name="description" content="Registro de Notas del Centro Escolar Profesor Lennin" />
    <link rel="stylesheet" href="../../css/style.css" />

</head>
<body>
<div class="header">
        <h1>Consulta de notas- Estudiantes</h1>
</div>
<nav>
    <ul>
        <li><a href="consultanotas.php">Consulta de Notas</a> </li>
        <li class="right"><a href="../logout.php">Salir</a> </li>

    </ul>
</nav>


<div class="body">
    <div class="panel">
            <h3>Registro y Modificación Notas</h3>
           <?php
           if(!isset($_GET['consultar'])){
               ?>

            <form method="get" class="form" action="consultanotas.php">
                <label>Seleccione el Grado</label><br>
                <select name="grado" required>
                    <?php foreach ($grados as $grado):?>
                        <option value="<?php echo $grado['id'] ?>"><?php echo $grado['nombre'] ?></option>
                    <?php endforeach;?>
                </select>

                <br><br>
                <label>Seleccione la Materia</label><br>
                <select name="materias" required>
                    <?php foreach ($materias as $materia):?>
                        <option value="<?php echo $materia['id'] ?>"><?php echo $materia['nombre'] ?></option>
                    <?php endforeach;?>
                </select>

                <br><br>
                <label>Seleccione un curso</label><br>

                <?php foreach ($cursos as $curso):?>
                    <input type="radio" name="cursos" required value="<?php echo $curso['id'] ?>">Curso <?php echo $curso['curso'] ?>
                <?php endforeach;?>

                <br><br>
                <button type="submit" name="consultar" value="1">Consultar Notas</button></a>
                <br><br>
            </form>
        <?php
           }
        ?>
        <hr>

        <?php
        if(isset($_GET['consultar'])){
            $id_materia = $_GET['materias'];
            $id_grado = $_GET['grado'];
            $id_seccion = $_GET['cursos'];

            //extrayendo el numero de evaluaciones para esa materia seleccionada
            
            
            $num_eval = $conn->prepare("select cantidad_notas from materias where id = ".$id_materia);
            $num_eval->execute();
            $num_eval = $num_eval->fetch();
            $num_eval = $num_eval['cantidad_notas'];


            //mostrando el cuadro de notas de todos los alumnos del grado seleccionado
            
            $sqlalumnos = $conn->prepare("SELECT a.identificacion, a.apellidos, a.nombres, b.nota, avg(b.nota) as promedio, b.observaciones from estudiantes as a left join notas as b on a.identificacion = b.id_alumno where id_grado = ".$id_grado." and id_curso = ".$id_seccion." group by a.identificacion");
            $sqlalumnos->execute();
            $alumnos = $sqlalumnos->fetchAll();
            $num_alumnos = $sqlalumnos->rowCount();
            $promediototal = 0.0;

            ?>
            <br>
            <a href="consultanotas.php"><strong><< Volver</strong></a>
            <br>
            <br>


                <table class="table" cellpadding="0" cellspacing="0">
                    <tr>
                        <th>Identificacion</th><th>Apellidos</th><th>Nombres</th>
                        <?php
                        for($i = 1; $i <= $num_eval; $i++){
                            echo '<th>Nota '.$i .'</th>';
                        }
                        ?>
                        <th>Promedio</th>
                        <th>Observaciones</th>
                    </tr>
                    <?php foreach ($alumnos as $index => $alumno) :?>
                        <!-- campos ocultos necesarios para realizar el insert-->
                        <tr>
                            <td align="center"><?php echo $alumno['identificacion'] ?></td><td><?php echo $alumno['apellidos'] ?></td>
                            <td><?php echo $alumno['nombres'] ?></td>
                            <?php

                                //escribiendo las notas en columnas
                                $notas = $conn->prepare("select id, nota from notas where id_alumno = ".$alumno['identificacion']." and id_materia = ".$id_materia);
                                $notas->execute();
                                $notas = $notas->fetchAll();

                                foreach ($notas as $eval => $nota) {

                                    echo '<td align="center"><input type="hidden" 
                                            name="nota'.$eval.'" value="'. $nota['nota'] . '" >'. $nota['nota'] . '</td>';

                                }

                            echo '<td align="center">'.number_format($alumno['promedio'], 2).'</td>';
                            //echo '<td><a href="notas.view.php?grado='.$id_grado.'&materia='.$id_materia.'&seccion='.$id_seccion.'">Editar</a> </td>';
                            $promediototal += number_format($alumno['promedio'], 2);
                            echo '<td>'. $alumno['observaciones']. '</td>';
                            ?>

                        </tr>
                    <?php endforeach;?>
                    <tr><td colspan="3"><?php
                        for($i = 0; $i < $num_eval; $i++){
                            echo '<td><div class="text-center" id="promedio'.$i .'"><div></td>';
                        }
                        ?><td align="center"><?php echo number_format($promediototal / $num_alumnos,2) ?></td></tr>
                </table>

                <br>


        <?php
        }
        ?>
    </div>
</div>

<footer>
    <p>Insitucion Educativa Instituto Tecnico Industrial &copy; 2022</p>
</footer>

</body>
<script>
    <?php
    for($i = 0; $i < $num_eval; $i++){
        echo 'var values'.$i.' = [];
        var promedio'.$i.';
    var valor'.$i.' = 0;
    var nota'.$i.' = document.getElementsByName("nota'.$i.'");
    for(var i = 0; i < nota'.$i.'.length; i++) {
        valor'.$i.' += parseFloat(nota'.$i.'[i].value);
    }
    promedio'.$i.' = (valor'.$i.' / parseFloat(nota'.$i.'.length));
    document.getElementById("promedio'.$i.'").innerHTML = (promedio'.$i.').toFixed(2);';

    }
    ?>
</script>

</html>