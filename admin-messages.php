<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

require_once __DIR__ . '/src/models/Message.php';

$messageModel = new Message();
$mensajes = $messageModel->all();
?>

<h1>Mensajes recibidos</h1>

<p><a href="logout.php">Cerrar sesión</a></p>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Mensaje</th>
        <th>Fecha</th>
        <th>Acción</th>
    </tr>

    <?php foreach ($mensajes as $mensaje): ?>
        <tr>
            <td><?= htmlspecialchars($mensaje['id']) ?></td>
            <td><?= htmlspecialchars($mensaje['nombre']) ?></td>
            <td><?= htmlspecialchars($mensaje['email']) ?></td>
            <td><?= nl2br(htmlspecialchars($mensaje['mensaje'])) ?></td>
            <td><?= htmlspecialchars($mensaje['fecha']) ?></td>
            <td>
                <form action="delete-message.php" method="POST" onsubmit="return confirm('¿Borrar este mensaje?');">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($mensaje['id']) ?>">
                    <button type="submit">Borrar</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>