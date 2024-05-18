<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Pacientes</title>
    <link rel="stylesheet" href="../css/verInfo.css"> 
</head>

<body>

    <h1>Listado de Pacientes</h1>

    <div class="pacientes">
        <?php
        require "../../src/mostrar.php";
        
        if (isset($_POST['Buscar'])) {
            // Si se envió el formulario de búsqueda
            $cedula = $_POST['cedula'];
            $sql = "SELECT * FROM paciente WHERE cedula = '$cedula'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // Mostrar los resultados de la búsqueda
                echo "<table>";
                echo "<tr>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                        <th>Fecha de Nacimiento</th>
                      </tr>";
                while ($mos = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $mos['cedula'] . "</td>";
                    echo "<td>" . $mos['nombre'] . "</td>";
                    echo "<td>" . $mos['apellido'] . "</td>";
                    echo "<td>" . $mos['email'] . "</td>";
                    echo "<td>" . $mos['telefono'] . "</td>";
                    echo "<td>" . $mos['edad'] . "</td>";
                    echo "<td>" . $mos['fecha_nacimiento'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No se encontraron pacientes con esa cédula.</p>";
            }
        } else {
            // Si no se envió el formulario de búsqueda, mostrar todos los pacientes
            $sql = "SELECT * FROM paciente";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Edad</th>
                        <th>Fecha de Nacimiento</th>
                      </tr>";
                while ($mos = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $mos['cedula'] . "</td>";
                    echo "<td>" . $mos['nombre'] . "</td>";
                    echo "<td>" . $mos['apellido'] . "</td>";
                    echo "<td>" . $mos['email'] . "</td>";
                    echo "<td>" . $mos['telefono'] . "</td>";
                    echo "<td>" . $mos['edad'] . "</td>";
                    echo "<td>" . $mos['fecha_nacimiento'] . "</td>";
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
