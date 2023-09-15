<?php
// Database configuration
$host = 'localhost';
$username = 'SUPERCOMPUTER';
$password = 'sql123';
$database = 'override';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Insert data into the database (replace this with proper validation and hashing)
$sql = "INSERT INTO logins (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Login data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
