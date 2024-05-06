<?php
    
    include('./database_feedback/database-connect.php');

    $email = $_SESSION['email'];
    


    $sql = "SELECT * FROM feedback WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>
                <th>Feedback ID</th>
                <th>Rating</th>
                <th></th>
            </tr>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['feedback_id'] . "</td>";
            echo "<td>" . $row['rating'] . "</td>";
            echo "<td><a href='database_feedback/database-delete.php?f_id=" . $row['feedback_id'] . "' onclick='return confirm(\"Are you sure you want to delete this reservation?\")'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "No Feedbacks";
    }


    mysqli_close($conn);
?>