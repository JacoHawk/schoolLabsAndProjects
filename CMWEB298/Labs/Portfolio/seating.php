<?php
$mysqli = new mysqli("localhost", "jh719d_jh719d_298", "ICC.Cougars@2023", "weddingGuests");

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

// Get input from form
$lastName = $_POST["last_name"];

// Prepare SQL statement to query the database
$stmt = $mysqli->prepare("SELECT ID FROM GuestSeating WHERE LastName = ?");
$stmt->bind_param("s", $lastName);
$stmt->execute();
$stmt->bind_result($tableNumber);
$stmt->fetch();
$stmt->close();

// Close MySQL connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Wedding Guest Seating</title>
</head>
<body>
  <h1>Wedding Guest Seating</h1>
  <?php
  if (isset($tableNumber)) {
    // Display table number
    echo "<p>Your table number is: " . htmlentities($tableNumber) . "</p>";
  } else {
    // Display error message
    echo "<p>No results found.</p>";
  }
  ?>
</body>
</html>
