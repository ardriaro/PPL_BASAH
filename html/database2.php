<?php
// database2.php

$host = "localhost"; // Replace with your database host
$dbname = "kelasmm2_basah"; // Replace with your database name
$username = "kelasmm2_basah"; // Replace with your database username
$password = "Basah2024"; // Replace with your database password

try {
    // Create a PDO connection
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Display an error message if the connection fails
    die("Connection failed: " . $e->getMessage());
}
?>
