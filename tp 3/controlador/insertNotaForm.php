<?php 
include("../accesos/validacion.php"); 
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Insertar Nota</title>


</head>
<body>


<form action = "../modelo/insertNotaMysql.php" method="post" id="insert">

<span class='span'>Asunto</span>
<input type="txt" name="asunto" autofocus class="blue-input" size="30" maxlength="150" >
</br>

<span class='span'>Nota</span>

<textarea name="coment" rows="10" cols="33" maxlength="500" style="resize:none;" form="insert"></textarea>
</br></br>
<button type="sutmit" class="button">Insertar</button>

</form>

</boby>
</html>