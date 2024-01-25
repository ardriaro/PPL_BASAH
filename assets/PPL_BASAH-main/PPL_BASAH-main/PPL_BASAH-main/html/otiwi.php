<?php
$koneksi = mysqli_connect("localhost", "root", "", "ppl");

$label = $_POST['label'];
$alamatlengkap = $_POST['alamat'];
$catatan = $_POST['catatan'];

$query = "INSERT INTO newalamat (label, alamat, catatan) VALUES ('$label', '$alamatlengkap', '$catatan')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
