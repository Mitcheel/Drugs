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

    $codigo = $_POST['codigo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $id_proveedor = $_POST['id_proveedor'];
    include("conexion.php");
    /*mysqli_query($conexion, "INSERT INTO medicamentos(id,codigo,descripcion,precio,comentarios,id_proveedor)VALUES (NULL,'$codigo','$descripcion','$precio',NULL,'$id_proveedor')");*/
     mysqli_query($conexion, "INSERT INTO medicamentos(id,codigo,descripcion,precio,id_proveedor) VALUES (NULL,'$codigo','$descripcion','$precio','$id_proveedor')");  
    
   
    echo("<br>");
    echo("<br>");
    echo ("El item ha sido agregado a la lista");

    mysqli_close($conexion);
