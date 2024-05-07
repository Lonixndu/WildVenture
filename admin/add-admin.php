<?php include('./database_admin/database-connect.php');
    session_start(); ?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="../templates/CSS/website-css.css">
</head>

<body>
    <div class="heading-1"><h1>Add New Admin</h1></div>
    <div class="info">
        <form action="add-admin.php" method="post">
            Email:<br>
            <input type="email" name="email"><br>
            Password:<br>
            <input type="password" name="pass"><br>
            <input type="submit" value="Add" name="save">
        </form>
    </div>
</body>

</html>

<?php

    if(isset($_POST['save'])){

        $pass= $_POST['pass'];
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        
        $email = $_POST['email'];

        $sql = "INSERT INTO admin(admin_email, admin_pass)
                VALUES('$email', '$hash')";

        mysqli_query($conn, $sql);
    }
    

    mysqli_close($conn);
?>