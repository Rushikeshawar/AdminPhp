<?php
$servername = "localhost";  // Use '127.0.0.1' if 'localhost' fails
$username = "root";         // Default XAMPP username
$password = "";             // Default XAMPP password is empty
$dbname = "eecommerce";     // Make sure this matches your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


