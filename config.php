<?php

// Database credentials for the first connection
$host = "localhost";
$dbname = "projekt";
$username = "root";
$password = "";

// Connection using PDO for the first connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Database credentials for the second connection
$host2 = "localhost";
$dbname2 = "projekt2";
$username2 = "root";
$password2 = "";

// Connection using PDO for the second connection
try {
    $conn2 = new PDO("mysql:host=$host2;dbname=$dbname2", $username2, $password2);
    $conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Start a session if one is not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Other configuration settings and functions...
?>
