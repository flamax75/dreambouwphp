<?php

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact received</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="section contact">
        <div class="container">
            <h2>Message received</h2>
            <p>Thank you, <?php echo htmlspecialchars($name); ?>.</p>
            <p>We have received your message.</p>
            <p><a href="index.php">Back to homepage</a></p>
        </div>
    </section>
</body>
</html>