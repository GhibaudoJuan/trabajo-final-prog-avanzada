<?php

session_start();
$nombre=$_POST['user'];
$contra=$_POST['contra'];
$confir=$_POST['confir'];

require_once('../accesos/filtrar.php');
$nombre=filtrar($nombre);
$contra=filtrar($contra);
$confir=filtrar($confir);


if($contra==$confir){
	$_SESSION['confir']=true;
	require_once("../accesos/accesoMysql.php");
	$opciones = [
  	  'cost' => 12,
	];
	$hash= password_hash($contra, PASSWORD_BCRYPT, $opciones);
	$sql="INSERT INTO $tablausuarios (nombre, contrasenia) 
	VALUES ('$nombre', '$hash')";
	$mysqli->query($sql);

	$mysqli->close();

	header('location:../index.php');	

}
else{
	$_SESSION['confir']=false;
	header('location:../vista/RegistrarUsuario.php');
}
?>