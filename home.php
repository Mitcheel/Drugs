
<?php

    // Esta función me permite manipular las variables de sesión.
    // La sesión permite controlar el estado de nuestra aplicación.
    // En este caso, vamos a recordar el usuario que está en el sistema.
    session_start();

    // Esta variable indicará dentro del HTML si es que hay una sesión iniciada.
    $login = false;

    // Caso en que la sesión fue iniciada.
    if (isset($_SESSION['email'])) {
        $login = true;
    }

    // Caso en que llegamos desde index.php.
    if ($_POST) {

        // Los datos del formulario.
        $email = $_POST['email'];
        $password = crypt($_POST['password'], 'MIM');

        // Buscamos el usuario en la base de datos.
        
        $con = mysqli_connect('localhost', 'root', '', 'medicamentos');
        ////include ("controller.php")
        $consulta = "SELECT * FROM usuarios WHERE email = '$email'";
        $resultado = mysqli_query($con, $consulta);

        // Obtenemos la clave.
        $fila = mysqli_fetch_assoc($resultado);
        $password_bd = $fila['password'];

        // Marcamos la variable que indica el inicio de sesión.
        $login = $password_bd == $password;
        if ($login) {
            $_SESSION['email'] = $email;
        }
    }
?>

 <?php if ($login) {
      header('Location: indice.php');} else { ?>
        <h1>No tiene permisos para ver esta página</h1>
    <?php } ?>
