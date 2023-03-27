<?php 
    include("../../php/db.php");
    $conectar=conn();

    $sql="SELECT * FROM estudiantes";
    $query=mysqli_query($conectar,$sql) or trigger_error("Query Failed! SQL - ERROR:" .mysqli_error($conectar), E_USER_ERROR);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>identificacion</th>
                                        <th>nombres</th>
                                        <th>apellidos</th>
                                        <th>telefono/celular</th>
                                        <th>jornada</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['identificacion']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['telefono/celular']?></th>
                                                <th><?php  echo $row['jornada']?></th>      
                                                <th><a href="perfil.html?id=<?php echo $row['identificacion'] ?>" class="btn btn-info">Mas Info</a></th>
                                                <th><a href="../../php/tabla_estudiantes/delete.php?id=<?php echo $row['identificacion'] ?>" class="btn btn-danger">Eliminar</a></th>                                      
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>