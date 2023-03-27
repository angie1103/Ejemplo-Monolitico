<?php 

session_start();

include 'conexion_be.php';
$boton = $_POST['boton'];

if($boton == "a"){

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
}

if(isset($correo) && isset($contrasena)){
    
    $db = new Database();
    $query = $db->connect()->prepare('SELECT*FROM usuarios WHERE correo = :correo AND contrasena = :contrasena');
    $query->execute(['correo' => $correo, 'contrasena' => $contrasena]);

    $row = $query->fetch(PDO::FETCH_NUM);
    if($row == true){
        // validar rol
        $rol = $row[5];
        $_SESSION['rol'] = $rol;

        switch($_SESSION['rol']){
            case 1:
                header('location: ../../assets/html/administracion/inicio.php');
            break;

            case 2:
            header('location: ../../assets/html/docentes/docentes.php');
            break;

            default:

            case 3:
            header('location:  ../../assets/html/estudiantes/interfaz_estudiantes.php');
            break;
        }
    }else{
        
        echo'
    
        <script>
            alert("Datos de acceso incorrectos...");
            window.location = "../../index.php";
        </script>
    
        ';
    }

}


}//if a


if($boton == "b"){

    echo '
    
    <script>
        window.location = "../assets/recovery.php";
    </script>

    ';

    exit();

}

?>

