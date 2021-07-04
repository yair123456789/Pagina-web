<?php
require('conexion.php');

$idd=$_REQUEST['idcliente'];  

mysqli_query($conexion,"DELETE FROM transaccion WHERE idcliente  =$idd") or
die ("Problemas en el Select".mysqli_error($conexion));

mysqli_query($conexion,"call eliminar_proceso($idd)") or
die ("Problemas en el Select".mysqli_error($conexion));


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
	<script src="librerias/jquery-3.2.1.min.js"></script>
	<script src="js/funciones.js"></script>
	<title></title>
</head>
<body style="background-color: #2271b3">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading">AVISO!!</div>
					<div class="panel panel-body">
						<label>El cliente se ha eliminado con exito!!</label>
						<a style="background-color: #2271b3" class="btn btn-danger" href="Menu.html">Regresar al Menu</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>


