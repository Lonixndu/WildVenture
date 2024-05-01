<?php include('./database-connect.php');
    session_start(); ?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="./templates/CSS/website-css.css">
</head>

<body>
    <?php include('./templates/header.php'); ?>
    <div class="heading-1"><h1>Test</h1></div>
    <form action="test.php" method="post">
        First name:<br>
        <input type="text" name="fname"><br>
        Last name:<br>
        <input type="text" name="lname"><br>
        Email:<br>
        <input type="email" name="email"><br>
        Password:<br>
        <input type="password" name="pass"><br>
        <input type="submit" value="save" name="save">
    </form>
    <form action=test.php method="get">
        <input type="submit" value="logout" name="logout">
    </form>


    <?php include('./templates/footer.php'); ?>
</body>

</html>

<?php

    if(isset($_POST['save'])){
        $f_name = $_POST['fname'];
        $l_name = $_POST['lname'];

        $pass= $_POST['pass'];
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        
        $email = $_POST['email'];

        $sql = "INSERT INTO registered_user(F_Name, L_Name, Country, Email, Password)
                VALUES('$f_name', '$l_name', 'Sri Lanka', '$email', '$hash')";

        mysqli_query($conn, $sql);
    }
    

    mysqli_close($conn);
?>

<?php
    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
    }
?>