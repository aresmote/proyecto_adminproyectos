<?php
    session_start();
    require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
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
            <div class="left">
            <imagen src="img/OIG4.jpg">
            </div>
            <div class="right">
                <div class="container login">
                    <h2>Inicio de Sesión</h2>
                    <form method="POST">
                        <input type="text" name="username" placeholder="Nombre de usuario" required>
                        <input type="password" name="password" placeholder="Contraseña" required>
                        <button type="submit">Iniciar sesión</button>
                    </form>
                    <p>¿No tienes cuenta? <a href="register.php">Regístrate aquí</a></p>
                    <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
                </div>
            </div>
    </div>
</body>
</html>
