<?php

class Message
{
    private PDO $pdo;

    public function __construct()
    {
        $host = 'db';
        $db   = 'dreambouw';
        $user = 'dreamuser';
        $pass = 'dreampass';

        $this->pdo = new PDO(
            "mysql:host=$host;dbname=$db;charset=utf8mb4",
            $user,
            $pass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }

    public function create(string $nombre, string $email, string $telefono, string $mensaje): bool
    {
        $mensajeCompleto = "Telefono: " . $telefono . "\n\n" . $mensaje;

        $sql = "INSERT INTO mensajes (nombre, email, mensaje) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([$nombre, $email, $mensajeCompleto]);
    }
}