<?php

    $usuarioLogueado=false;
    if(isset($_SESSION["user"])){
        if(intval($_SESSION["user"]>0)){
            $usuario= new Producto_Usuario($mysqli,$_SESSION["user"]);
            $usuarioLogueado=true;
        }
    }

    if(!$usuarioLogueado){
        header("Location: login.php");
        exit();
    }

?>