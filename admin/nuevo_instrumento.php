<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Registro de Instrumentos</title>
</head>

<body>
    <?php
    include("menu.html");
    ?>
    <h1>Registro de Instrumentos</h1>
    <form action="registrar_instrumento.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="nombre">Nombre Instrumento:</label>
            <input type="text" id="nombre" name="nombre" />
        </p>
        <p>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" />
        </p>
        <p>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" cols="30" rows="10"></textarea>
        </p>
        <p>
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" />
        </p>
        <p>
            <label for="categoria">Categoría:</label>
            <input type="text" id="categoria" name="categoria" />
        </p>
        <p>
            <label for="tipo">Tipo:</label>
            <input type="text" id="tipo" name="tipo" />
        </p>
        <p>
            <label for="gamma">Gamma:</label>
            <input type="text" id="gamma" name="gamma" />
        </p>
        <p>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" />
        </p>
        <p>
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto" />
        </p>
        <p>
            <input type="submit" value="Registrar" />
        </p>
    </form>
</body>

</html>