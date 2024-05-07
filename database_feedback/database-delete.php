<?php
// Connect to the database
require('./database-connect.php');

// Get reservation ID from query string
$reservation_id = $_GET['f_id'];

// Check if reservation ID is provided
if (isset($reservation_id)) {
  // Prepare delete query (prevents SQL injection)
  $sql = "DELETE FROM feedback WHERE feedback_id = ?";
  $stmt = mysqli_prepare($conn, $sql);

  // Bind parameter to the statement
  mysqli_stmt_bind_param($stmt, "i", $reservation_id);

  // Execute the statement
  if (mysqli_stmt_execute($stmt)) {
    echo "Feedback deleted successfully!";
    header('Location: ../community.php');
  } else {
    echo "Error deleting feedback: " . mysqli_error($conn);
  }
  
  // Close the prepared statement
  mysqli_stmt_close($stmt);
} else {
  echo "Invalid feedback ID";
}

// Close the database connection
mysqli_close($conn);

header('Location: ../community.php');

?>
