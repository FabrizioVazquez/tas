<?php

@session_start();

//$_POST=$_GET;

ini_set('session.gc_maxlifetime', 3600);
ini_set('session.cookie_lifetime', 3600);

error_reporting(1);

ob_clean();


include "inicializaVariables.php";