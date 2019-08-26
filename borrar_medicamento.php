<html>
<body>
<a href="indice.php"><button>Volver al Inventario</button></a>
     <style>
  html { 
      background: url(https://www.shape.com.sg/sites/default/files/article/2017/03/She%20became%20addicted%20to%20sleeping%20pills.jpg) no-repeat center center fixed; 
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
    include("conexion.php");
    /*un intento por borrar en "cascada"una vez que todos los farmacos de un proveedor se agoten
    if ($id_proveedor>0)
    {
        mysqli_query($conexion, "DELETE FROM medicamentos  WHERE id_referencia='$codigo'"); 
        echo("<br>");
        echo("<br>");
        echo ("El item ha sido borrado de la lista");
        
    }else{
        mysqli_query($conexion, "DELETE FROM medicamentos  WHERE id_referencia='$codigo'"); 
        mysqli_query($conexion, "DELETE FROM proveedores  WHERE id='$id_proveedor'");
        echo ("El item ha sido borrado de la lista, ademas del proveedor");
    }

   /* este era el codigo que funcionaba originalmente y solo borra productos*/
    mysqli_query($conexion, "DELETE FROM medicamentos  WHERE id_referencia='$id_referencia'"); 
    echo("<br>");
    echo("<br>");
    echo ("El item ha sido borrado de la lista");

    mysqli_close($conexion);
