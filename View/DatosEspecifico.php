<?php
include_once("../Model/Controller/controllerUser.php");
$controlador = new controllerUser();
if (isset($_GET['id'])) {
    $row->$controlador->ver($_GET['id']);
    
} else {
    header('location: index.php');  
}
?>

<b>Cedula:</b><?php echo $row['userId'] ?>
<b>Nombre:</b><?php echo $row['nombreUser'] ?>
<b>Estado:</b><?php echo $row['loginStatus'] ?>