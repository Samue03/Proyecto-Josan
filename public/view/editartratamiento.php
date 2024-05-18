<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tratamiento</title>
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
        $sql = "SELECT * FROM tratamiento WHERE Id_tratamiento = '$cedula'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $tratamiento = mysqli_fetch_assoc($result);
            ?>

            <h2>Editar Información de Tratamientos</h2>
            <form method="post">
                <input type="hidden" name="cedula_original" value="<?php echo $tratamiento['Id_tratamiento']; ?>"> 
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $tratamiento['nombreMedicamento']; ?>">
                <br><br>
                
                <label for="fecha_inicio">Fecha de inicio:</label>
                <input type="text" id="fecha_inicio" name="fecha_inicio" value="<?php echo $tratamiento['IniciaTratamiento']; ?>">
                <br><br>

                <label for="fecha_fin">Fecha Fin:</label>
                <input type="text" id="fecha_fin" name="fecha_fin" value="<?php echo $tratamiento['finalTratamiento']; ?>">
                <br><br>

                <label for="dosis">Dosificacion:</label>
                <input type="text" id="dosis" name="dosis" value="<?php echo $tratamiento['dosificacion']; ?>">
                <br><br>

                <label for="descripcion">Descripcion:</label>
                <input type="text" id="descripcion" name="descripcion" value="<?php echo $tratamiento['descripcion']; ?>">
                <br><br>
                <input type="submit" name="Editar" value="Editar">
            </form>

            <?php
            if (isset($_POST['Editar'])) {
                $cedula_original = $_POST['cedula_original'];
                $nombre = $_POST['nombre'];
                $fecha_inicio = $_POST['fecha_inicio'];
                $fecha_fin = $_POST['fecha_fin'];
                $dosis = $_POST['dosis'];
                $descripcion = $_POST['descripcion'];
                
                $sql_update = "UPDATE tratamiento SET nombreMedicamento='$nombre', IniciaTratamiento='$fecha_inicio', finalTratamiento='$fecha_fin', dosificacion='$dosis', descripcion='$descripcion' WHERE Id_tratamiento='$cedula_original'";
                if (mysqli_query($conn, $sql_update)) {
                    echo "<p>¡Tratamiento editado correctamente!</p>";
                } else {
                    echo "<p>Error al editar el tratamiento: " . mysqli_error($conn) . "</p>";
                }
            }
        } else {
            echo "<p>No se encontró ningún tratamiento perteneciente a esta cédula.</p>";
        }
    }
    ?>
</body>

</html>
