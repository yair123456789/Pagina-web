<?php
$url = "localhost";

 //$user = "invitado";
 //$pass = "12345";
 $user = "root";
 $pass = "";

//$user = "yair";
//$pass = "12345";

$db = "banco_curso";
$conexion = mysqli_connect($url,$user,$pass,$db) or die ("No se Puede Conectar a la Base de Datos")
?>