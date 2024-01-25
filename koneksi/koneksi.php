<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "basah";

// Create connection
$con = new mysqli($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
