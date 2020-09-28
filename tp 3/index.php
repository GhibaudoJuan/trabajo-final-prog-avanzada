<?php 
session_start();
session_regenerate_id(true);
require_once('accesos/token.php');

$_SESSION['cod']=token();
?>



<!doctype html>
<html>

<head>
<meta charset="UTF-8">

<link rel="stylesheet" href="style/form.css">
<link rel="stylesheet" href="style/generales.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<title>Login</title>
<div style="text-align:center;"><img src='encabezado.jpg' alt='encabezado'> </div>
</head>
<body>






</br>
<div style=' margin:auto ;width:250px; height:300px; ' >

<form action ="procesoform.php" method="post" >


<span class='span'>Usuario</span>


<input type="text" name="user" autofocus class="blue-input" >


<span class='span'>Contraseña</span>


<input type="password" name="password" class="blue-input" >

<input type="hidden" name="codigo" value="<?= $_SESSION['cod'] ?>">





<?php if(isset($_SESSION['val'])&&($_SESSION['val']==false)): ?>
<span style="color:red;">*Usuario o contraseña incorrectos*</span> 
<?php endif; ?>

<div class="g-recaptcha" data-sitekey="Codigorecapcha"></div>

<button type="submit" class="button" >Login</button>

<button type="submit" class="button" formaction="vista/RegistrarUsuario.php">Registrarse</button>
</form>


</div>
</body>
<div style="text-align:center;" ><img src='pie.jpg' alt='encabezado'> </div>
</html>

