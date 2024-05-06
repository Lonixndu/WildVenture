<?php
    session_start();

    if(isset($_SESSION['email']))
    {
        $email = $_SESSION['email']; 
    }
    else{
        header("Location: ../login-page.php");
    }
    

    include('./database-connect.php');

    if(isset($_POST['submit'])){
        $rate = $_POST['rating'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO feedback(email, rating, comment)
                VALUES('$email', '$rate', '$comment')";

        try{
            mysqli_query($conn, $sql);
            header("Location: ../community.php");
        }
        catch(mysqli_sql_exception){
            echo "Error Submitting your feedback";
        }
    }
    

    

    mysqli_close($conn);
?>