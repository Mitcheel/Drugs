
<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h1>Aquí puedes registrarte</h1>

    <!-- Un simple formulario, que es procesado por index.php. -->
    <form method="POST" action="login.php">
        <label for="email">E-mail:</label>
        <input type="email" name="email">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>