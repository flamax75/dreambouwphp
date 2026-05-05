<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';

    $adminUser = getenv('ADMIN_USER');
    $adminPassHash = getenv('ADMIN_PASS_HASH');

    if ($user === $adminUser && password_verify($pass, $adminPassHash)) {
        $_SESSION['admin'] = true;
        header('Location: admin-messages.php');
        exit;
    }

    $error = 'Invalid username or password';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Dream Bouw Group</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #111;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            background: #fff;
            border-radius: 14px;
            padding: 32px 26px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.35);
        }

        .login-card h1 {
            margin: 0 0 8px;
            font-size: 26px;
            color: #111;
        }

        .login-card p {
            margin: 0 0 24px;
            color: #666;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input:focus {
            outline: none;
            border-color: #111;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #111;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #333;
        }

        .error {
            background: #ffe5e5;
            color: #a40000;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .back-link {
            display: block;
            margin-top: 18px;
            text-align: center;
            color: #555;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h1>Admin Login</h1>
        <p>Access the Dream Bouw Group message panel.</p>

        <?php if ($error): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST">
            <div class="form-group">
                <label for="user">Username</label>
                <input type="text" id="user" name="user" placeholder="Enter username" required>
            </div>

            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" id="pass" name="pass" placeholder="Enter password" required>
            </div>

            <button type="submit">Log in</button>
        </form>

        <a class="back-link" href="index.php">Back to website</a>
    </div>

</body>
</html>