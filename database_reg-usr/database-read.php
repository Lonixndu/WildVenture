<?php
    session_start();
    include('./database-connect.php');

    $email = $_POST['email'];

    $pass = $_POST['password'];

    $sql = "SELECT * FROM registered_user WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        $hash = $row['password'];
        $verify = password_verify($pass, $hash);

        if($row['email'] === $email && $verify == true){
            $_SESSION['uid'] = $row['user_id'];
            $_SESSION['fname'] = $row['f_name'];
            $_SESSION['lname'] = $row['l_name'];
            $_SESSION['email'] = $row['email'];

            header("location: ../index.php");
            exit();
        }
        
    }
    else{
        echo "Login Failed! Please Check username/password, or Create an account.";
    }


    mysqli_close($conn);
?>