<?php

session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['id_agen'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: loginadmin.php");
    exit();
}

include '../html/database.php';

// Perform a query to retrieve user data
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <link rel="stylesheet" href="../css/profile_user.css">
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
            <p class="logo mt-2" style="font-family: 'Rubik', sans-serif; font-size: 30px; font-weight: 600;">AGENT</p>

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
                        <a class="nav-link active" aria-current="page" href="logoutagen.php">Log Out</a>
                    </li>
                </ul>
            </div>
    </nav>
    <!-- END NAVBAR -->

    <div class="table-responsive m-5">
        <p class="text-start" style="font-family: 'Jost', sans-serif; font-weight: 600; font-size: 25px;">
            INFORMASI PENGGUNA</p>
            <table class="table">
        <thead>
            <tr>
                <th><h6>Id</h6></th>
                <th><h6>Nama</h6></th>
                <th><h6>Email</h6></th>
                <th><h6>Tanggal Lahir</h6></th>
                <th><h6>Jenis Kelamin</h6></th>
                <th><h6>No Ponsel</h6></th>
                <th><h6>No Rekening</h6></th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the rows and display user data
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['ID_user']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['tanggal_lahir']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><?php echo $row['no_ponsel']; ?></td>
                    <td><?php echo $row['no_rekening']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
} else {
    // No user data found
    echo "No user data found.";
}

// Close the database connection
mysqli_close($conn);
?>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"></script>
        <script src="/js/sign-in.js"></script>
</body>

</html>