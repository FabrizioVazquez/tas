<?php

include "inicializador.php";
include "conexion.php";
include "funciones.php";

$usuarioLogueado=false;

//echo "<br> 8 _post: ".pp($_POST);
$id_usuario=usuario_valido($mysqli,$_POST["username"],$_POST["password"]);

/* echo "<br> 12 id_usuario: ".$id_usuario; */

$usuario=null;

if($id_usuario>0){
    $usuarioLogueado=true;
    $usuario= new Producto_Usuario($mysqli,$id_usuario);
    /* echo "<br> 19 empresa del usuario: ".$usuario->empresa; */
}else{
    $usuarioLogueado=false;
}

/* echo "<br> 23 usuario: <br>";
print_r($usuario); */

if($usuarioLogueado){
    agrega_log($mysqli,"evalua_login","","usuario logueado: ".$id_usuario);
    generaNumeroSecreto($mysqli,$_SESSION["hash"]);
    enviaNumeroPorMail($mysqli,$usuario,$_SESSION["hash"]);
}else{
    agrega_log($mysqli,"evalua_login","","usuario no logueado correctamente: ".antiSQLIny($_POST["username"]));
}


include "cierraConexion.php";

if($usuarioLogueado){

    echo "<br> Usuario Logueado, ahora debo ir a la pantalla de confirmación <br>";
    print_r($usuario);
    echo "<br> 42 hash: ".$_SESSION["hash"];

    header("Location: confirmation_user.php?h=".$_SESSION["hash"]);
    exit();
    /* echo "<br> 21 usuario logueado";
    echo "<br> 21 hash: ".$_SESSION["hash"]; */
    
}else{
    header("Location: login.php?e=1");
    exit();
}
