<?php
include_once("../Model/Controller/controllerUser.php");
$controlador = new controllerUser();
if (isset($_POST['enviar'])) {
    $r = $controlador->Create($_POST['id'],$_POST['nombre'],$_POST['password'],$_POST['status'],$_POST['fecha']);
    if($r){
       return;
    }else{
        echo "Ya el usuario se encuentra registrado";
    }
}
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing up</title>
    <link rel="icon" href="../Icons/LOGO JOSAN NUEVA VERSION.png">
    <link rel="stylesheet" href="Css/sign up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Wix+Madefor+Text:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <h1>Regístrate</h1>
        <h5>¿Ya tienes una cuenta? <a href="sign in.php">Inicia sesión</a></h5>
    </header>
    <div class="logo">
        <img src="../Icons/JOSAN.png" alt="url no encontrada :(">
    </div>
    <form action="" method="POST" class="form" >
        <div class="div">
            <input type="text" required name="id" autocomplete="off">
            <label class="lbl-id">
                <span class="text-nombre">
                    Nuevo id del usuario
                </span>
            </label>
        </div>
          <!-------->
          <div class="div">
            <input type="text" required name="nombre"autocomplete="off">
            <label class="lbl-user">
                <span class="text-email">
                    Nombre de Usuario
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="password" required name="password"autocomplete="off">
            <label class="lbl">
                <span class="text-email">
                    Contraseña
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="text" required name="status"autocomplete="off">
            <label class="lbl-estado">
                <span class="text-contra">
                    Estado del login
                </span>
            </label>
        </div>
         <!---->
         <div class="div">
            <input type="date" class="datepicker" required id="input-date" autocomplete = "off" name = "fecha">
            <label class="lbl-fecha">
                <span class="text-fechaNacimiento">
                    Fecha de Nacimiento
                </span>
            </label>
        </div>

        <div class="line"></div>
        <div class="circle"></div>
        <div class="line2"></div>

        <div class="linkFace">
            <a href="https://www.google.com/?hl=es"><img src="../Icons/facebook.png" alt="">Continua con Facebook</a>
        </div>
        <div class="google">
            <a href="https://www.google.com/?hl=es"><img src="../Icons/google.png" alt="">Continua con Google</a>
        </div>
        <button type="submit" name="enviar">Actualizar</button>
    </form>
    <script src = "../Model/JS/sign up.js"></script>
</body>

</html>