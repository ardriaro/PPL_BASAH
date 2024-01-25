<?php

session_start();
if (!isset($_SESSION['id_agen'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: loginadmin.php");
    exit();
}

    require "../koneksi/koneksi.php";

    $queryTransaksi = mysqli_query($con, "SELECT * FROM transaksi");
    $NoData = mysqli_num_rows($queryTransaksi);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <link rel="stylesheet" href="../css/profile_user.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/agent.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #e8f5e9">
        <div class="container-fluid justify-content-start">
            <p class="mt-2" style="font-family: 'Rubik', sans-serif; font-size: 30px; font-weight: 600;">AGENT</p>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="transaksimanagement.php">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profile_user.php">Profile User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="loginadmin.php">Log Out</a>
                    </li>
                </ul>
            </div>
    </nav>

    <div class="table-responsive m-5">
        <p class="text-start" style="font-family: 'Jost', sans-serif; font-weight: 600; font-size: 25px;">
            TRANSAKSI MANAGEMENT</p>
            <table class="table">
            <thead>
                <tr>
                    <th><h5>ID Transaksi</h5></th>
                    <th><h5>ID User</h5></th>
                    <th><h5>Nama</h5></th>
                    <th><h5>Jenis Sampah</h5></th>
                    <th><h5>Label Alamat</h5></th>
                    <th><h5>Alamat Lengkap</h5></th>
                    <th><h5>Catatan</h5></th>
                    <th><h5>Tanggal dan Waktu</h5></th>
                    <th><h5>Berat (kg)</h5></th>
                    <th>Uang Yang Diterima</th>
                    <th><h5>Status</h5></th>
                    <th><h5>Action</h5></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_array($queryTransaksi)) {
                    ?>
                    <tr>
                        <td><?php echo $data['ID_transaksi'] ?></td>
                        <td><?php echo $data['ID_user'] ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['jenis_sampah']; ?></td>
                        <td><?php echo $data['label_alamat']; ?></td>
                        <td><?php echo $data['alamat_lengkap']; ?></td>
                        <td><?php echo $data['catatan']; ?></td>
                        <td><?php echo $data['tanggal_dan_waktu']; ?></td>
                        
                        <td>
                            <form method="post" action="../php/update_status.php">
                                <input type="hidden" name="transaksi_id" value="<?php echo $data['ID_transaksi']; ?>">
                                <input type="text" name="new_berat" value="<?php echo $data['berat']; ?>" class="form-control">
                                <button type="submit" class="btn btn-primary btn-sm">Update Berat</button>
                            </form>
                        </td>
                        <td><?php echo $data['uang_diterima']; ?></td>
                        <td><?php echo $data['status']; ?></td>
                        <td>
                            <form method="post" action="../php/update_status.php">
                                <input type="hidden" name="transaksi_id" value="<?php echo $data['ID_transaksi']; ?>">
                                <select name="new_status" class="form-select">
                                    <option value="proses" <?php echo ($data['status'] == 'proses') ? 'selected' : ''; ?>>Proses</option>
                                    <option value="selesai" <?php echo ($data['status'] == 'selesai') ? 'selected' : ''; ?>>Selesai</option>
                                </select>
                                <button type="submit" class="btn btn-primary btn-sm">Update Status</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
        <script src="/js/sign-in.js"></script>
</body>

</html>