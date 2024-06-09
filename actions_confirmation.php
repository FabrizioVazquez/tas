<?php
$claseMensaje="primary";
$display="block";
$mensaje="Por favor coloque el código de cuatro dígitos que le hemos enviado por mail";
$hash=$_GET["h"];

if($_GET["e"]==1){
    $claseMensaje="danger";
    $mensaje="El código de confirmación es incorrecto";
}

