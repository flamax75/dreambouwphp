<?php
$host = 'db';
$db   = 'dreambouw';
$user = 'dreamuser';
$pass = 'dreampass';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    echo "Conexión correcta a MySQL desde Docker";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}