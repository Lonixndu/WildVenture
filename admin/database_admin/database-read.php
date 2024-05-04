<?php
    session_start();
    include('./database-connect.php');

    $email = $_POST['admin-email'];

    $pass = $_POST['admin-pass'];

    $sql = "SELECT * FROM admin WHERE admin_email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        $hash = $row['admin_pass'];
        $verify = password_verify($pass, $hash);

        if($row['admin_email'] === $email && $verify == true){
            $_SESSION['aid'] = $row['admin_id'];
            $_SESSION['a_email'] = $row['admin_email'];

            header("location: ../admin-destinations.php");
            exit();
        }
        else{
            echo "Admin Login Failed!";
        }
        
    }
    else{
        echo "Admin Login Failed!";
    }


    mysqli_close($conn);
?>