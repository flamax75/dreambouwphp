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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel | Dream Bouw</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: #f2f2f2;
    padding: 20px;
}

.container {
    max-width: 1100px;
    margin: auto;
}

.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

h1 {
    margin: 0;
}

.logout {
    text-decoration: none;
    color: #fff;
    background: #111;
    padding: 10px 14px;
    border-radius: 6px;
}

.card {
    background: #fff;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.card strong {
    display: block;
    margin-bottom: 4px;
}

.meta {
    font-size: 13px;
    color: #666;
    margin-top: 6px;
}

button {
    margin-top: 10px;
    background: #dc3545;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 6px;
    cursor: pointer;
}

button:hover {
    background: #c82333;
}

/* TABLE SOLO PARA ESCRITORIO */
.table {
    display: none;
}

@media(min-width: 768px) {
    .cards {
        display: none;
    }

    .table {
        display: table;
        width: 100%;
        border-collapse: collapse;
        background: white;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    th {
        background: #111;
        color: white;
    }
}
</style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Messages</h1>
        <a href="logout.php" class="logout">Logout</a>
    </div>

    <!-- MOBILE (cards) -->
    <div class="cards">
        <?php foreach ($mensajes as $mensaje): ?>
            <div class="card">
                <strong><?= htmlspecialchars($mensaje['nombre']) ?></strong>
                <div><?= htmlspecialchars($mensaje['email']) ?></div>

                <p><?= nl2br(htmlspecialchars($mensaje['mensaje'])) ?></p>

                <div class="meta"><?= htmlspecialchars($mensaje['fecha']) ?></div>

                <form action="delete-message.php" method="POST" onsubmit="return confirm('Delete this message?');">
                    <input type="hidden" name="id" value="<?= $mensaje['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- DESKTOP (table) -->
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

        <?php foreach ($mensajes as $mensaje): ?>
            <tr>
                <td><?= $mensaje['id'] ?></td>
                <td><?= htmlspecialchars($mensaje['nombre']) ?></td>
                <td><?= htmlspecialchars($mensaje['email']) ?></td>
                <td><?= nl2br(htmlspecialchars($mensaje['mensaje'])) ?></td>
                <td><?= htmlspecialchars($mensaje['fecha']) ?></td>
                <td>
                    <form action="delete-message.php" method="POST" onsubmit="return confirm('Delete this message?');">
                        <input type="hidden" name="id" value="<?= $mensaje['id'] ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</div>

</body>
</html>