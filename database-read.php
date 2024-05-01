<?php
    session_start();
    include('./database-connect.php');

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM registered_user WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        if($row['email'] === $email && $row['password'] === $pass){
            $_SESSION['uid'] = $row['user_id'];
            $_SESSION['fname'] = $row['f_name'];
            $_SESSION['lname'] = $row['l_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];

            header("location: index.php");
            exit();
        }
    }

?>