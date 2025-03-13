<?php
$host = '127.0.0.1';  // Database host
$dbname = 'user_auth'; // Database name
$username = 'root';    // MySQL username (default in XAMPP)
$password = '';        // MySQL password (default is empty in XAMPP)

try {
    // Create a PDO instance to connect to the MySQL database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exceptions for errors
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
