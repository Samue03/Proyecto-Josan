<?php
include_once("../Model/Controller/router.php");
include_once("../Model/Controller/controller.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="Css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="../Icons/LOGO JOSAN NUEVA VERSION.png">
</head>

<body>
    <div class="firs">
        <section class="viewLogo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#f3f4f5" fill-opacity="1" d="M0,0L48,5.3C96,11,192,21,288,48C384,75,480,117,576,165.3C672,213,768,267,864,293.3C960,320,1056,320,1152,288C1248,256,1344,192,1392,160L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,
                320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
            <div class="logo"><img src="../Icons/RELOJ JOSAN SIN FONDO.png" alt=""></div>
        </section>
        <section class="information">
            <h2>JOSAN</h2>
            <div class="buttons">
                <button id="get_started">Empezar</button>
                <button class="Learn_more" id="get_started2">Aprender más</button>
            </div>
        </section>
    </div>

    <section>
        <?php
        $enrutador = new Enrutador();
        if (isset($_GET['cargar']) && $enrutador->__Validrget($_GET['cargar'])) {
            $enrutador->__cargarView($_GET['cargar']);
        }
        ?>

    </section>
    <script src="../Model/JS/index.js"></script>
</body>

</html>