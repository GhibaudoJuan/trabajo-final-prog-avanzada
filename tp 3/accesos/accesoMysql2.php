<?php


$servidor = "localhost";
$basededatos = "trabprac";
$usuario = "martin";
$password = "12345";


$tablausuarios="usuario";

$mysqli = new mysqli($servidor, $usuario, $password, $basededatos);


if ($mysqli->connect_errno) {
	printf("Falla la conexion: %s\n", $mysqli->connect_error);
	exit();
}


?>