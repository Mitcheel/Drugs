
<?php

    // En esta parte proceso el registro de un nuevo usuario. Los datos
    // provienen del formulario del archivo registro.php.
    if ($_POST) {
        $usuario = $_POST['email'];

        // En esta parte encripto la clave.
        $password = crypt($_POST['password'], 'MIM');

        // Conexión con la base de datos.
         //$con = mysqli_connect('localhost', 'alavado', 'alavado', 'mim_alavado');
        $con = mysqli_connect('localhost', 'root', '', 'medicamentos');
         //include ("controller.php")

        // Inserción en la base de datos.
        //mysqli_query($con, "INSERT INTO usuarios (email, password) VALUES ('$usuario', '$password')");
        mysqli_query($con, "INSERT INTO usuarios (email, password) VALUES ('$usuario', '$password')");

        // Esta variable la inicializo para saber cuándo desplegar
        // el mensaje de la línea 32.
        $usuario_fue_creado = true;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ingreso</title>
</head>
<body>
    <h1>Por favor ingrese sus credenciales</h1>

    <!-- Este es el mensaje. -->
    <?php if (isset($usuario_fue_creado)) { ?>
        <h2>Usuario creado con éxito</h2>
    <?php } ?>

    <!-- El formulario de inicio de sesión. -->
    <form method="POST" action="home.php">
        <label for="email">E-mail:</label>
        <input type="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Ingresar">
    </form>

    <!-- Enlace al formulario de registro. -->
    <a href="registro.php">¿No tienes cuenta? ¡Regístrate aquí!</a>
</body>
</html>