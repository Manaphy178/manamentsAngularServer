<?php

if (!isset($_SESSION["admin"])) {
  // si se cumple este if entendemos que el administrador no se ha identificado
  include("login_admin.php");
  die("");
}
?>
<h1>Zona admin</h1>
<div>
  <a href="nuevo_instrumento.php">Nuevo Instrumento</a> &nbsp;&nbsp;
  <a href="gestionar_instrumento.php">Gestionar Instrumento</a> &nbsp;&nbsp;
  <a href="gestionar_pedidos.php">Gestionar Pedidos</a> &nbsp;&nbsp;
  <a href="cerrar_sesion.php">Cerrar Sesion</a> &nbsp;&nbsp;
  <a href="http://localhost:4200">Volver a cliente</a>&nbsp;&nbsp;
  <a href="../../">Volver a cliente (web)</a>
</div>