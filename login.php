<?php
session_start();
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username === 'admin' && $password === 'password123') {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user'] = 'admin';
        header('Location: dashboard.php');
        exit;
    }

    $message = 'Invalid username or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-page">
        <div class="bubble-bg"></div>
        <div class="login-box">
            <h1 class="login-title">Admin Login</h1>
            <p class="text-center text-white-75">Login to access the student management dashboard.</p>
            <?php if ($message): ?>
                <div class="alert alert-danger mt-3"><?php echo htmlspecialchars($message); ?></div>
            <?php endif; ?>
            <form action="" method="post" class="mt-4">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="admin" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="password123" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
