<!DOCTYPE html>
<html lang="es">
<head>
	<title>Alta Cliente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
</head>
<body>
	<?php
		require ('Conexion.php');
		$fecha = date ("Y/m/d");
		if ($_REQUEST ['saldo'] >= 1000) {
			mysqli_query($conexion, "call alta_proceso($_REQUEST[idcliente], '$_REQUEST[nombre]', '$_REQUEST[apaterno]', '$_REQUEST[amaterno]', $_REQUEST[saldo], '$_REQUEST[telefono]', '$_REQUEST[correo]')") or die ("Problemas en el Select".mysqli_error($conexion));

		mysqli_query($conexion,	"insert into transaccion(cantidad, transaccion, fecha, idcliente) values ($_REQUEST[saldo],'deposito' ,'$fecha', $_REQUEST[idcliente]) ") or die ("Problemas en el Select".mysqli_error($conexion));

		mysqli_close($conexion);

		echo "Cliente Dado de Alta";
		} else {
			echo "Se Necesita Mas Dinero";
		}

	?>
	<br>
	<a href="Menu.html" class="btn btn-primary" >Regresar al Menu</a>
</body>
</html>