<?php
// backend/index.php
$servername = "mysql";
$username = "root";
$password = "password";
$dbname = "customer_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT message FROM greetings LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the first row
    $row = $result->fetch_assoc();
    echo $row["message"];
} else {
    echo "No greetings found.";
}

$conn->close();
?>
