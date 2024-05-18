<?php
require "conexion.php";


if (isset($_POST['enviar'])) {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $fechana = $_POST['fechana'];
  
    

    $consulta = "INSERT INTO paciente(cedula,nombre,apellido,email,telefono,edad,fecha_nacimiento)
  VALUES('$cedula','$nombre','$apellido','$email','$telefono',' $edad','$fechana')";
    $resultado = mysqli_query($conn, $consulta);

  if($resultado){
    echo " <div >
    <img src='/Proyecto/public/Icons/Exitoso.jpeg' style='width: 1500px; height: 500px;'>
    <h3><center>Vas por el camino correcto. <a href = 'http://localhost/proyecto/public/view/personal%20area.html'>Sigamos</a></h3></center>
</div>";
  } else {
    return false; 
    echo "Algo salió mal: " . mysqli_error($conn);
  }

}
if (isset($_POST['enviarAsistente'])) {
  $cedula = $_POST['cedula'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $edad = $_POST['edad'];
  $telefono = $_POST['telefono'];
 

  

  $consulta = "INSERT INTO asistente(Id_Asistente,nombre,apellido,edad,email,telefono)
VALUES('$cedula','$nombre','$apellido',' $edad','$email','$telefono')";
  $resultado = mysqli_query($conn, $consulta);

if($resultado){
  echo " <div >
  <img src='/Proyecto/public/Icons/Exitoso.jpeg' style='width: 1500px; height: 500px;'>
  <h3><center>Vas por el camino correcto. <a href = 'http://localhost/proyecto/public/view/personal%20area.html'>Sigamos</a></h3></center>
</div>";
} else {
  return false; 
  echo "Algo salió mal: " . mysqli_error($conn);
}

}


if (isset($_POST['enviarMedico'])) {
  $cedula = $_POST['cedula'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];
  $edad = $_POST['edad'];
  $especialidad = $_POST['espe'];
  $telefono = $_POST['telefono'];
 

  

  $consulta = "INSERT INTO medico(cedula,nombre,apellido,email,edad,especialidad,telefono)
VALUES('$cedula','$nombre','$apellido',' $email','$edad','$especialidad','$telefono')";
  $resultado = mysqli_query($conn, $consulta);

if($resultado){
  echo " <div >
  <img src='/Proyecto/public/Icons/Exitoso.jpeg' style='width: 1500px; height: 500px;'>
  <h3><center>Vas por el camino correcto. <a href = 'http://localhost/proyecto/public/view/personal%20area.html'>Sigamos</a></h3></center>
</div>";
} else {
  return false; 
  echo "Algo salió mal: " . mysqli_error($conn);
}

}

if (isset($_POST['enviarTratamiento'])) {

  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $fechainit = $_POST['fechainit'];
  $fechafin = $_POST['fechafin'];
  $dosis = $_POST['dosificacion'];
  $descripcion = $_POST['descripcion'];
 
 

  

  $consulta = "INSERT INTO tratamiento(Id_tratamiento,nombreMedicamento,IniciaTratamiento,finalTratamiento,dosificacion,descripcion)
VALUES('$id','$nombre','$fechainit',' $fechafin','$dosis','$descripcion')";
  $resultado = mysqli_query($conn, $consulta);

if($resultado){
  echo " <div >
  <img src='/Proyecto/public/Icons/Exitoso.jpeg' style='width: 1500px; height: 500px;'>
  <h3><center>Vas por el camino correcto. <a href = 'http://localhost/proyecto/public/view/personal%20area.html'>Sigamos</a></h3></center>
</div>";
} else {
  return false; 
  echo "Algo salió mal: " . mysqli_error($conn);
}

}



?>