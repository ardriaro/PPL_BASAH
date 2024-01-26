<?php
$servername = "localhost";
$username = "kelasmm2_basah";
$password = "Basah2024";
$database = "kelasmm2_basah";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
