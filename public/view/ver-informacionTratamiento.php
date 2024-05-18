<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Pacientes</title>
    <link rel="stylesheet" href="../css/verInfo.css"> 
</head>

<body>

    <h1>Listado de Tratamientos</h1>

    <div class="pacientes">
        <?php
        require "../../src/mostrar.php";
        
        if (isset($_POST['Buscar'])) {
            
            $cedula = $_POST['cedula'];
            $sql = "SELECT * FROM tratamiento WHERE Id_tratamiento = '$cedula'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
               
                echo "<table>";
                echo "<tr>
                        <th>Id_tratamiento</th>
                        <th>Nombre</th>
                        <th>Inicio del Tratamiento</th>
                        <th>fin del Tratamiento</th>
                        <th>Dosificacion</th>
                        <th>descripcion</th>
                       
                      </tr>";
                while ($mos = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $mos['Id_tratamiento'] . "</td>";
                    echo "<td>" . $mos['nombreMedicamento'] . "</td>";
                    echo "<td>" . $mos['IniciaTratamiento'] . "</td>";
                    echo "<td>" . $mos['finalTratamiento'] . "</td>";
                    echo "<td>" . $mos['dosificacion'] . "</td>";
                    echo "<td>" . $mos['descripcion'] . "</td>";
                    
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No se encontraron tratamientos para este paciente.</p>";
            }
        } else {
           
            $sql = "SELECT * FROM tratamiento";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr>
                        <th>Id_tratamiento</th>
                        <th>Nombre</th>
                        <th>Inicio del Tratamiento</th>
                        <th>fin del Tratamiento</th>
                        <th>Dosificacion</th>
                        <th>descripcion</th>
                       
                      </tr>";
                while ($mos = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $mos['Id_tratamiento'] . "</td>";
                    echo "<td>" . $mos['nombreMedicamento'] . "</td>";
                    echo "<td>" . $mos['IniciaTratamiento'] . "</td>";
                    echo "<td>" . $mos['finalTratamiento'] . "</td>";
                    echo "<td>" . $mos['dosificacion'] . "</td>";
                    echo "<td>" . $mos['descripcion'] . "</td>";
                    
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
            <input type="submit" name="edit" value="Buscar">
        </form>
    </div>

</body>

</html>
