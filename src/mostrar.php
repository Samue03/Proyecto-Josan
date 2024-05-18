<?php
require "conexion.php";

  $sql = "SELECT * FROM paciente";
  $result = mysqli_query($conn, $sql);
  
  if (isset($_POST['Todos'])) {
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

  



