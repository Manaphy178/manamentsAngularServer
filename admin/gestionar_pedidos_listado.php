<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listado pedidos</title>
</head>

<body>
  <?php
  include("menu.html");
  ?>
  <h1>Listado de pedidos en la tienda con angular</h1>
  <table>
    <tr>
      <th>Nombre destinatario</th>
      <th>Direccion</th>
      <th>Cantidad de producto</th>
      <th>Nombre producto</th>
      <th>Precio producto</th>
    </tr>
    <?php foreach ($pedidos as $p) { ?>
      <!-- html a mostrar por cada pedido -->
      <tr>
        <td><?= $p["nombre"] ?></td>
        <td><?= $p["direccion"] ?></td>
        <td><?= $p["cantidad"] ?></td>
        <td><?= $p["nombre_instrumento"] ?></td>
        <td><?= $p["precio"] ?></td>
      </tr>


    <?php } ?>
  </table>
</body>

</html>