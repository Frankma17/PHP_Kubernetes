<?php
// 1) Conexion
$db_server = "192.168.67.2:30714";
$db_user = "root";
$db_pass = "root";
$db_name = "nodos";
$mysqli = new mysqli($db_server, $db_user, $db_pass, $db_name);
if ($conexion = $mysqli){


echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

// 2) Preparar la orden SQL
$consulta= "SELECT*FROM nodo WHERE id=1";

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

}else{
echo "<p> MySQL no conoce ese usuario y password</p>";
}
?>
