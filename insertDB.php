
<?php
$servername = "localhost";
$username = "cs300";
$password = "admin";
$dbname = "Ryan Howard";


$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$message = str_replace("","",$message);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO info (name, email, message)
VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "Message sent";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
    