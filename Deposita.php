<?php
//OPERACION DEPOSITO
$fecha = date("Y/m/d");
require('conexion.php');


$monto = $_REQUEST['Monto'];
$id = $_REQUEST['idcliente'];

mysqli_query($conexion,"call actualiza_proceso($monto,$id)
	") or die("Problemas en el select:".mysqli_error($conexion));

mysqli_query($conexion,"insert into transaccion(cantidad,transaccion,fecha,idcliente) values ($monto,'deposito','$fecha',$id)") or die("Problemas en el select".mysqli_error($conexion));

mysqli_close($conexion);

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
					<div class="panel panel-heading">Transaccion realizada con exito</div>
					<div class="panel panel-body">
						<form>
							<label>Desea Realizar Otra Operacion?</label>
							<br>
							<a class="btn btn-success" href="Transaccion.html">SI</a>
							<p></p>
							<a class="btn btn-danger" href="Menu.html">NO</a>
						</form>
						<p></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
