
<!DOCTYPE html>
<html>
<head>
    <title>formulario agregar farmaco</title>
</head>
<body>
    <h1>agregar</h1>

    <!--
        Aquí comienza el formulario de registro.
        Recuerda que el atributo action indica el nombre del script PHP de procesamiento.
        Recuerda que el atributo method determina cómo se accederá a los datos
        del formulario a través de PHP.
        Si escribes method="post", los valores quedarán en $_POST.
        Si escribes method="get", los valores quedarán en $_GET.
    -->
    <form action="agregar.php" method="post">

        <!--
            Recuerda que el atributo name de cada input es el que se usa en PHP
            para acceder a los valores ingresados por el usuario.
        -->
        <label>idreferencia:</label>
        <input type="text" name="id_referencia">
        <br/>
        <label>descripcion:</label>
        <input type="text" name="descripcion">
        <br/>
        <label>precio:</label>
        <input type="text" name="precio">
        <br/>
        <label>id_proveedor:</label>
        <input type="text" name="id_proveedor">
        <br/>

        <br/>

        -->
        <input type="submit" value="Registrar farmaco">
    </form>
</body>
</html>