<?php

include "definiciones.php";



$_SESSION["hash"] = hash('sha256', PROYECTO . rand(1, 1000000));