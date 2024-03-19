<?php
include_once("../Model/Controller/controllerUser.php");
$controlador = new controllerUser();
$resultado = $controlador->index();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
</head>

<body>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: linear-gradient(#fff, #DEDEDE);
}

.container {
    border: solid 1px rgba(38, 166, 154,0.2);
}

table {
    color: #fff;
    font-size: 14px;
    table-layout: fixed;
    border-collapse: collapse;
}

thead {
    background: rgba(38, 166, 154,0.4);
}

th {
    padding: 20px 15px ;
    font-weight: 700;
    text-transform: uppercase;
}

td {
    padding: 15px;
    border-bottom: solid 1px rgba(38, 166, 154,0.2);
}
a{
    text-decoration: none;
    color: #000;
}

tbody tr {
    cursor: pointer;
    color:black;
}

tbody tr:hover {
    background: rgba(38, 166, 154, 0.4);
}
    </style>
    <div class = "container">

        <table>
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Estado del Login</th>
                <th>Dia que inicio la cuenta</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($resultado)) : ?>
                    <tr>
                        <td><?php echo $row['userId']   ?></td>
                        <td><?php echo $row['nombreUser'] ?></td>
                        <td><?php echo $row['loginStatus']   ?></td>
                        <td><?php echo $row['registerDate']   ?></td>
                        <td>
                            <a href= "?cargar=DatosEspecifico&id=<?php echo $row['userId']?>">|Ver|</a>
                            <a href= "?cargar=UpdateUser&id<?php echo $row['userId']?>">|Editar|</a>
                            <a href= "?cargar=ver&userId<?php echo $row['userId']?>">|Eliminar|</a>
                        </td>
                    </tr>
                <?php endwhile;   ?>
            </tbody>
        </table>

    </div>

</body>