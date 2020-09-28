<?php

include("../accesos/validacion.php");
$servidor = "localhost";
$basededatos = "trabprac";
$usuario = "martin";
$password = "12345";

$tablanotas ="notas";
$tablausuarios="usuario";

$mysqli = new mysqli($servidor, $usuario, $password, $basededatos);


if ($mysqli->connect_errno) {
	header("location:../vista/errorMysql.php");
	exit();
}


?>