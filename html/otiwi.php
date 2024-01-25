<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $label = $_POST['label'];
    $alamat = $_POST['alamat'];
    $catatan = $_POST['catatan'];
    $action = $_POST['action'];

    // Koneksi ke database (sesuaikan dengan konfigurasi Anda)
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_basah";
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Proses berdasarkan aksi yang dipilih
    if ($action == "simpan") {
        // Lakukan operasi penyimpanan alamat baru
        $sql = "INSERT INTO edit_alamat (label, alamat_lengkap, catatan) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $label, $alamat, $catatan);
        $stmt->execute();
        $stmt->close();

    } elseif ($action == "update") {
        // Lakukan operasi pembaruan alamat yang sudah ada
        $selectedAlamat = $_POST['selectedAlamat'];
        $sql = "UPDATE edit_alamat SET label=?, alamat_lengkap=?, catatan=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $label, $alamat, $catatan, $selectedAlamat);
        $stmt->execute();
        $stmt->close();
    }

    // Tampilkan pesan sukses atau alihkan pengguna ke halaman lain
    echo "Alamat berhasil disimpan atau diupdate!";
    
    // Menutup koneksi
    $conn->close();
} else {
    // Jika halaman ini diakses langsung tanpa melalui formulir, alihkan ke halaman lain atau tampilkan pesan error
    header("Location: alamatEdit.php"); // Ganti "alamatEdit.php" dengan halaman yang diinginkan
    exit();
}
?>
