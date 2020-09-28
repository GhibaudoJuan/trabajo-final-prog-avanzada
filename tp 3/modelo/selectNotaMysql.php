<?php
require_once("../accesos/accesoMysql.php");

$karlos=$_SESSION['user'];
$sql = "SELECT nombre,nota FROM $tablanotas WHERE usuario = '$karlos'";

$resultado = $mysqli->query($sql);

include('../controlador/selectNotaArmar.php');

echo $tabla;
$resultado->close();
$mysqli->close();


?>