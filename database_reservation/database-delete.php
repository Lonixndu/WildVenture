<?php
// Connect to the database
require('./database-connect.php');  // Replace with your database connection file

// Get reservation ID from query string
$reservation_id = $_GET['reservation_id'];

// Check if reservation ID is provided
if (isset($reservation_id)) {
  // Prepare delete query (prevents SQL injection)
  $sql = "DELETE FROM reservation WHERE reserve_id = ?";
  $stmt = mysqli_prepare($conn, $sql);

  // Bind parameter to the statement
  mysqli_stmt_bind_param($stmt, "i", $reservation_id);

  // Execute the statement
  if (mysqli_stmt_execute($stmt)) {
    echo "Reservation deleted successfully!";
    header('Location: ../reservations.php');
  } else {
    echo "Error deleting reservation: " . mysqli_error($conn);
  }
  
  // Close the prepared statement
  mysqli_stmt_close($stmt);
} else {
  echo "Invalid reservation ID";
}

// Close the database connection
mysqli_close($conn);

header('Location: ../reservations.php');

?>
