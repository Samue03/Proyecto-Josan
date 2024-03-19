<?php
include_once("../Model/Controller/controllerTratamiento.php");
$controlador = new controllerTratamiento();
if (isset($_POST['enviar'])) {
    $r = $controlador->Create($_POST['nombre'],$_POST['id'],$_POST['descripcion'],$_POST['inicio'],$_POST['final'],$_POST['dosificacion']);
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
    <title>Sing up Tratamiento</title>
    <link rel="icon" href="../Icons/LOGO JOSAN NUEVA VERSION.png">
    <link rel="stylesheet" href="Css/sign up-tratamiento.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Wix+Madefor+Text:wght@500&display=swap"
        rel="stylesheet">

    </head>

<body>
    <header class="header">
        <h1>Registrar Tratamiento</h1>
    </header>
    <div class="logo">
        <img src="../Icons/JOSAN.png" alt="url no encontrada :(">
    </div>
    <form action="" method="POST" class="form">
        <div class="div">
            <input type="number" required autocomplete="off" name = "id">
            <label class="lbl-id">
                <span class="text-id">
                    ID del tratamiento
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="text" required autocomplete="off" name = "nombre">
            <label class="lbl">
                <span class="text-nombre">
                    Nombre
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="date" required id = "input-date" autocomplete="off" name = "inicio">
            <label class="lbl-fecha">
                <span class="text-fecha">
                    Fecha de inicio 
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="date" required id = "input2-date" autocomplete="off" name = "final">
            <label class="lbl-date">
                <span class="text-date">
                    Fecha final 
                </span>
            </label>
        </div>

        <!------->
        <div class="div">
            <input type="text" required autocomplete="off" name = "dosificacion">
            <label class="lbl-dosificacion">
                <span class="text-dosificacion">
                    Dosificacion
                </span>
            </label>
        </div>

        <!---->

        <div class="div">
            <input type="text" class="" required id = "input-descripcion" autocomplete="off" name = "descripcion">
            <label class="lbl-descripcion">
                <span class="text-descripcion">
                    Descripcion
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
        <button type="submit" name = "enviar">Regístrate</button>
    </form>

    <script src = "../Model/JS/sign up tratameinto.js"> </script>
</body>

</html>