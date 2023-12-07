<?php
// Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a table if it doesn't exist
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
)";
$conn->query($sqlCreateTable);

// Insert data into the table
$username = "john_doe";
$email = "john@example.com";
$sqlInsert = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
$conn->query($sqlInsert);

// Retrieve data from the table
$sqlSelect = "SELECT * FROM users";
$result = $conn->query($sqlSelect);

if ($result->num_rows > 0) {
    // Output data for each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Username: " . $row["username"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "No records found";
}

// Update data in the table
$newUsername = "john_doe_updated";
$sqlUpdate = "UPDATE users SET username='$newUsername' WHERE id=1";
$conn->query($sqlUpdate);

// Delete data from the table
$sqlDelete = "DELETE FROM users WHERE id=2";
$conn->query($sqlDelete);

// Close the connection
$conn->close();
?>
