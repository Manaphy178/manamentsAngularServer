<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Listado pedidos</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    :root {
      --verde: #04aa6d;
      --blancoTabla: #f2f2f2;
    }

    table {
      margin: 2rem auto;
      width: 100vh;
      border-collapse: collapse;
    }

    td,
    th {
      text-align: center;
      padding: 1rem;
    }

    tr {
      background-color: var(--blancoTabla);
    }

    th {
      background-color: var(--verde);
      color: white;
    }

    tr:not(:last-child) {
      border-bottom: 1px solid black;

    }

    .instrument {

      border-left: 1px solid black;
    }
  </style>
</head>

<body>
  <?php
  include("menu.html");
  ?>
  <h1>Listado de pedidos en la tienda con angular</h1>
  <table>
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
</body>

</html>