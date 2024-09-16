<?php
// Database connection file (db.php)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
$port = 3307;  // Adjust this to your XAMPP port

try {
    // Initialize the PDO object
    $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    // Handle connection failure
    die("Connection failed: " . $e->getMessage());
}
?>
