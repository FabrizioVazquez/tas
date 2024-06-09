<?php
$display="none";
if(isset($_GET)){
    if($_GET["e"]==1){
        $mensaje="El usuario o la contraseña son incorrectos";
        $display="block";
    }
}