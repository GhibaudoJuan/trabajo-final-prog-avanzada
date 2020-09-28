<?php 
session_start();
include("../accesos/validacion.php"); 
require_once('../accesos/filtrar.php');
require_once("../accesos/accesoMysql.php");



$user=$_SESSION["user"];
$asunto=$_POST['asunto'];
$nuevoasunto =$_POST['nuevoasunto'];
$nuevanota =$_POST['nuevanota'];



$user=filtrar($user);
$asunto=filtrar($asunto);
$nuevoasunto=filtrar($nuevoasunto);
$nuevanota=filtrar($nuevanota);

$sql="UPDATE $tablanotas SET nombre = '$nuevoasunto', nota = '$nuevanota' WHERE usuario = '$user' AND nombre = '$asunto'";
$mysqli->query($sql);

$mysqli->close();
header('location:../vista/selectNota.php');

?>


