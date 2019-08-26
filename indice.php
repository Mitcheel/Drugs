<?php include ("conexion.php");
/*$res = mysqli_query($conexion, 'SELECT * FROM medicamentos,proveedores WHERE medicamentos.id_proveedor = proveedores.id');*/

$res = mysqli_query($conexion, 'SELECT medicamentos.id_referencia, medicamentos.precio, medicamentos.descripcion, proveedores.nombre FROM medicamentos, proveedores WHERE medicamentos.id_proveedor = proveedores.id');
$fila = mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<head>
    <title>Lista de Farmacos</title>
    </head>

  <div class="container">
   <br />
    <!--<h2 align="left">modulo de busqueda</h2><br /> -->
   <div class="form-group">
    <div class="input-group">
     <!-- 
     <span class="input-group-addon">Search</span>
      -->
      <input type="text" name="search_text" id="search_text" placeholder="Realice su busqueda" class="form-control" /> 
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 
</head>
<body>
    <h1><font color="MidnightBlue">Inventario de Farmacos segun proveedor y precio </h1>

 <style>
  table {
   border-collapse: collapse;
   width: 90%;
   color: #070707;
   font-family: monospace;
   font-size: 18 px;
   text-align: center;
     } 
  th {
   background-color: #112e93;
   color: white;
    }
  tr:nth-child(odd) {background-color: #f2f2f2}
 </style>

 <style>
  html { 
      background: url(https://static1.squarespace.com/static/59137e7359cc6871b790d3a3/5914c907f7e0abd89c2179e0/5918d4a586e6c00c05a03843/1502595070793/Bluejay_Pharmacy.jpg?format=2500w) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    page-wrap { width: 400px; margin: 50px auto; padding: 20px; background: white; -moz-box-shadow: 0 0 20px black; -webkit-box-shadow: 0 0 20px black; box-shadow: 0 0 20px black; }
    p { font: 15px/2 Georgia, Serif; margin: 0 0 30px 0; text-indent: 40px; }
 </style>
 <body>
 
<!DOCTYPE html>
<html>
  

<style>
/*table {border-collapse: collapse;} table, td, th {border: 1px solid black;}*/
</style>
<!--<h1 style="text-align: center;">Tabla de Medicamentos</h1>-->
<body>
<div id="contenido">

<br>
    <table style="text-align: center;" align="center">
        <thead> 
            <tr>
                <th>Codigo Farmaco</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Laboratorio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody> 
        <?php foreach ($res as $res) { ?>
            <tr>
               <td><?= $res ['id_referencia']  ?></td>
                <td><?= $res ['descripcion']  ?></td>
                <td><?= $res ['precio']  ?></td>
                <td><?= $res ['nombre']  ?></td>
                <td>
    
                  <style>
                    form {
    display: inline;
}
                  </style>
                    <form action="formulario_actualizar.php" method="POST">
                        <input type="hidden" name="id_referencia" value="<?= $res['id_referencia'] ?>">
                        <input type="hidden" name="descripcion" value="<?= $res['descripcion'] ?>">
                        <input type="submit" class="button" value="Actualizar">
                    </form>
                        <form action="borrar_formulario.php" method="POST">
                        <input type="hidden" name="id_referencia" value="<?= $res['id_referencia'] ?>">
                        <input type="hidden" name="descripcion" value="<?= $res['descripcion'] ?>">
                        <input type="hidden" name="nombre" value="<?= $res['nombre'] ?>">
                        <input type="submit" class="button" value="Eliminar"> 
                    </form>
                </td>
            </tr>         
            <?php } ?>            
        </tbody>
    </table>
</div>
</html>
<!DOCTYPE html>
<html>
<head>
  <a href="formulario_agregar.php"><button>Agregar Medicamento</button></a>
  <a href="login.php"><button>Salir</button></a>
</head>
<body>

</body>
</html>

<?php
    mysqli_close($conexion);
    ?>