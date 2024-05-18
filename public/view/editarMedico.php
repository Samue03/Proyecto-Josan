<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Medico</title>
    <link rel="stylesheet" href="/public/css/editarPaciente.css">
</head>
<body>
    <h1>Buscar médicos por Cédula</h1>
    <form method="post">
        <label for="cedula">Ingrese la cédula:</label>
        <input type="text" id="cedula" name="cedula" placeholder="Ej. 1234567890">
        <input type="submit" name="buscarMedico" value="Buscar">
    </form>

    <?php
    require "../../src/conexion.php";
    if (isset($_POST['buscarMedico'])) {
        $cedula = $_POST['cedula'];
        $sql = "SELECT * FROM medico WHERE cedula = '$cedula'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $medico = mysqli_fetch_assoc($result);
            ?>

            <h2>Editar Información de Médico</h2>
            <form method="post">
                <input type="hidden" name="cedula" value="<?php echo $cedula; ?>"> <!-- Agregamos un campo oculto para enviar la cédula -->
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $medico['nombre']; ?>">
                <br><br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="<?php echo $medico['apellido']; ?>">
                <br><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $medico['email']; ?>">
                <br><br>
                <label for="edad">Edad:</label>
                <input type="text" id="edad" name="edad" value="<?php echo $medico['edad']; ?>">
                <br><br>
                <label for="especialidad">Especialidad:</label>
                <input type="text" id="especialidad" name="especialidad" value="<?php echo $medico['especialidad']; ?>">
                <br><br>
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="<?php echo $medico['telefono']; ?>">
                <br><br>
                <input type="submit" name="editarMedico" value="Editar">
            </form>

            <?php
        } else {
            echo "<p>No se encontró ningún médico con esa cédula.</p>";
        }
    }

    if (isset($_POST['editarMedico'])) {
        $cedula = $_POST['cedula'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $especialidad = $_POST['especialidad']; // Corregimos el nombre del campo
        $telefono = $_POST['telefono'];

        $sql_update = "UPDATE medico SET nombre='$nombre', apellido='$apellido', email='$email',  edad='$edad', especialidad='$especialidad',telefono='$telefono' WHERE cedula='$cedula'";
        if (mysqli_query($conn, $sql_update)) {
            echo "<p>¡Médico editado correctamente!</p>";
        } else {
            echo "<p>Error al editar Médico: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>
</body>
</html>
