<?php
    include('./database/database-connect.php');

    if(isset($_POST['create'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        
        $pass = $_POST['password'];
        $pass_encry = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO registered_user(F_Name, L_Name, Country, Email, Password)
                VALUES('$fname', '$lname', 'Sri Lanka', '$email', '$pass_encry')";

        try{
            mysqli_query($conn, $sql);
            header("Location: ../login-page.php");
        }
        catch(mysqli_sql_exception){
            echo "That email is already taken!";
        }
    }

    

    mysqli_close($conn);
?>