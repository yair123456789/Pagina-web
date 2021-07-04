<html>
<head>
  <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
  <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="js/funciones.js"></script>
</head>
<body style="background-color: #2271b3">
  <br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-10"></div>
      <center><div class="col-sm-10">
        <div class="panel panel-danger">
          <div class="panel panel-heading">Consulta</div>
          <div class="panel panel-body">

            <form action="ConsultarCliente.php" name="formulario_registro" method="post">
              <div text-aling="center"> 
                <table border='1' cellpadding='1' cellspacing='0' class="tabla">
                  <caption>Consulta de cliente</caption>
                  <thead>
                    <tr>
                     
                     <th><center>Nombre</center></th>
                     <th><center>Apellido paterno</center> </th>
                     <th><center>Apellido materno</center> </th>
                       <th><center>Saldo</center> </th>
                   </tr>
                 </thead>
                 <?php
                 require('conexion.php');

                 $idd=$_REQUEST['idcliente'];  

                 $registros=mysqli_query($conexion,"select nombre, apaterno, amaterno,saldo from vista2 where idcliente =$idd") or
                 die("Problemas en el select:".mysqli_error($conexion));

                 if($lista=mysqli_fetch_array($registros)){

                   echo "
                   <tr> 
                   
                   <td width='150'>"."<center>".$lista['nombre']."</center>"."</td>
                   <td width='150'>"."<center>".$lista['apaterno']."</center>"."</td>
                   <td width='150'>"."<center>".$lista['amaterno']."</center>"."</td>
                   <td width='150'>"."<center>".$lista['saldo']."</center>"."</td>
                   </tr>
                   ";
                 }else{
                  echo "no existe ese cliente<br>"; 
                }
                mysqli_close($conexion);

                ?>
              </table>
            </div>
            <br>
            <a class="btn btn-primary" href="Menu.html">Regresar al Menu</a></center>
          </form>
          <p></p>
          <p></p>
        </div>
      </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>
</body>
</html>