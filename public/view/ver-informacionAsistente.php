<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar asistentes</title>
    <link rel="stylesheet" href="../css/verInfo.css"> 
</head>

<body>

    <h1>Listado de Asistentes</h1>

    <div class="pacientes">
        <?php
        require "../../src/mostrar.php";
        
        if (isset($_POST['Buscar'])) {
            // Si se envió el formulario de búsqueda
            $cedula = $_POST['cedula'];
            $sql = "SELECT * FROM asistente WHERE Id_Asistente = '$cedula'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Mostrar los resultados de la búsqueda
                echo "<table>";
                echo "<tr>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                       
                      </tr>";
                while ($mos = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $mos['Id_Asistente'] . "</td>";
                    echo "<td>" . $mos['nombre'] . "</td>";
                    echo "<td>" . $mos['apellido'] . "</td>";
                    echo "<td>" . $mos['edad'] . "</td>";
                    echo "<td>" . $mos['email'] . "</td>";
                    echo "<td>" . $mos['telefono'] . "</td>";
                   
                   
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No se encontraron pacientes con esa cédula.</p>";
            }
        } else {
            // Si no se envió el formulario de búsqueda, mostrar todos los pacientes
            $sql = "SELECT * FROM asistente";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                       
                        
                      </tr>";
                while ($mos = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $mos['Id_Asistente'] . "</td>";
                    echo "<td>" . $mos['nombre'] . "</td>";
                    echo "<td>" . $mos['apellido'] . "</td>";
                    echo "<td>" . $mos['edad'] . "</td>";
                    echo "<td>" . $mos['email'] . "</td>";
                    echo "<td>" . $mos['telefono'] . "</td>";
                 
                    
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No se encontraron pacientes.</p>";
            }
        }
        ?>
    </div>

    <div>
        <form method="POST">
            <label for="cedula">Buscar por cédula:</label>
            <input type="number" name="cedula">
            <input type="submit" name="Buscar" value="Buscar">
        </form>
    </div>

</body>

</html>
