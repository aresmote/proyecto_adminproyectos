<?php
// db.php
$host = 'localhost';
$dbname = 'test1';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa a la base de datos"; // Mensaje de prueba de conexión exitosa
} catch (PDOException $e) {
    // echo "Error de conexión: " . $e->getMessage();
}
?>

