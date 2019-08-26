
<?php

    // Estas tres invocaciones acaban con la sesión del usuario.
    session_start();
    session_unset();
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Fue un gusto</title>
</head>
<body>
    <h1>Adiós</h1>
</body>
</html>