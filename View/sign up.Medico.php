<?php
include_once("../Model/Controller/controller.php");
$controlador = new controllerMedico();
if (isset($_POST['enviar'])) {
    $r = $controlador->Create($_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['edad'],$_POST['espe'],$_POST['telefono'],$_POST['cedula']);
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
    <link rel="stylesheet" href="Css/sign upMedico.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Wix+Madefor+Text:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <h1>Continuemos con tu registro...</h1>
        <h5>¿Ya tienes una cuenta? <a href="sign in.php">Inicia sesión</a></h5>
    </header>
    <div class="logo">
        <img src="../Icons/JOSAN.png" alt="url no encontrada :(">
    </div>
    <form action="" method="POST" class="form" >
        <div class="div">
            <input type="text" required name="id" autocomplete="off">
            <label class="lbl-id">
                <span class="text-id">
                   Ingresa tu <b>ID</b> de Medico
                </span>
            </label>
        </div>
          <!-------->
          <div class="div">
            <input type="text" required name="nombre"autocomplete="off">
            <label class="lbl-nombre">
                <span class="text-nombre">
                    Nombre
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="text" required name="apellido"autocomplete="off">
            <label class="lbl">
                <span class="text-apellido">
                    Apellido
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="email" required name="email"autocomplete="off">
            <label class="lbl-email">
                <span class="text-email">
                    Email
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="text" required name="edad"autocomplete="off">
            <label class="lbl-edad" >
                <span class="text-email">
                    Edad
                </span>
            </label>
        </div>
           <!-------->
           <div class="div">
            <input type="text" required name="espe"autocomplete="off">
            <label class="lbl-especialidad" >
                <span class="text-email">
                    Especialidad
                </span>
            </label>
        </div>
           <!-------->
           <div class="div">
            <input type="text" required name="telefono"autocomplete="off">
            <label class="lbl-telefono" >
                <span class="text-email">
                    Telefono
                </span>
            </label>
        </div>
           <!-------->
           <div class="div">
            <input type="text" required name="cedula"autocomplete="off">
            <label class="lbl-cedula" >
                <span class="text-email">
                    Cedula
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
        <button type="submit" name="enviar">Regístrate</button>
    </form>
</body>

</html>
