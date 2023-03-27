<?php 
include('../../../php/servidor/db.php');
$conectar=conn();

$identificacion=$_GET['id'];

$sql="SELECT * FROM docentes WHERE identificacion='$identificacion'" ;
    $query=mysqli_query($conectar,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/estilosPerfil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="../../images/user.jpg" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="fa-solid fa-camera"></i>
                    </button>
                </div>
                <button type="button" class="boton-portada">
                    <i class="fa-solid fa-camera"></i> Cambiar fondo
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <h3 class="titulo"><?php echo $row['nombres'], " ", $row['apellidos'] ?></h3>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> Documento: <?php echo $row['identificacion'] ?></li>
                    <li><i class="icono fas fa-phone-alt"></i> Telefono: <?php echo $row['telefono'] ?></li>
                    <li><i class="icono fas fa-briefcase"></i> Titulo: <?php echo $row['titulo'] ?></li>
                    <li><i class="icono fas fa-building"></i> RH: <?php echo $row['rh'] ?></li>
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-marker-alt"></i> Direccion: <?php echo $row['direccion'] ?></li>
                    <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento: <?php echo $row['f_nacimiento'] ?></li>
                    <li><i class="icono fas fa-share-alt"></i> EPS: <?php echo $row['eps'] ?></li>
                </ul>
            </div>
            <div class="perfil-usuario-footer">
            <div class="menu-perfil">
                <ul>
                    <a href="datatable-main/index.html" title=""><i class="icono-perfil fas fa-bullhorn"></i> Materias</a>
                    <a href="#" title=""><i class="icono-perfil fas fa-info-circle"></i> Notas</a>
                    <a href="../administracion/index.php?id=<?php echo $identificacion ?>" title=""><i class="icono-perfil fas fa-grin"></i> Documentos</a>
                    <a href="#" title=""><i class="icono-perfil fas fa-camera"></i> Fotos</a>
                </ul>
            </div>
            <div class="redes-sociales">
                <a href="../administracion/Inicio.php" class="btn btn-primary">Volver</a>
            </div>
        </div>
        </div>
    </section>

<div class="mis-redes" style="display: block;position: fixed;bottom: 1rem;left: 1rem; opacity: 0.5; z-index: 1000;">
    <p style="font-size: .75rem;">Apock graficos</p>
    <div>
        <a target="_blank" href="https://www.facebook.com/ApockGraficos"><i class="fab fa-facebook-square"></i></a>
        <a target="_blank" href="https://twitter.com/ApockGraficos"><i class="fab fa-twitter"></i></a>
        <a target="_blank" href="https://www.instagram.com/ApockGraficos"><i class="fab fa-instagram"></i></a>
        <a target="_blank" href="https://www.youtube.com/channel/UC15DkMZQ80aoW_Rqk4n2T_w"><i class="fab fa-youtube"></i></a>
    </div>
</div>

</body>

</html>