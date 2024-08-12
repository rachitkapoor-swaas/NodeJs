<?php
// db_connect.php

$servername = "localhost";  // Replace with your database server address (usually localhost)
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "test_db";         // Replace with your database name
$port = 3390;                // Specify the port number if it's not the default 3306

try {
    // Create a new PDO instance with the correct DSN
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully"; 
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
