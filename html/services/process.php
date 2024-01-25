<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil nilai dari formulir
    $nama = $_POST['nama'];
    $jenis_sampah = $_POST['jenis_sampah'];
    $alamat = $_POST['alamat'];
    $catatan = $_POST['catatan'];
    $tanggal_dan_waktu = $_POST['tanggal_dan_waktu'];
    $status = $_POST['status'];

    // Koneksi ke database (sesuaikan dengan konfigurasi Anda)
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_basah";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Lakukan operasi penyimpanan data ke dalam database
    $sql = "INSERT INTO transaksi (nama, jenis_sampah, alamat, catatan, tanggal_dan_waktu, status) 
            VALUES ('$nama', '$jenis_sampah', '$alamat', '$catatan', '$tanggal_dan_waktu', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
        
        // Jika penyimpanan data berhasil, arahkan ke agenBerangkat.php
        header("Location: agenBerangkat.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
} else {
    // Jika halaman ini diakses langsung tanpa melalui formulir, alihkan ke halaman lain atau tampilkan pesan error
    header("Location: agenBerangkat.php"); // Ganti "agenBerangkat.php" dengan halaman yang diinginkan
    exit();
}

?>
