<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/src/models/Message.php';

$id = (int) ($_POST['id'] ?? 0);

if ($id > 0) {
    $messageModel = new Message();
    $messageModel->delete($id);
}

header('Location: admin-messages.php');
exit;