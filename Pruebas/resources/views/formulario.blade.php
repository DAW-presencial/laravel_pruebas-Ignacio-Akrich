<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <?php

    if (isset($_POST['submit'])) { 
        $name = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['passwd'];
        $confirm_password = $_POST['conf_passwd'];
        $cookie_name = "usuario";
        $cookie_value = $name;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 dia
        $session_name = "usuario";
        $session_value = $name;
        $_SESSION[$session_name] = $session_value;
    }
    ?>  
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php if (isset($_POST['submit'])) { echo $name; } ?>">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>">
        <br>
        <label for="passwd">Contraseña:</label>
        <input type="password" name="passwd" id="passwd" value="<?php if (isset($_POST['submit'])) { echo $password; } ?>">
        <br>
        <label for="conf_passwd">Confirmar contraseña:</label>
        <input type="password" name="conf_passwd" id="conf_passwd" value="<?php if (isset($_POST['submit'])) { echo $confirm_password; } ?>">
        <br>
        <input type="submit" name="submit" value="Enviar">  
</body>
</html>