
<html>
<body>
<a href="indice.php"><button>Volver al Inventario</button></a>
<br>
<br>
 <style>
  html { 
      background: url(https://static1.squarespace.com/static/59137e7359cc6871b790d3a3/5914c907f7e0abd89c2179e0/5918d4a586e6c00c05a03843/1502595070793/Bluejay_Pharmacy.jpg?format=2500w) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
 </style>
</body>
</html>

<?php

    $id_referencia = $_POST['id_referencia'];
    $nuevo_precio = $_POST['nuevo_precio'];
    include("conexion.php");

    if ($nuevo_precio<1)
    {
        echo ("ingrese un valor valido");
        echo("<br>");
        echo ("vuelva a intentar");
        
    }else{
        mysqli_query($conexion, "UPDATE medicamentos  SET precio='$nuevo_precio' WHERE id_referencia='$id_referencia'");
        echo "modificacion exitosa";
        
    }
 
    mysqli_close($conexion);
?>