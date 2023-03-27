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
    <link rel="stylesheet" href="../../css/estilosMatricula.css">

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
        <br>
        <div class="todo">
            <div class="logo">
                <img src="../../images/logo.png">
                <div class="prueba">
                <h2>INSTITUCION EDUCATIVA MUNICIPAL INSTITUTO TECNICO INDUSTRIAL</h2>
                <br>
                <h5>Cod. DANE: . 125290000839. NIT.890680335-8</h5>
                <h5>RESOLUCIóN # 0142 DEL 17/02/2014 SECRETARIA EDUCACIóN DE FUSAGASUGA. <br>APROBACIóN: RESOLUCIóN #0559 DEL </h5>
                <h5>16/08/2013 Y #0523 DE 05/11/2020 SECRETARIA EDUCACIóN DE FUSAGASUGA</h5>
                <center><h2>LIBRO DE MATRICULA</h2></center>
                </div>
            </div>

            <hr class="sidebar-divider my-0">

            <form class="padre" name="form" action="../../../php/registro.php" method="post">

                <ol>Identificacion:<input type="text" name="identificacion" required></ol>
                <ol>Nombres:<input type="text" name="nombres" required></ol>
                <ol>Apellidos:<input type="text" name="apellidos" required></ol>
                <ol>F. Matricula:<input type="date" name="f_matricula" required></ol>
                <ol>No. Matricula:<input type="text" name="no_matricula" required></ol>
                <ol>No. Folio:<input type="text" name="folio" required></ol>
    
    
                <h3>2. Información Básica</h3>
    
                <ol>Dirección: <input type="text" name="direccion" required></ol>
                <ol>Barrio: <input type="text" name="barrio" required></ol>
                <ol>Telefono/Celular:<input type="text" name="telefono_celular" required></ol>
                <ol>RH:<select name="rh" required>
                    <option value="0" selected>A+</option>
                    <option value="1">A-</option>
                    <option value="2">B+</option>
                    <option value="3">B-</option>
                    <option value="4">AB+</option>
                    <option value="5">AB-</option>
                    <option value="6">O+</option>
                    <option value="7">O-</option>
                    </select><ol></ol></ol>
                <ol>Género:<select name="genero" required>
                <option value="1" selected>Masculino</option>
                <option value="0">Femenino</option>
                </select><ol></ol>
                </ol>
                <ol>Dto. Residencia:<input type="text" name="dto_residencia" required></ol>
                <ol>Mpio. Residencia:<input type="text" name="mpio_residencia" required></ol>
                <ol>F. Nacimiento:<input type="date" name="f_nacimiento" required></ol>
                <ol>Departamento:<input type="text" name="departamento" required></ol>
                <ol>Municipio:<input type="text" name="municipio" required></ol>
                <ol>Calendario:<select name="calendario" required>
                    <option value="1" selected>A</option>
                    <option value="0">B</option>
                    </select><ol></ol>
                </ol>
                <ol>Zona:<select name="zona" required>
                    <option value="1" selected>Urbana</option>
                    <option value="0">Rural</option>
                    </select><ol></ol>
                </ol>
    
    
    
                <h3>3. Información Residencial</h3>
                
                <ol>Institucion:<select name="institucion" required>
                    <option value="1" selected>INSTITUTO TECNICO INDUSTRIAL</option>
                    </select><ol></ol>
                </ol>
                <ol>Sede:<select name="sede" required>
                    <option value="1" selected>TECNICO INDUSTRIAL</option>
                    <option value="0">Santander</option>
                    </select><ol></ol>
                </ol>
                <ol>Institucion de Bienestar de Origen:<input type="text" name="institucion_bienestar" required></ol>
                <ol>Capacidad:<input type="text" name="capacidad" required></ol>
                <ol>Discapacidad:<input type="text" name="discapacidad" required></ol>
                <ol>Victima de conflicto:<select name="v_conflicto" required>
                    <option value="1" selected>Si</option>
                    <option value="0">No</option>
                    </select><ol></ol>
                </ol>
                <ol>Dpto. Procedencia:<input type="text" name="dpto_procedencia" required></ol>
                <ol>Mpio. Procedencia:<input type="text" name="mpio_procedencia" required></ol>
                <ol>Etnia:<input type="text" name="etnia" required></ol>
                <ol>Resguardo:<input type="text" name="resguardo" required></ol>
                <ol>Sisben:<input type="text" name="sisben" required></ol>
                <ol>Estrato:<select name="estrato" required>
                    <option value="0" selected>1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    <option value="5">6</option>
                    </select><ol></ol></ol>
                <ol>EPS:<input type="text" name="eps" required></ol>
                <ol>ARS:<input type="text" name="ars" required></ol>
    
    
                <h3>4. Situacion Academica</h3>
    
    
                <ol>Situacion Matricula Actual:<select name="situacion_matricula" required>
                    <option value="0" selected>Matriculado</option>
                    <option value="1">No matriculado</option>
                    </select><ol></ol></ol></ol></ol>
                <ol>Grado Al cual se matricula:<select name="id_grado" required>
                    <option value="1" selected>Sexto</option>
                    <option value="2">Septimo</option>
                    <option value="3">Octavo</option>
                    <option value="4">Noveno</option>
                    <option value="5">Decimo</option>
                    <option value="6">Once</option>
                    </select><ol></ol></ol>
                </ol>
    
                <ol>Curso:<select name="id_curso" required>
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    </select><ol></ol></ol>
                </ol>
    
                <ol>Jornada:<select name="jornada" required>
                    <option value="Mañana" selected>Mañana</option>
                    <option value="Tarde">Tarde</option>
                    </select><ol></ol></ol>
                </ol>
    
    
    
                <h3>5. Informacion Acudiente</h3>
    
                <ol>Nombre: <input type="text" name="nombre_a" required></ol>
                <ol>Tipo Documento<select name="tipo_documento" required>
                    <option value="0" selected>C.C</option>
                    <option value="1">Pasaporte</option>
                    <option value="2">T.I</option>
                    </select><ol></ol></ol>
                </ol>
                <ol>Nº:<input type="text" name="numero_documento" required></ol>
                <ol>Parentezco:<input type="text" name="parentezco" required></ol>
                <ol>Tel. Residencia:<input type="text" name="residencia_a" required></ol>
                    
                <ol>Dir. Residencia:<input type="text" name="dir_residencia" required></ol>
                <ol>Dir. Laboral:<input type="text" name="dir_laboral" required></ol>
                <ol>Tel. Laboral:<input type="text" name="tel_laboral" required></ol>
                <ol>Celular:<input type="text" name="ceular_a" required></ol>
                <ol>Ocupacion:<input type="text" name="ocupacion" required></ol>
                
                <input type="submit" value="Cargar">
                <input type="reset" value="Restablecer">

                <p class="texto">Nosotros, estudiantes y padres de familia y / o acudiente, al firmar la presente matricula aceptamos las disposiciones establecidas
                por la Unidad Educativa en el manual de convivencia, en el sistema institucional de evaluación y en los planes operativos.</ol>
            <p class="texto">De igual manera declaramos que aceptamos el Proyecto Educativo Institucional (P.E.I.) y el manual de convivencia</ol>
            </form>

            
        </div>

    </main>

    <script src="../../js/script.js"></script>
</body>
</html>