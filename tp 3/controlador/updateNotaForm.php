<?php 
include("../accesos/validacion.php");

$asunto= $_POST['asunto'];
$nota= $_POST['nota'];

?>





<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Actualizar Nota</title>


</head>
<body>


<form action = "../modelo/updateNotaMysql.php" method="post" id="update">
<span class='span'>Asunto</span>
<input type="txt" name="nuevoasunto"  class="blue-input" size="30" maxlength="50" value='<?= $asunto;?>' >
<input type="hidden" name="asunto" value="<?= $asunto;?>">
<input type="hidden" name="nota" value="<?= $nota;?>">

</br>
<span class='span'>Nota</span>

<textarea name="nuevanota" rows="10" cols="33" style="resize:none;" form="update" maxlength="500" ><?= $nota;?></textarea>
</br></br>
<button type="sutmit" class="button">Actuazizar</button>

</form>

</boby>
</html>