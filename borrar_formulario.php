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

<?php  
	$id_referencia = $_POST['id_referencia'];
	$descripcion= $_POST['descripcion']
?>
 </style>


	<h1><font color="#4d2600">Confirme que el farmaco a eliminar es <u><?= $_POST['descripcion']?>
	<br>
	<form action="borrar_medicamento.php" method="POST">
    <input type="hidden" name="id_referencia" value="<?= $_POST['id_referencia'] ?>">
	<input type="submit" name="nombre" value="Confirmar">
	<br>
	</form>
	<a href="indice.php"><button>Me arrepentí</button></a>
	

	
</body>

</html>