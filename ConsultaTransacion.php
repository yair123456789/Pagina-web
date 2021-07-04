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
          <div class="panel panel-heading"><b>Transacciones realizadas</b></div>
          <div class="panel panel-body">

            <form action="ConsultarCliente.php" name="formulario_registro" method="post">
              <div text-aling="center"> 
                <table border='1' cellpadding='1' cellspacing='0' class="tabla">
                  <caption><center><b>LISTADO</b></center></caption>
                  <thead>
                    <tr>
                      
                      <th><center>Cantidad</center> </th>
                      <th><center>Movimiento</center> </th>
                      <th><center>Fecha</center> </th>
                      <th><center>Id Cliente</center> </th>
                    </tr>
                  </thead>
                  <?php
                  require('conexion.php');

                  $idd=$_REQUEST['idcliente'];  

                  $registros=mysqli_query($conexion,"select * from vista3 where idcliente =$idd") or
                  die("Problemas en el select:".mysqli_error($conexion));

    ///if($lista=mysqli_fetch_array($registros)){
                  while ($lista=mysqli_fetch_array($registros)):
                   echo "
                   <tr> 
                   <td width='150'>"."<center>".$lista['cantidad']."</center>"."</td>
                   <td width='150'>"."<center>".$lista['transaccion']."</center>"."</td>
                   <td width='150'>"."<center>".$lista['fecha']."</center>"."</td>
                   <td width='150'>"."<center>".$lista['idcliente']."</center>"."</td>
                   </tr>
                   ";


    //*****
                 endwhile;

                 ?>
               </table>
             </div>
             <br>
             <a class="btn btn-primary" href="Menu.html">Regresar al Menu</a>
           </table>
         </div>
         <br>
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



