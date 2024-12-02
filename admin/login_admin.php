<?php
//session_start(); //como ya hemos emitido html el session_ no se cumple

if (isset($_POST["pass"]) && $_POST["pass"] == "Nelson2000") {
    $_SESSION["admin"] = "ok";
    header("Location: listado_instrumento.php");
}

include("login_admin.html");
