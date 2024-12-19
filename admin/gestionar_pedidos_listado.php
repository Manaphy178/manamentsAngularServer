<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listado pedidos</title>
  <link rel="stylesheet" href="../css/listadoPedidoAdmin.css" />
  <link rel="icon" type="image/x-icon" href="../imagenes/favicon.ico" />
</head>

<body>
  <?php
  include("menu.php");
  ?>
  <div class="container">
    <h1>Listado de pedidos</h1>
    <table class="orders-table">
      <tr>
        <th>Nombre destinatario</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Provincia</th>
        <th>Poblacion</th>
        <th>Cantidad de producto</th>
        <th>Nombre producto</th>
        <th>Precio producto</th>
      </tr>

      <?php
      $ultimo_pedido = -1;
      foreach ($pedidos as $p) {
        if ($p["id"] != $ultimo_pedido) {
          $ultimo_pedido = $p["id"];
      ?>
          <tr>
            <td rowspan="<?= count(array_filter($pedidos, function ($element) use ($ultimo_pedido) {
                            return $element["id"] == $ultimo_pedido;
                          })) ?>"><?= $p["nombre"] ?></td>
            <td rowspan="<?= count(array_filter($pedidos, function ($element) use ($ultimo_pedido) {
                            return $element["id"] == $ultimo_pedido;
                          })) ?>"><?= $p["telefono"] ?></td>
            <td rowspan="<?= count(array_filter($pedidos, function ($element) use ($ultimo_pedido) {
                            return $element["id"] == $ultimo_pedido;
                          })) ?>"><?= $p["direccion"] ?></td>
            <td rowspan="<?= count(array_filter($pedidos, function ($element) use ($ultimo_pedido) {
                            return $element["id"] == $ultimo_pedido;
                          })) ?>"><?= $p["provincia"] ?></td>
            <td rowspan="<?= count(array_filter($pedidos, function ($element) use ($ultimo_pedido) {
                            return $element["id"] == $ultimo_pedido;
                          })) ?>"><?= $p["poblacion"] ?></td>
          <?php }
          ?>
          <td class="instrument"><?= $p["cantidad"] ?></td>
          <td><?= $p["nombre_instrumento"] ?></td>
          <td><?= $p["precio"] ?></td>
          </tr>
        <?php }
        ?>

    </table>
  </div>
</body>

</html>