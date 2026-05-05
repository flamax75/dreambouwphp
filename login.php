<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';

    if ($user === 'admin' && $pass === 'admin123') {
        $_SESSION['admin'] = true;
        header('Location: admin-messages.php');
        exit;
    }

    $error = 'Usuario o contraseña incorrectos';
}
?>

<h1>Login administrador</h1>

<?php if ($error): ?>
    <p style="color:red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="POST">
    <input type="text" name="user" placeholder="Usuario" required>
    <br><br>
    <input type="password" name="pass" placeholder="Contraseña" required>
    <br><br>
    <button type="submit">Entrar</button>
</form>