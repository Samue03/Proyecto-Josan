<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Medico</title>
</head>

<body>
    <h1>Eliminar Medico</h1>
    <form method="post">
        <label for="cedula">Ingrese la cédula del medico que desea eliminar:</label>
        <input type="text" id="cedula" name="cedula" placeholder="Ej. 1234567890">
        <input type="submit" name="Eliminar" value="Eliminar">
    </form>

    <?php
    require "../../src/conexion.php";

    if (isset($_POST['Eliminar'])) {
        $cedula = $_POST['cedula'];
        $sql = "DELETE FROM medico WHERE cedula = '$cedula'";
        
        if (mysqli_query($conn, $sql)) {
            echo "<p>¡Medico eliminado correctamente!</p>";
        } else {
            echo "<p>Error al eliminar medico: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>
</body>

</html>
