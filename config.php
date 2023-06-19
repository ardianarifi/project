<?php
// Database configuration
$host = 'localhost';
$dbName = 'project';
$username = 'root';
$password = '';



// Create a new PDO instance
try {
    $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}

?>