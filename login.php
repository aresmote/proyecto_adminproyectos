<?php
    session_start();
    require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitización de entrada
        $username = htmlspecialchars(trim($_POST['username']));
        $password = trim($_POST['password']);

        // Preparación y ejecución de la consulta
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        // Verificación de usuario y contraseña
        if ($user && password_verify($password, $user['password'])) {
            // Regenerar el ID de sesión por seguridad
            session_regenerate_id(true);
            $_SESSION['user'] = $user['username'];
            header("Location: main.php");
            exit;
        } else {
            $error = "Nombre de usuario o contraseña incorrectos";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilo.css">
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="wrapper">
        <div class="left"></div>
        <div class="right">
            <div class="container login">
                <h2>Inicio de Sesión</h2>
                <form method="POST">
                    <input class="username" type="text" name="username" placeholder="Nombre de usuario" required autocomplete="off">
                    <input class="password" type="password" name="password" placeholder="Contraseña" required autocomplete="off">
                    <button type="submit">Iniciar sesión</button>
                </form>
                <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
                <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            </div> 
            
        </div>
    </div>
</body>
</html>
