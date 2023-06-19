<?php

include("config.php");

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}




// Prepare an SQL statement to insert a new user
$stmt = $connection->prepare("INSERT INTO users (:name, password) VALUES (:name, :password)");

// Bind values to the named parameters
$stmt->bindParam(':name', $name);
$stmt->bindParam(':password', $password);

// Set values for username and password
$username = 'john_doe';
$password = 'secretpassword';

// Execute the statement
$stmt->execute();

// Check if the insertion was successful
if ($stmt->rowCount() > 0) {
    echo 'User inserted successfully.';
} else {
    echo 'Failed to insert user.';
}
?>