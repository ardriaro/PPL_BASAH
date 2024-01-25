<?php
// database.php

$servername = "localhost";  // Sesuaikan dengan host database Anda
$username = "root";         // Sesuaikan dengan username database Anda
$password = "";             // Sesuaikan dengan password database Anda
$dbname = "basah";  // Sesuaikan dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);


// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
