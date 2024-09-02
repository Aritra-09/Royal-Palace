<?php
$servername = "localhost";
$username = "root";
$dbPassword = "";
$dbName = "visitors";

// Create connection
$conn = mysqli_connect($servername, $username, $dbPassword, $dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Escape user input to prevent SQL Injection
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$guests = mysqli_real_escape_string($conn, $_POST['guests']);
$checkin = mysqli_real_escape_string($conn, $_POST['checkin']);
$checkout = mysqli_real_escape_string($conn, $_POST['checkout']);
$idUpload = mysqli_real_escape_string($conn, $_POST['idUpload']);
$roomType = mysqli_real_escape_string($conn, $_POST['roomType']);

// Create insert SQL statement
$sql = "INSERT INTO booking_details (visitor, email, total_guests, checkin, checkout, room, identification)
VALUES ('$name', '$email','$guests','$checkin','$checkout','$roomType', '$idUpload')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
