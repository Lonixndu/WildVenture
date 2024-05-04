<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <form action="database-update.php" method="post">
        Enter New Password:
        <input type="password" name="new-pass" id="new-pass">
        <input type="submit" value="Update" name="update">
    </form>
</body>
</html>

<?php
    include('./database-connect.php');

    if(isset($_POST['update'])){

        $email = $_SESSION['email'];
        $pass = $_POST['new-pass'];
        $hash = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "UPDATE registered_user SET password='$hash' WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        echo "Password Updated Successfully!<br>";
        echo "<a href='../account-page.php'>Go Back<a>";
    }
    

    mysqli_close($conn);
?>