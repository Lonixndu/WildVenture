<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./CSS/admin-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome icons -->
</head>
<body>

    <div>
        <?php include('admin-header.php'); ?>
    </div>

    <div class="container">
        <div class="login-photo">
            <img src="login.jpg" alt="login">
        </div>
        <div class="login-form">
            <h2>Admin Login</h2>
            <form action="./database_admin/database-read.php" method="post">
                <div class="input-container">
                    <input type="email" name="admin-email" placeholder="Email" required>
                    <i class="fas fa-user"></i> <!-- Username icon -->
                </div>
                <div class="input-container">
                    <input type="password" name="admin-pass" placeholder="Password" required>
                    <i class="fas fa-eye-slash" id="togglePassword"></i> <!-- Show password icon -->
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>
