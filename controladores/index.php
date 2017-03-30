<!--
    
    EJEMPLO DE PÁGINA DE INICIO CON VALIDACIÓN
    
-->

<?php
    error_reporting(0);
    include dirname(__FILE__) . "/datos/config.php";
    include dirname(__FILE__) . "/sesion/Session.php";

    if (auth()) {
        header("Location: " . app_url() . $_SESSION["url"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo app_url(); ?>img/HiAppHere_com_giannisgx89.morena.icons.png"
          type="image/x-icon">
    <title>Worm Framework for PHP</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo app_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo app_url(); ?>css/login-style.css" rel="stylesheet">
    <!-- scripts -->
    <script type="text/javascript" src="<?php echo app_url(); ?>js/jquery-1.11.3-jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo app_url(); ?>js/validation.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="login-container">
            <div id="output"></div>
            <img src="<?php echo app_url(); ?>img/logo1.jpg" height="70px" class="img-responsive">
            <div class="form-box">
                <form action="" method="POST" id="login-form">
                    <input type="text" name="id_usuario" id="id_usuario" placeholder="Id de Usuario" required>
                    <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>
                    <button class="btn btn-info btn-block login" id="btn-login">Iniciar Sesión</button>
                    <div id="error">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo app_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>