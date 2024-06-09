<?php

include "inicializador.php";
include "conexion.php";
include "funciones.php";


echo "<br> el hash a evaluar es: ".$_POST["hash"];

$hash=$_POST["hash"];
if(strlen($hash)>5){
    $codeHope=traeUnDato($mysqli,"select numero_secreto as dato
        from ".BASEDEDATOS.".numero_secreto
        where hash='{$hash}'
        order by id desc limit 1","-1");
    $codeRec=$_POST["code"];
    if($codeHope>=1000){
        if($codeRec==$codeHope){
            header("Location: index.php");
            exit();
        }else{
            header("Location: confirmation_user.php?e=1&h=".$hash);
            exit();
        }
    }
}
