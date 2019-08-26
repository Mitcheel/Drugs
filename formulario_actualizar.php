
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualizar Precio</title>

</head>
<body>
	 <style>
  html { 
      background: url(https://static1.squarespace.com/static/59137e7359cc6871b790d3a3/5914c907f7e0abd89c2179e0/5918d4a586e6c00c05a03843/1502595070793/Bluejay_Pharmacy.jpg?format=2500w) 
      no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
 <?php  
	$id_referencia = $_POST['id_referencia'];
	$descripcion= $_POST['descripcion']

?>
 </style>
	<h1><font color="MidnightBlue">Actualice el precio de <u><?= $_POST['descripcion']?>
		
	<!-- -->
	</u><h1><h1><u><?= $id_referencia = $_POST['id_referencia']?></u><h1>
	<form action="actualizar.php" method="POST">
	<label>Nuevo Precio:</label>
	<input type="hidden" name="id_referencia" value="<?= $_POST['id_referencia'] ?>">
	<input type="text" name="nuevo_precio" placeholder="Ingrese el nuevo precio ">
	<br>
	<input type="submit" name="nombre" value="Actualizar">

	</form>

</body>
</html>