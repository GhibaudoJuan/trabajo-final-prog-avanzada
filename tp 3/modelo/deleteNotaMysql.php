<?php 
session_start();
include("../accesos/validacion.php"); 
$user=$_SESSION["user"];
$asunto=$_POST['asunto'];

require_once("../accesos/accesoMysql.php");


$sql="DELETE FROM $tablanotas WHERE usuario = '$user' and nombre = '$asunto'";
$mysqli->query($sql);



$mysqli->close();
header('location:../vista/selectNota.php');

?>