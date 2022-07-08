<?php
$servername = "localhost";
$username = "cs300";
$password = "admin";
$dbname = "Ryan Howard";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO info (fullName, email, contactMessage)
VALUES ('$fullName', '$email', '$contactMessage')";

if (mysqli_query($conn, $sql)) {
  echo "Message sent";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}   

mysqli_close($conn);
?>
