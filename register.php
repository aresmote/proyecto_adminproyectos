<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute(['username' => $username, 'password' => $password]);
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilo.css">
    <title>Registro de Usuario</title>
</head>
<body>
    <div class="wrapper">
        <div class="left">
        
        </div>
        <div class="right">
            <div class="container login">
                <h2>Registro de Usuario</h2>
                <form method="POST">
                    <input class="username" type="text" name="username" placeholder="Nombre de usuario" required autocomplete="off">
                    <input class="password" type="password" name="password" placeholder="Contraseña" required autocomplete="off">
                    <button type="submit">Iniciar sesión</button>
                </form>
                <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
            </div>
        </div>
    </div>
</body>
</html>
