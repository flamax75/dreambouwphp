<?php

class Message
{
    private PDO $pdo;

    public function __construct()
    {
        $host = getenv('DB_HOST');
        $db   = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASS');

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

    public function all(): array
    {
        $sql = "SELECT * FROM mensajes ORDER BY fecha DESC";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll();
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM mensajes WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([$id]);
    }
}
