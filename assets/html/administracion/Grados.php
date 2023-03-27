<?php 
include('../../../php/servidor/db.php');
$conectar=conn();

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Tecnico Industrial</title>

    <link rel="stylesheet" href="../../css/estilosMen.css">
    <link rel="stylesheet" href="../../css/estilosAsignatura.css">

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
                        <a href="Asignaturas.php">
                            <span class="icon"><i class="fa-solid fa-shapes"></i></span>
                            <span class="text">Asignaturas</span>
                        </a>
                    </li>
                    <li>
                        <a href="Grados.php">
                            <span class="icon"><i class="fa-solid fa-book" title="Cursos"></i></span>
                            <span class="text">Grados</span>
                        </a>
                    </li>
                    <li>
                        <a href="Docentes.php">
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
                        <a href="../logout.php">
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
        <h1>Lista de los grupos</h1><br>
        <p>Organizado de sexto a once</p> <br>
        <h1>Grados</h1>

        <div class="container__box">
            
            <div class="box">
                <a href="consulta_grados.php?id_grado=1" class="btn btn-info"><i class="fa-solid fa-6"></i></a>
                
                <h5>Sexto</h5>
                <h4>Sexto</h4>
            </div>
            <div class="box">
            <a href="consulta_grados.php?id_grado=2" class="btn btn-info"><i class="fa-solid fa-7"></i></a>
                
                <h5>Septimo</h5>
                <h4>Septimo</h4>
            </div>
            <div class="box">
            <a href="consulta_grados.php?id_grado=3" class="btn btn-info"><i class="fa-solid fa-8"></i></a>
                
                <h5>Octavo</h5>
                <h4>Octavo</h4>
            </div>
            <div class="box">
            <a href="consulta_grados.php?id_grado=4" class="btn btn-info"><i class="fa-solid fa-9"></i></a>
                
                <h5>Noveno</h5>
                <h4>Noveno</h4>
            </div>
            <div class="box">
            <a href="consulta_grados.php?id_grado=5" class="btn btn-info"><i class="fa-solid fa-1"><i class="fa-solid fa-0"></i></i></a>
                
                <h5>Decimo</h5>
                <h4>Decimo</h4>
            </div>
            <div class="box">
            <a href="consulta_grados.php?id_grado=6" class="btn btn-info"><i class="fa-solid fa-1"><i class="fa-solid fa-1"></i></i></a>
                
                <h5>Once</h5>
                <h4>Once</h4>
            </div>
        </div>
    </main>

    <script src="../../js/script.js"></script>
</body>
</html>