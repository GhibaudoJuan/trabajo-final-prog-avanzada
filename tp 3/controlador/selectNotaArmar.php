<?php

require_once('../accesos/filtrar.php');

$tabla="";

while ($mifila = $resultado->fetch_array(MYSQLI_ASSOC))
{		
	$mifila['nombre'] = filtrar($mifila['nombre']);
	$mifila['nota'] = filtrar($mifila['nota']);
	$tabla.="<tr><td>".$mifila['nombre']."</td>";
	$tabla.="<td>".$mifila['nota']."</td>";
	$tabla.="<td><form action = '../vista/updateNota.php' method='post'><input type='hidden' name='asunto' value='".$mifila['nombre']."'><input type='hidden' name='nota' value='".$mifila['nota']."'><button type='sutmit' class='button'>Editar</button></form></td>";
	$tabla.="<td><form action = '../modelo/deleteNotaMysql.php' method='post'><input type='hidden' name='asunto' value='".$mifila['nombre']."'><button type='sutmit' class='button'>Borrar</button></form></td></tr>";
}

?>