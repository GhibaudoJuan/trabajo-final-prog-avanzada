<?php

function filtrar($algo): string{
$a = filter_var($algo, FILTER_SANITIZE_STRING);
return $a; 
}

function vtoken($algo):bool{
return ($algo==$_SESSION['cod']);
}
?>