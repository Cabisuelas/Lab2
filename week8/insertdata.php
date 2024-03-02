<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

include 'form.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Users (name, email, gender, comment, website)
VALUES ('$name', '$email', '$gender', '$comment', '$website')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: form.php");

$conn->close();