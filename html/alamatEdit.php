<?php
// alamatEdit.php

session_start();

// Include the database connection file
include 'database2.php';

// Assuming you have a user_id associated with the address
$user_id = isset($_SESSION['ID_user']) ? $_SESSION['ID_user'] : null;

// Retrieve existing user address data from the database
$sql = "SELECT label_alamat, alamat_lengkap, catatan FROM user WHERE ID_user = :ID_user";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ID_user', $user_id, PDO::PARAM_INT);
$stmt->execute();
$addressData = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $labelAlamat = $_POST['label_alamat'];
    $alamatLengkap = $_POST['alamat_lengkap'];
    $catatan = $_POST['catatan'];

    // Update user address data in the database
    $updateSql = "UPDATE user SET label_alamat = :label_alamat, alamat_lengkap = :alamat_lengkap, catatan = :catatan WHERE ID_user = :ID_user";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bindParam(':label_alamat', $labelAlamat, PDO::PARAM_STR);
    $updateStmt->bindParam(':alamat_lengkap', $alamatLengkap, PDO::PARAM_STR);
    $updateStmt->bindParam(':catatan', $catatan, PDO::PARAM_STR);
    $updateStmt->bindParam(':ID_user', $user_id, PDO::PARAM_INT);
    $updateStmt->execute();

    // Redirect to homepage or other relevant page after saving the address
    header('Location: alamat.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alamat Edit</title>
    <link rel="stylesheet" href="../css/alamatEdit.css" />
    <link rel="stylesheet" href="../css/navbar&top.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
  </head>
  <body>
    <!-- TOP -->
    <div class="container-fluid d-flex" id="top">
      <p class="my-auto" id="text1">
        Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec.Purwokerto
        Sel., Kabupaten Banyumas, Jawa Tengah 5314
      </p>
      <div class="ms-auto" style="width: auto;">
        <a style="color: #fff; text-decoration: none;" href="#" class="m-1">
          <i class="far fa-envelope m-2"></i>
          <span>Basah@gmail.com</span>
        </a>

        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          style="padding: 6px;"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          style="padding: 6px;"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a
          class="btn btn-link btn-floating text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          style="padding: 6px;"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          style="padding: 6px;"
          ><i class="fab fa-instagram"></i
        ></a>
      </div>
    </div>

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #e8f5e9">
      <div class="container-fluid">
      <a href="homepage2.php">
          <img
            class="navbar-brand"
            src="../assets/Screenshot_2023-10-21_121056-removebg-preview 2.svg"
            alt="logo basah"
            style="width: 100px"
          />
        </a>
        
        <div class="d-flex reverse">
          <div class="dropdown-center">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="font-size: xx-large;">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="../html/profile.php">Profil</a></li>
              <li><a class="dropdown-item" href="../html/alamat.php">Alamat</a></li>
              <li><a class="dropdown-item" href="../php/transaksi.php">Transaksi</a></li>
              <li><a class="dropdown-item" href="../html/homepage.php">Log out</a></li>
            </ul>
          </div>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/news.php">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/education.php"
                  >Edukasi</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../html/services/pesanan.php"
                  >Services</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Bantuan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                  >Kontak</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="dropdown">
          <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
          </a>

          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="../php/news.php">Berita</a></li>
            <li><a class="dropdown-item" href="../php/education.php">Edukasi</a></li>
            <li><a class="dropdown-item" href="../html/services/pesanan.php">Services</a></li>
            <li><a class="dropdown-item" href="#footer">Bantuan</a></li>
            <li><a class="dropdown-item" href="#footer">Kontak</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Form -->
    <h1>Alamat</h1>

    <section class="intro">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="card card-body p-4 p-md-5">
                    <form class="formulir" action="alamatEdit.php" method="post">
                        <div class="form-outline">
                            <input type="text" name="label_alamat" class="form-control" placeholder="Label Alamat" />
                            <textarea name="alamat_lengkap" class="form-control" rows="3" placeholder="Alamat Lengkap"></textarea>
                            <input type="text" name="catatan" class="form-control" placeholder="Catatan" />
                        </div>
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button class="btn" type="submit">Simpan Alamat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Form -->

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <!-- <script src="alamat.js"></script> -->
  </body>
</html>
