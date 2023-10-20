<?php
require "funciones/conecta.php";
$con = conecta();

$sql  = "SELECT * FROM empleados
         WHERE status = 1 AND eliminado = 0";
$res = $con->query($sql);

while($row = $res->fetch_array()){
    $id             = $row["id"];
    $nombre         = $row["nombre"];
    $apellidos      = $row["apellidos"];
    echo "$id $nombre $apellidos";
    echo "<a href= \"empleados_elimina.php?id=$id\"> ELIMINAR</a><br>";
}
?>