<?php
    include('./database_reservation/database-connect.php');

    $email = $_SESSION['email'];


    $sql = "SELECT * FROM reservation WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>
                <th>Location</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>";
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['location'] . "</td>";
            echo "<td>" . $row['start_date'] . "</td>";
            echo "<td>" . $row['end_date'] . "</td>";
            echo "<td><a href='database_reservation/database-delete.php?reservation_id=" . $row['reserve_id'] . "' onclick='return confirm(\"Are you sure you want to delete this reservation?\")'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "No Reservations";
    }


    mysqli_close($conn);
?>