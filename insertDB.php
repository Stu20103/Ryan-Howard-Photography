
<?php
$servername = "localhost";
$username = "cs300";
$password = "admin";
$dbname = "Ryan Howard";


$fullName = $_POST["fullName"];
$email = $_POST["email"];
$contactMessage = $_POST["contactMessage"];
$contactMessage = str_replace("","",$contactMessage);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO info (fullName, email, contactMessage)
VALUES ('$fullName', '$email', '$contactMessage')";

if (mysqli_query($conn, $sql)) {
  echo "NOT ON FIRE YET";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
    