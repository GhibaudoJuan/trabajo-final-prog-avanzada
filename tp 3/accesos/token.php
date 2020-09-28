<?php

function token(){
$valor = '0123456789abcdefghijklmnopqrstuvwxyz';
$cod=substr(str_shuffle($valor), 0, 6);
return $cod;
}
?>