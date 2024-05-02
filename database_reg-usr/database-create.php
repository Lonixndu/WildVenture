<?php
    include('./database-connect.php');

    if(isset($_POST['create'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $country = $_POST['country'];

        $pass1 = $_POST['password'];
        $pass2 = $_POST['password-2'];
        if($pass1 != $pass2)
        {
            die();
            echo "Error creating your profile.";
        }
        
        $pass = $_POST['password'];
        $pass_encry = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO registered_user(F_Name, L_Name, Country, Email, Password)
                VALUES('$fname', '$lname', '$country', '$email', '$pass_encry')";

        try{
            mysqli_query($conn, $sql);
            header("Location: ../login-page.php");
        }
        catch(mysqli_sql_exception){
            echo "That email is already taken!";
        }
    }
    else{
        echo "We couldn't create your account, Please try again...";
    }

    

    mysqli_close($conn);
?>