<?php

include("config.php");

$servername = "localhost";
$username = "root";
$password = "";
$db = "iwt";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user_signin (User_Id, username, email, passwordd)
VALUES ('', 'Doe', 'john@example.com','asdasd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>