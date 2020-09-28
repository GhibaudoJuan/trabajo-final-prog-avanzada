<?php
session_start();
include("../accesos/validacion.php"); 
require_once("../accesos/accesoMysql.php");
require_once('../accesos/filtrar.php');


$user=$_SESSION["user"];
$asunto=$_POST['asunto'];
$coment=$_POST['coment'];




$user=filtrar($user);
$asunto=filtrar($asunto);
$coment=filtrar($coment);



$sql="INSERT INTO $tablanotas (usuario, nombre, nota) 
VALUES ('$user', '$asunto', '$coment')";
$mysqli->query($sql);

$mysqli->close();

header('location:../vista/selectNota.php');

?>