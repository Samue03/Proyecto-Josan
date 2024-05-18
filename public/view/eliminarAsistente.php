<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar asistente</title>
</head>

<body>
    <h1>Eliminar Asistente</h1>
    <form method="post">
        <label for="cedula">Ingrese la cédula del Asistente que desea eliminar:</label>
        <input type="text" id="cedula" name="cedula" placeholder="Ej. 1234567890">
        <input type="submit" name="Eliminar" value="Eliminar">
    </form>

    <?php
    require "../../src/conexion.php";

    if (isset($_POST['Eliminar'])) {
        $cedula = $_POST['cedula'];
        $sql = "DELETE FROM asistente WHERE Id_Asistente = '$cedula'";
        
        if (mysqli_query($conn, $sql)) {
            echo "<p>¡Asistente eliminado correctamente!</p>";
        } else {
            echo "<p>Error al eliminar asistente: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>
</body>

</html>
