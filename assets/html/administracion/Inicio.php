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
    <link rel="stylesheet" href="../../css/estilosInicio.css">

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
    
        <h1>Plataforma Instituto Tecnico Industrial</h1>
        <div class="imgLogo">
            <img src="../../images/webschool.png">
        </div>
    </main>

    <script src="../../js/script.js"></script>
</body>
</html>