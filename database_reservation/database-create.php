<?php
    session_start();
    $email = $_SESSION['email'];

    include('./database-connect.php');

    if(isset($_POST['reserve'])){

        $location = $_POST['location'];

        $startDate = $_POST['start-date'];
        $endDate = $_POST['end-date'];

        $rooms = $_POST['people'];


        $sql = "INSERT INTO reservation(email, location, start_date, end_date, rooms)
                VALUES('$email', '$location', '$startDate', '$endDate', '$rooms')";

        try{
            mysqli_query($conn, $sql);
            header("Location: ../payment-page.php");
        }
        catch(mysqli_sql_exception){
            echo "Reservation from same date already exists.";
        }
    }
    else{
        echo "We couldn't place your reservation, Please try again later...";
    }

    

    mysqli_close($conn);
?>