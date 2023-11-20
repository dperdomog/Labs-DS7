<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
    <?php
    function verificar_email($email)
    {
        return preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email);
    }

    function verificar_password_strength($password)
    {
        return preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password);
    }

    function verificar_ip($ip)
    {
        return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])" .
            "(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $ip);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repeatPassword = $_POST["repeatPassword"];
        $ip = $_POST["ip"];
        $errores = array();

        if (empty($nombre) || empty($apellido) || empty($email) || empty($password) || empty($repeatPassword) || empty($ip)) {
            $errores[] = "Todos los campos son obligatorios.";
        }

        if (!verificar_email($email)) {
            $errores[] = "El formato de correo electrónico es incorrecto.";
        }

        if ($password !== $repeatPassword) {
            $errores[] = "Las contraseñas no coinciden.";
        } elseif (!verificar_password_strength($password)) {
            $errores[] = "La contraseña no cumple con los requisitos de seguridad.";
        }

        if (!verificar_ip($ip)) {
            $errores[] = "La dirección IP no es válida.";
        }
        if (count($errores) === 0) {
            echo "<script>alert('Usuario registrado exitosamente.');</script>";
        } else {
            foreach ($errores as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required pattern="([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+" title="Formato de correo electrónico no válido">

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required pattern=".*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*" title="La contraseña no cumple con los requisitos de seguridad">

        <label for="repeatPassword">Repetir Contraseña:</label>
        <input type="password" name="repeatPassword" required>

        <label for="ip">IP actual del equipo:</label>
        <input type="text" name="ip" required pattern="^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$" title="La dirección IP no es válida">

        <input type="submit" value="Registrar Usuario">
    </form>
</body>
</html>
