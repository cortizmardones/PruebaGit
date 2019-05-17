<?php

$nombre = $_POST['nombre'];

echo $nombre;

//Conexión 
$host = "localhost";
$puerto = "3306";
$usuario = "root";
$contrasena = "";

$baseDeDatos ="php";
$tabla = "usuario";

function Conectarse()
{
   global $host, $puerto, $usuario, $contrasena, $baseDeDatos, $tabla;

   if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) 
   { 
      echo "Error conectando a la base de datos.<br>"; 
      exit(); 
      }
   else
   {
      echo "Listo, estamos conectados.<br>";
   }
   if (!mysqli_select_db($link, $baseDeDatos)) 
   { 
      echo "Error seleccionando la base de datos.<br>"; 
      exit(); 
   }
   else
   {
      echo "Obtuvimos la base de datos $baseDeDatos sin problema.<br>";
   }
return $link; 
} 

$link = Conectarse(); 
$sql ="insert into usuario values (null,'$nombre')";
mysqli_query($link,$sql);
//mysql_close($link);

?>


