<?php session_start(); ?>


<!doctype html>
<html>
<head>
<title>Registrar Usuario</title>
<meta charset="UTF-8">

</head>
<body>


<form action = "../modelo/RegistrarUsuarioMysql.php" method="post" >

<spa class="span">Usuario</span>
<input type='txt' name="user" autofocus class="blue-input"  maxlength="50" size="30" >
<spa class="span">Contrasenia</span>
<input type='password' name="contra" class="blue-input"  maxlength="50" size="30" >
<spa class="span">Confirmar contrasenia</span>
<input type='password' name="confir" class="blue-input" maxlength="50" size="30" >


<?php if(isset($_SESSION['confir'])&&($_SESSION['confir']==false)): ?>
<span style="color:red;">*Contraseña no concuerda*</span> 
<?php endif; ?>



<button type="sutmit" class="button">Registrar</button>




</form>


</body>


</html>
