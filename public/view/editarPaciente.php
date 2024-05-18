<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar paciente</title>
    <link rel="stylesheet" href="/public/css/editarPaciente.css">
</head>

<body>
    <h1>Buscar Pacientes por Cédula</h1>
    <form method="post">
        <label for="cedula">Ingrese la cédula:</label>
        <input type="text" id="cedula" name="cedula" placeholder="Ej. 1234567890">
        <input type="submit" name="Buscar" value="Buscar">
    </form>

    <?php
    require "../../src/conexion.php";
    if (isset($_POST['Buscar'])) {
        $cedula = $_POST['cedula'];
        $sql = "SELECT * FROM paciente WHERE cedula = '$cedula'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $paciente = mysqli_fetch_assoc($result);
            ?>

            <h2>Editar Información de Paciente</h2>
            <form method="post">
                <input type="hidden" name="cedula_original" value="<?php echo $paciente['cedula']; ?>"> 
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $paciente['nombre']; ?>">
                <br><br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="<?php echo $paciente['apellido']; ?>">
                <br><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $paciente['email']; ?>">
                <br><br>
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="<?php echo $paciente['telefono']; ?>">
                <br><br>
                <label for="edad">Edad:</label>
                <input type="text" id="edad" name="edad" value="<?php echo $paciente['edad']; ?>">
                <br><br>
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="text" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $paciente['fecha_nacimiento']; ?>">
                <br><br>
                <input type="submit" name="Editar" value="Editar">
            </form>

            <?php
            if (isset($_POST['Editar'])) {
                $cedula_original = $_POST['cedula_original'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $email = $_POST['email'];
                $telefono = $_POST['telefono'];
                $edad = $_POST['edad'];
                $fecha_nacimiento = $_POST['fecha_nacimiento'];

                $sql_update = "UPDATE paciente SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono', edad='$edad', fecha_nacimiento='$fecha_nacimiento' WHERE cedula='$cedula_original'";
                if (mysqli_query($conn, $sql_update)) {
                    echo "<p>¡Paciente editado correctamente!</p>";
                } else {
                    echo "<p>Error al editar paciente: " . mysqli_error($conn) . "</p>";
                }
            }
        } else {
            echo "<p>No se encontró ningún paciente con esa cédula.</p>";
        }
    }
    ?>
</body>

</html>
