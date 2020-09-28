<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!doctype html>
<html>

<head>
<meta charset="UTF-8">


<link rel="stylesheet" href="style/menu.css">

</head>
<body>



<ul class="desplega">
	<li><a><?= $_SESSION['user']; ?></a>
		<ul>
			<li><a href="../vista/insertNota.php">Nueva Nota</a></li>
			<li><a href="../vista/selectNota.php">Notas</a></li>			
			<li><a href="../accesos/cerrar_sesion.php">Cerrar Sesion</a></li>
		</ul>
</li>
</ul>

</body>
</html>

