<?php
// update_berat_status.php
session_start();


require "../koneksi/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $transaksi_id = $_POST['transaksi_id'];
    $new_berat = $_POST['new_berat'];
    $new_status = $_POST['new_status'];

    // Function to get the harga per kg based on jenis sampah
    function getHargaPerKg($jenisSampah)
    {
        switch ($jenisSampah) {
            case 'plastik':
                return 3000;
            case 'kertas':
                return 2000;
            case 'kaca':
                return 4000;
            case 'besi':
                return 5000;
            case 'sampah organik':
                return 2500;
            case 'elektronik':
                return 10000;
            default:
                return 0; // Default value, you may adjust as needed
        }
    }

    // Get the jenis_sampah, berat, and uang_diterima for the given transaction
    $queryGetData = "SELECT Jenis_sampah, berat FROM transaksi WHERE ID_transaksi = '$transaksi_id'";
    $resultGetData = mysqli_query($con, $queryGetData);

    if ($resultGetData) {
        $data = mysqli_fetch_assoc($resultGetData);
        $jenisSampah = $data['Jenis_sampah'];

        // Get the harga per kg for the jenis_sampah
        $hargaPerKg = getHargaPerKg($jenisSampah);

        // Check if 'new_berat' is provided, and update 'Berat' and 'uang_diterima' accordingly
        if (!empty($new_berat)) {
            // Calculate the new uang_diterima based on the updated berat: uang_diterima = berat * hargaPerKg
            $new_uang_diterima = $new_berat * $hargaPerKg;

            // Update 'Berat' and 'uang_diterima' in the database
            $updateBeratQuery = "UPDATE transaksi SET berat = '$new_berat', uang_diterima = '$new_uang_diterima' WHERE ID_transaksi = '$transaksi_id'";
            mysqli_query($con, $updateBeratQuery);
        }

        // Update only the 'Status' in the database
        $updateStatusQuery = "UPDATE transaksi SET Status = '$new_status' WHERE ID_transaksi = '$transaksi_id'";

        if (mysqli_query($con, $updateStatusQuery)) {
            echo "Status updated successfully.";
        } else {
            echo "Error updating status: " . mysqli_error($con);
        }

        // Redirect back to the page displaying transactions
        header("Location: ../html/transaksimanagement.php");
        exit();
    } else {
        echo "Error fetching data: " . mysqli_error($con);
    }
}
?>
