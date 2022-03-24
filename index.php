<?php
// 1) Conexión
if ($conexión = mysql_connect("192.168.67.2", "root", "root")){
echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario</p>";

// 2) Preparar la orden SQL
$consulta= "SELECT*FROM nodo";

// 3) Ejecutar la orden y obtener datos
mysql_select_db("nodos");
$datos= mysql_query ($conexion,$consulta);

// 4) Ir Imprimiendo las filas resultantes
while ($fila =mysql_fetch_array($datos)){
echo "<p">;
echo $fila ["id"];
echo "-"; // un separador
echo $fila["nombre"];
echo "-"; // un separador
echo "</p>";
}

}else{
echo "<p> MySQL no conoce ese usuario y password</p>";
}
?>
