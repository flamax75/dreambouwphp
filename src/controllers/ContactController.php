<?php

require_once __DIR__ . '/../models/Message.php';

class ContactController
{
    public function store(): void
    {
        $nombre   = trim($_POST['name'] ?? '');
        $email    = trim($_POST['email'] ?? '');
        $telefono = trim($_POST['phone'] ?? '');
        $mensaje  = trim($_POST['message'] ?? '');

        if ($nombre === '' || $email === '' || $mensaje === '') {
            echo "Faltan campos obligatorios.";
            return;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email no válido.";
            return;
        }

        try {
            $messageModel = new Message();
            $messageModel->create($nombre, $email, $telefono, $mensaje);

            echo "Mensaje guardado correctamente";
        } catch (PDOException $e) {
            echo "Error al guardar el mensaje: " . $e->getMessage();
        }
    }
}