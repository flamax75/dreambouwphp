<?php
$host = 'db';
$db   = 'dreambouw';
$user = 'dreamuser';
$pass = 'dreampass';

$nombre = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$telefono = $_POST['phone'] ?? '';
$mensaje = $_POST['message'] ?? '';

$mensajeCompleto = "Teléfono: " . $telefono . "\n\n" . $mensaje;

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);

    $sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre, $email, $mensajeCompleto]);

    echo "Mensaje guardado correctamente";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}