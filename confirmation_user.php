<?php

//phpinfo();

include "inicializador.php";
include "conexion.php";
include "funciones.php";
include "actions_confirmation.php";

?>

<!DOCTYPE html>
<html>
<?php include "favicon.html"; ?>

<head>
    <title>Confirmación de usuario</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }

    .login-container {
        width: 300px;
        margin: 40px auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form {
        margin-top: 20px;
    }

    .login-form label {
        display: block;
        margin-bottom: 10px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .login-form input[type="submit"] {
        width: 100%;
        height: 40px;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .login-form input[type="submit"]:hover {
        background-color: #3e8e41;
    }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>


<body>
    <div class="login-container">
        <h2>Confirmación usuario</h2>
        <div class="alert alert-<?php echo $claseMensaje; ?>" role="alert" style="display:<?php echo $displayAlert; ?>;">
            <font size=2><?php echo $mensaje; ?></font>
        </div>
        <form class="login-form" action="evalua_confirmacion.php" method="post">
            <label for="code">Código de confirmación:</label>
            <input type="number" id="code" name="code" min="1000" max="9999" required><br><br>
        
            <input type="text" id="hash" name="hash" style="display:none" value="<?php echo $hash; ?>"><br><br>
            <input type="submit" value="Confirmación">

        </form>
    </div>
</body>

</html>