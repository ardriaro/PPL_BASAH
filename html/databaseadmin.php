<?php
// database.php

$servername = "localhost";  // Sesuaikan dengan host database Anda
$username = "kelasmm2_basah";         // Sesuaikan dengan username database Anda
$password = "Basah2024";             // Sesuaikan dengan password database Anda
$dbname = "kelasmm2_basah";  // Sesuaikan dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);


// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
