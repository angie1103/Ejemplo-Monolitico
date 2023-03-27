<?php 
include('../../../php/servidor/db.php');
$conectar=conn();

$grado=$_GET['id_grado'];

$sql="SELECT a.identificacion, a.nombres, a.apellidos, a.telefono_celular, a.jornada, b.nombre as grado from estudiantes as a inner join grados as b on a.id_grado = b.id WHERE id_grado='$grado'";
    $query=mysqli_query($conectar,$sql) or trigger_error("Query Failed! SQL - ERROR:" .mysqli_error($conectar), E_USER_ERROR);

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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Instituto Tecnico Industrial</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="../../css/estilosDatatable.css">
    <link rel="stylesheet" href="../../css/estilosMen.css">
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    
    
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    <div class="navigation">
            <div class="menu_toggle"></div>
            <div class="profile">
                <div class="imgBx">
                    <img src="../../images/user.jpg">
                </div>
            </div>
            <ul class="menu">
                <li>
                    <a href="Inicio.php">
                        <span class="icon"><i class="fa-solid fa-house"></i></span>
                        <span class="text">Inicio</span>
                    </a>
                </li>
                <li>
                    <a href="Matricula.php">
                        <span class="icon"><i class="fa-solid fa-address-card"></i></span>
                        <span class="text">Matricular</span>
                    </a>
                </li>
                <li>
                    <a href="Grados.html">
                        <span class="icon"><i class="fa-solid fa-book" title="Cursos"></i></span>
                        <span class="text">Grados</span>
                    </a>
                </li>
                <li>
                    <a href="Docentes.html">
                        <span class="icon"><i class="far fa-id-badge" title="Docentes"></i></span>
                        <span class="text">Docentes</span>
                    </a>
                </li>
                <li>
                    <a href="Estudiantes.php">
                        <span class="icon"><i class="fa-solid fa-graduation-cap" title="Estudiantes"></i></span>
                        <span class="text">Estudiantes</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa-solid fa-right-from-bracket" title="Cerrar Sesión"></i></span>
                        <span class="text">Cerrar Sesión</span>
                    </a>
                </li>
            </ul>
        </div>
        <script>
            const menu_toggle = document.querySelector('.menu_toggle');
            const navigation = document.querySelector('.navigation');
            menu_toggle.onclick = function(){
                navigation.classList.toggle('active')
            }
        </script>

    
    <main>

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
                  
    </main>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="../../js/datatable.js"></script>  


    <script src="../../js/script.js"></script>
</body>
</html>