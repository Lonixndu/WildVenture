<?php 
    session_start();
    $email = $_SESSION['a_email'];
    $id = $_SESSION['aid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WildVenture Admin Account</title>

    <link rel="icon" href="../templates/favicon.ico">
    <link rel="stylesheet" href="./CSS/admin-login.css">
    <link rel="stylesheet" href="./CSS/admin-site.css">
</head>
<body>
    
    <div>
        <?php include('./admin-header.php'); ?>
    </div>

    <div class="heading-1">
        <h1>Admin Profile</h1>
    </div>

    <div class="info">
        Your ID: <?php echo "$id"; ?> <br>
        Your Email:  <?php echo "$email"; ?> <br>

        <form action="admin-account.php" method="GET">
            <input type="submit" value="Admin Log Out" name="logout">
        </form>
            <?php
                if (isset($_GET['logout']))
                {
                    session_unset();
                    session_destroy();
                    header("Location: ./admin-login.php");
                }
            ?>
</body>
</html>