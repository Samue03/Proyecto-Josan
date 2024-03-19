<?php
include_once("../Model/Controller/controllerAsistente.php");
$controlador = new controllerAsistente();
if (isset($_POST['enviar'])) {
    $r = $controlador->Create($_POST['id'], $_POST['nombre'], $_POST['apellido'], $_POST['edad'], $_POST['email'], $_POST['telefono']);
    if ($r) {
        return;
    } else {
        echo "Ya el usuario se encuentra registrado";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing up Asistente</title>
    <link rel="icon" href="../Icons/LOGO JOSAN NUEVA VERSION.png">
    <link rel="stylesheet" href="Css/sign up-Asistente.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Wix+Madefor+Text:wght@500&display=swap"
        rel="stylesheet">

    </head>

<body>
    <header class="header">
        <h1>Registrar Asistente</h1>
    </header>
    <div class="logo">
        <img src="../Icons/JOSAN.png" alt="url no encontrada :(">
    </div>
    <form action="" method="POST" class="form">
        <div class="div">
            <input type="text" required autocomplete="off" name = "id">
            <label class="lbl-id">
                <span class="text-id">
                    Identificacion del paciente
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
            <input type="text" required autocomplete="off" name = "apellido">
            <label class="lbl-apellido">
                <span class="text-apellido">
                    Apellido
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="email" required autocomplete="off" name = "email">
            <label class="lbl-email">
                <span class="text-email">
                    Email
                </span>
            </label>
        </div>

        <!------->
        <div class="div">
            <input type="number" required autocomplete="off" name = "edad">
            <label class="lbl-edad">
                <span class="text-edad">
                    Edad
                </span>
            </label>
        </div>

        <!---->

        <div class="div">
            <input type="text" class="lbl-phone" required id = "input-phone" autocomplete="off" name = "telefono">
            <label class="lbl-phone">
                <span class="text-phone">
                    Telefono
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

    <script src = "../Model/JS/sign up paciente.js"> </script>
</body>

</html>