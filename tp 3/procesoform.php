<?php
session_start();
$user =$_POST['user']; 
$pass =$_POST['password'];
$cod=$_POST['codigo'];

require_once('accesos/filtrar.php');

if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']){
$secret = "codigoderecaptcha";
$ip= $_SERVER['REMOTE_ADDR'];
$captcha = $_POST['g-recaptcha-response'];

$resultado =file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
$array =json_decode($resultado,TRUE);
	if($array['success']){


		if(vtoken($cod)){
			$user=filtrar($user);
			$pass=filtrar($pass);	
			if((!is_string($user))&&(!is_string($pass))){
				$_SESSION['val']=false;
				header('location:index.php');
			}
			else{

				require_once("accesos/accesoMysql2.php");
				$sql= "SELECT contrasenia FROM $tablausuarios WHERE nombre = '$user'";
				$resultado = $mysqli->query($sql);
				if($resultado){
					$hash = $resultado->fetch_array(MYSQLI_ASSOC);
					if(password_verify($pass, $hash['contrasenia'])){
						$resultado->close();
						$mysqli->close();
						$_SESSION['val']=true;
						$_SESSION['user']=$user;
						header('location:vista/selectNota.php');
					}
					else{
					$resultado->close();
					$mysqli->close();
					$_SESSION['val']=false;
					header('location:index.php');				
					}
				}
				else{
					$resultado->close();
					$mysqli->close();
					$_SESSION['val']=false;
					header('location:index.php');
				}
			}
		}
		else{
			header('location:index.php');
		}
	}
	else{
		header('location:index.php');
	}
}
else{
header('location:index.php');
}

?>






