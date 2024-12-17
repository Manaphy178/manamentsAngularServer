<?php

if (!isset($_SESSION["admin"])) {
  // si se cumple este if entendemos que el administrador no se ha identificado
  include("login_admin.php");
  die("");
}
?>
<link rel="stylesheet" href="../css/menuAdmin.css">
<header class="header">
  <div class="header-top">
    <a href="#" class="logo">
      <img
        src="../imagenes/manaments.png"
        alt="Logo" />
      <span style="text-align: center">AREA DE ADMINISTRACIÓN</span>
    </a>
  </div>
  <nav class="header-bottom">
    <ul class="menu">
      <li>
        <a href="gestionar_instrumento.php"><span>Gestionar Instrumentos</span></a>
      </li>
      <li>
        <a href="gestionar_pedidos.php"><span>Gestionar Pedidos</span></a>
      </li>
      <li>
        <a href="gestionar_usuarios.php"><span>Gestionar Usuario</span></a>
      </li>
      <li>
        <a href="gestionar_categorias.php"><span>Gestionar Categorias</span></a>
      </li>
      <li>
        <a href="cerrar_sesion.php"><span>Cerrar Sesion</span></a>
      </li>
      <li>
        <a href="http://localhost:4200/">Volver a la parte publica</a>
      </li>
      <li><a href="../../">Volver a cliente (web)</a></li>
    </ul>
  </nav>
</header>