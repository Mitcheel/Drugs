<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Confirmar</title>
   </head>
   <body>
      <style>
         html { 
         background: url(https://www.shape.com.sg/sites/default/files/article/2017/03/She%20became%20addicted%20to%20sleeping%20pills.jpg) no-repeat center center fixed; 
         -webkit-background-size: cover;
         -moz-background-size: cover;
         -o-background-size: cover;
         background-size: cover;
         }
      </style>
      <h1><font color="#4d2600"> Ingrese el codigo del farmaco que quiere agregar </h1>
      <form action="agregar_medicamento.php" method="POST">
         <input type="text" name="codigo" placeholder="Ingrese el codigo ">
         <label>Nuevo codigo:</label>
         <br>
          <input type="text" name="descripcion" placeholder="Ingrese descripcion ">
         <label>Agregue Proveedor:</label>
         <br>
         <input type="text" name="precio" placeholder="Ingrese el precio ">
         <label>Agregue precio:</label>
         <br>
         <input type="text" name="id_proveedor" placeholder="Ingrese el id_proveedor  ">
         <label>Agregue id_proveedor:</label>
         <br>
         <input type="submit" name="name" value="Confirmar">
      </form>
   </body>
</html>