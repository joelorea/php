<?php 

$conectarBD=@mysqli_connect("localhost","root","","bancoi4");
 if (!$conectarBD) {
     die("no hay conexión de la conejera");
 } 
 else {
     echo "Conexión exitosa";
 }
?>
