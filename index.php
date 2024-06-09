
<?php
    include "inicializador.php";
    include "conexion.php";
    include "funciones.php";

    include "evaluaUsuarioLogueado.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido al Sistema TAS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2;
            padding: 50px;
        }
        
        .container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        
        p {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }
        
        .button {
            display: inline-block;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido al Sistema TAS!</h1>
        <p>Usuario logueado en sistema TAS</p>
        <a href="#" class="button">Ir al Sistema</a>
    </div>
</body>
</html>