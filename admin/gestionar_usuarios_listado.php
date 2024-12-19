<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado usuarios</title>
    <link rel="stylesheet" href="../css/listadoUsuariosAdmin.css">
    <link rel="icon" type="image/x-icon" href="../imagenes/favicon.ico" />
</head>

<body>
    <?php
    include("menu.php");
    ?>

    <div class="container">
        <h1>Listado de usuarios</h1>
        <table class="users-table">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Email</th>
                <th>Nombre Usuario</th>
                <th>Codigo Postal</th>
                <th>IP</th>
                <th>Ultima Sesion</th>
            </tr>
            <?php
            foreach ($usuarios as $u) { ?>
                <tr>
                    <td><?php echo $u["nombre"] ?></td>
                    <td><?php echo $u["direccion"] ?></td>
                    <td><?php echo $u["email"] ?></td>
                    <td><?php echo $u["username"] ?></td>
                    <td><?php echo $u["postal"] ?></td>
                    <td><?php echo $u["ip"] ?></td>
                    <td><?php echo $u["fecha_ultima_sesion"] ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>