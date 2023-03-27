<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | I.T. Industrial</title>
    
    

    <link rel="stylesheet" href="assets/css/style.css" />
    
</head>
<body>

    <header class="header">
    <h1>Plataforma Institucional - Instituto Tecnico Industrial"</h1>

    </header>

        <main class="body">


        <div class="panel-login">
            <h4>Inicio de Sesion</h4>
            <form method="post" class="form" action="php/servidor/login_usuario_be.php">
                <label>Usuario</label><br>
                <input type="text" name="correo">
                <br>
                <label>Contraseña</label><br>
                <input type="password" name="contrasena">
                <br><br>
                <button type="submit" value="a" name="boton">Entrar</button>
            </form>
        
        </div>

                    

        </main>

        <footer >
        <p>Derechos reservados &copy; 2020</p>
        </footer>

        <script src="assets/js/scriptLogin.js"></script>
</body>
</html>