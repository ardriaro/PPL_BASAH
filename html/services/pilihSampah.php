<?php
// form_penukaran.php

session_start();

// Include the database connection file
include '../database2.php';

if(isset($_SESSION['ID_user'])) {
  $ID_user = $_SESSION['ID_user'];
} else {
  // Redirect atau tindakan lain jika ID_user tidak tersedia di sesi
  header("Location: sign-in.php");
  exit();
}

// Assuming you have a user ID associated with the session
$ID_user = isset($_SESSION['ID_user']) ? $_SESSION['ID_user'] : null;

// Retrieve existing user address data from the database
$sql = "SELECT ID_user, name, label_alamat, alamat_lengkap, catatan FROM user WHERE ID_user = :ID_user";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ID_user', $ID_user, PDO::PARAM_INT);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $ID_user = $_POST['ID_user'];
    $name = $_POST['name'];
    $jenis_sampah = $_POST['jenis_sampah'];
    $label_alamat = $userData['label_alamat'];  // Use data from user_addresses table
    $alamat_lengkap = $userData['alamat_lengkap'];  // Use data from user_addresses table
    $catatan = $userData['catatan'];  // Use data from user_addresses table
    $tanggal_dan_waktu = $_POST['tanggal_dan_waktu'];
    $status = $_POST['status'];

    // Insert data into the transaksi table
    $insertSql = "INSERT INTO transaksi (ID_user, name, jenis_sampah, label_alamat, alamat_lengkap, catatan, tanggal_dan_waktu, status) VALUES (:ID_user, :name, :jenis_sampah, :label_alamat, :alamat_lengkap, :catatan, :tanggal_dan_waktu, :status)";
    $insertStmt = $conn->prepare($insertSql);
    $insertStmt->bindParam(':ID_user', $ID_user, PDO::PARAM_INT);
    $insertStmt->bindParam(':name', $name, PDO::PARAM_STR);
    $insertStmt->bindParam(':jenis_sampah', $jenis_sampah, PDO::PARAM_STR);
    $insertStmt->bindParam(':label_alamat', $label_alamat, PDO::PARAM_STR);
    $insertStmt->bindParam(':alamat_lengkap', $alamat_lengkap, PDO::PARAM_STR);
    $insertStmt->bindParam(':catatan', $catatan, PDO::PARAM_STR);
    $insertStmt->bindParam(':tanggal_dan_waktu', $tanggal_dan_waktu, PDO::PARAM_STR);
    $insertStmt->bindParam(':status', $status, PDO::PARAM_STR);
    $insertStmt->execute();

    // Redirect or perform any other actions after form submission
    // header('Location: success.php'); // Uncomment and replace with your desired destination
    header('Location: agenBerangkat.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <link rel="stylesheet" href="../../css/services/pilihSampah.css" />
    <link rel="stylesheet" href="../../css/navbar&top.css">
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
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #e8f5e9">
      <div class="container-fluid justify-content-start">
      <a href="homepage2.php">
          <img
            class="navbar-brand"
            src="../../assets/Screenshot_2023-10-21_121056-removebg-preview 2.svg"
            alt="logo basah"
            style="width: 100px"
          />
        </a>
        
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../php/news.php">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../php/education.php"
                  >Edukasi</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../../html/services/pesanan.php"
                  >Services</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#footer">Bantuan</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page"  href="https://wa.me/+6281232919830" target="_blank"
                  >Kontak</a
                >
              </li>
        </ul>
      </div>

        <div class="dropdown-center">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16" style="font-size: xx-large;">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="../../html/profile.php">Profil</a></li>
            <li><a class="dropdown-item" href="../../php/transaksi.php">Transaksi</a></li>
            <li><a class="dropdown-item" href="../../html/services/pesanan.php">Services</a></li>
            <li><a class="dropdown-item" href="../../alamat.php">Alamat</a></li>
            <li><a class="dropdown-item" href="../../html/logout.php">Log Out</a></li>
        </ul>
      </div>
      </div>

    </nav>
    <!-- End Navbar -->

    <div class="container-fluid text-center section">
      <div class="row justify-content-md-center">
          <div class="col-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-1-circle-fill" viewBox="0 0 16 16" style="color: #23AA49;">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.283 4.002H7.971L6.072 5.385v1.271l1.834-1.318h.065V12h1.312z"/>
            </svg>
              <p>Pilih Sampah</p>
          </div>
          <div class="col-2">
            <a href="konfirmasiAlamat.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-2-circle" viewBox="0 0 16 16">
                <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z"/>
              </svg>
            </a>
            <p>Konfirmasi Alamat</p>
          </div>
          <div class="col-2">
            <a href="agenBerangkat.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-3-circle" viewBox="0 0 16 16">
                    <path d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318Z"/>
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8"/>
              </svg>
            </a>  
            <p>Agen Berangkat</p>
          </div>
          <div class="col-2">
            <a href="agenTelahTiba.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-4-circle" viewBox="0 0 16 16">
                  <path d="M7.519 5.057c.22-.352.439-.703.657-1.055h1.933v5.332h1.008v1.107H10.11V12H8.85v-1.559H4.978V9.322c.77-1.427 1.656-2.847 2.542-4.265ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z"/>
                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8"/>
              </svg>
            </a>
            <p>Agen Tiba</p>
          </div>
          <div class="col-2">
            <a href="">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-5-circle" viewBox="0 0 16 16">
                  <path d="M1 8a7 7 0 1 1 14 0A7 7 0 0 1 1 8m15 0A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-8.006 4.158c-1.57 0-2.654-.902-2.719-2.115h1.237c.14.72.832 1.031 1.529 1.031.791 0 1.57-.597 1.57-1.681 0-.967-.732-1.57-1.582-1.57-.767 0-1.242.45-1.435.808H5.445L5.791 4h4.705v1.103H6.875l-.193 2.343h.064c.17-.258.715-.68 1.611-.68 1.383 0 2.561.944 2.561 2.585 0 1.687-1.184 2.806-2.924 2.806Z"/>
              </svg>
            </a>
            <p>Selesai</p>
          </div>
      </div>
    </div>

   
    <div class="container" style="margin-top: 150px;">
        <form method="post" action="" >
        <input type="hidden" name="ID_user" value="<?php echo isset($userData['ID_user']) ? $userData['ID_user'] : ''; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="name" placeholder="Nama" value="<?php echo $userData['name']; ?>"/>
            </div>
            <div class="mb-3">
                <label for="jenis_sampah" class="form-label">Jenis sampah</label>
                <select class="form-select" id="jenis_sampah" name="jenis_sampah" required="">
                    <option value="plastik">Plastik</option>
                    <option value="kertas">Kertas</option>
                    <option value="sampah organik">Sampah Organik</option>
                    <option value="sampah organik">Elektronik</option>
                    <option value="sampah organik">Baca</option>
                    <option value="sampah organik">Besi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Label alamat</label>
                <input type="text" class="form-control" id="alamat" name="label_alamat" value="<?php echo $userData['label_alamat']; ?>"/>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <input type="text" class="form-control" id="alamat" name="alamat_lengkap" value="<?php echo $userData['alamat_lengkap']; ?>"/>
            </div>
            <div class="mb-3">
                <label for="catatan" class="form-label">Catatan</label>
                <input type="text" class="form-control" id="catatan" name="catatan" maxlength="100" value="<?php echo $userData['catatan']; ?>"/>
            </div>
            <div class="mb-3">
                <label for="tanggal_dan_waktu" class="form-label">Tanggal dan waktu</label>
                <input type="datetime-local" class="form-control" id="tanggal_dan_waktu" name="tanggal_dan_waktu" required="">
            </div>
             <!-- <div class="mb-3">
                <label for="berat" class="form-label">Berat (Kg)</label>
                <input type="number" step="0.01" class="form-control" id="berat" name="berat" required="">
            </div> -->
            <!-- <div class="mb-3">
                <label for="uang_yang_diterima" class="form-label">Uang yang diterima (Rp)</label>
                <input type="number" step="100" class="form-control" id="uang_diterima" name="uang_diterima" required="">
            </div>  -->
            <input type="hidden" name="status" value="proses">
            <button type="submit" class="btn btn-success btn-lg">Submit</button>
        </form>
    </div>



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
