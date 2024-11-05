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
    <link rel="stylesheet" href="style.css">
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
                    <input type="text" name="username" placeholder="Nombre de usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit">Registrar</button>
                </form>
                <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión</a></p>
            </div>
        </div>
    </div>
</body>
</html>
