<?php 
include('../../../php/servidor/db.php');
$conectar=conn();

$sql="SELECT a.identificacion, a.nombres, a.apellidos, a.telefono_celular, a.jornada, b.nombre as grado from estudiantes as a inner join grados as b on a.id_grado = b.id";
    $query=mysqli_query($conectar,$sql) or trigger_error("Query Failed! SQL - ERROR:" .mysqli_error($conectar), E_USER_ERROR);
    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../../../../index.php');
    }else{
        if($_SESSION['rol'] != 2){
            header('location: ../../../../index.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Notas | Registro de Notas</title>
    <meta name="description" content="Registro de Notas del Centro Escolar Profesor Lennin" />
    <link rel="stylesheet" href="../../css/style.css" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../administracion/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../../css/estilosDatatable.css">
    <link rel="stylesheet" href="../../css/estilosMen.css">
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="../administracion/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="../administracion/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    
    
 
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
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
            
            <div>
                <center> <h1 >Lista de Estudiantes</h1><center>

            </div>   
                    <div style="height:50px"></div>
                    
                    <!--Ejemplo tabla con DataTables-->
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">        
                                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Idenficacion</th>
                                                <th>Nombres</th>
                                                <th>Telefono/Celular</th>
                                                <th>Grado</th>
                                                <th>Jornada</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                while($row=mysqli_fetch_array($query)){
                                            ?>
                                                <tr>
                                                    <td><?php  echo $row['identificacion']?></td>
                                                    <td><?php  echo $row['nombres']?>
                                                    <?php  echo $row['apellidos']?></td>
                                                    <td><?php  echo $row['telefono_celular']?></td>
                                                    <td><?php  echo $row['grado']?></td>   
                                                    <td><?php  echo $row['jornada']?></td>    
                                                    <td><center><a href="../estudiantes/perfil.php?id=<?php echo $row['identificacion'] ?>"><button class='btn btn-primary btnEditar'>Mas Info</button>
                                                    </a><a href="../../../php/tabla_estudiantes/delete.php?id=<?php echo $row['identificacion'] ?>"><button class='btn btn-danger btnBorrar'>Borrar</button></a></center></td>  
                                                </tr>
                                            <?php 
                                                }
                                            ?>
                                        </tbody>        
                                    </table>                  
                                    </div>
                                </div>
                        </div>  
                </div>      
                
                <!-- jQuery, Popper.js, Bootstrap JS -->
                <script src="../administracion/jquery/jquery-3.3.1.min.js"></script>
                <script src="../administracion/popper/popper.min.js"></script>
                <script src="../administracion/bootstrap/js/bootstrap.min.js"></script>
                
                <!-- datatables JS -->
                <script type="text/javascript" src="../administracion/datatables/datatables.min.js"></script>    
                
                <script type="text/javascript" src="../../js/datatable.js"></script>  
                
                <!-- js personalizado -->
                <script src="../../js/script.js"></script>


        </div>
</div>

<footer>

    <p>Derechos reservados &copy; 2020</p>
</footer>

</body>
</html>