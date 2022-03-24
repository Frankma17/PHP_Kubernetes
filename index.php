<?php
// 1) Conexion
if ($conexion = new mysqli("192.168.67.2:30714", "root", "root",'nodos')){
echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

// 2) Preparar la orden SQL
$consulta= "SELECT*FROM nodo WHERE id = 1";

// 3) Ejecutar la orden y obtener datos
mysqli_select_db($conexion,"nodos");
$datos= mysqli_query ($conexion,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysqli_fetch_array($datos)){
echo "<p>";
echo $fila ["id"];
echo "-"; // un separador
echo $fila["nombre"];
echo "</p>";
}
