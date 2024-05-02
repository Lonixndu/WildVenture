<?php
    session_start();
    include('./database-connect.php');

    if(isset($_GET['delete']))
    {
        $userEmail = $_SESSION['email'];

        $sql = "DELETE FROM registered_user WHERE email= ?";

        $stmt = mysqli_prepare($conn, $sql);

        if (!$stmt) {
            die("Error preparing statement: " . mysqli_error($conn));
          }
          
        mysqli_stmt_bind_param($stmt, "s", $userEmail);


        /*$sql = "SELECT * FROM registered_user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);

            if($_SESSION['email'] === $row['email'])
            {
                
            }
        }*/

        if (mysqli_stmt_execute($stmt)) {
            if (mysqli_stmt_affected_rows($stmt) > 0) {
              echo "Record deleted successfully!";
              header("Location: ../login-page.php");
            } else {
              echo "No record found with email: " . $userEmail;
            }
          } else {
            echo "Error deleting record: " . mysqli_stmt_error($stmt);
          }
          
          mysqli_stmt_close($stmt);
          

    }

    mysqli_close($conn);
    session_unset();
    session_destroy();
?>