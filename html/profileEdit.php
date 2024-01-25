<?php
// profileEdit.php
session_start();
// Include the database connection file
include 'database2.php';

// Assuming you have a ID_user associated with the user profile
$ID_user = isset($_SESSION['ID_user']) ? $_SESSION['ID_user'] : null;

// Retrieve existing user information from the database
$sql = "SELECT name, email, tanggal_lahir, jenis_kelamin, no_ponsel, no_rekening FROM user WHERE ID_user = :ID_user";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ID_user', $ID_user, PDO::PARAM_INT);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $tanggalLahir = $_POST['tanggalLahir'];
    $jenisKelamin = isset($_POST['jenisKelamin']) ? $_POST['jenisKelamin'] : null;
    $noPonsel = $_POST['noPonsel'];
    $noRekening = $_POST['noRekening'];

    // Update user information in the database
    $updateSql = "UPDATE user SET name = :name, email = :email, tanggal_lahir = :tanggalLahir, jenis_kelamin = :jenisKelamin, no_ponsel = :noPonsel, no_rekening = :noRekening WHERE ID_user = :ID_user";
    $updateStmt = $conn->prepare($updateSql);
    $updateStmt->bindParam(':name', $nama, PDO::PARAM_STR);
    $updateStmt->bindParam(':email', $email, PDO::PARAM_STR);
    $updateStmt->bindParam(':tanggalLahir', $tanggalLahir, PDO::PARAM_STR);
    $updateStmt->bindParam(':jenisKelamin', $jenisKelamin, PDO::PARAM_STR);
    $updateStmt->bindParam(':noPonsel', $noPonsel, PDO::PARAM_STR);
    $updateStmt->bindParam(':noRekening', $noRekening, PDO::PARAM_STR);
    $updateStmt->bindParam(':ID_user', $ID_user, PDO::PARAM_INT);
    $updateStmt->execute();

    // Redirect to profile page or other relevant page after saving the changes
    header('Location: profile.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="../css/profileEdit.css" />
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
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
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
            src="../assets/Screenshot_2023-10-21_121056-removebg-preview 2.svg"
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
      </div>

    </nav>
    <!-- End Navbar -->
    
    <!-- Start Form -->
<h1>Informasi Pengguna</h1>
<div class="row section justify-content-center">
    <div class="col-6">
        <div class="intro">
            <div class="card card-body p-4 p-md-5 ">
                <form action="" method="post" class="formulir">
                    <div class="form-outline">
                        <input type="text" name="name" class="form-control" placeholder="Nama" value="<?php echo $userData['name']; ?>"/>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $userData['email']; ?>"/>
                        <div class="d-flex tanggalLahir">
                            <h6>Tanggal Lahir :</h6>
                            <input type="date" name="tanggalLahir" class="form-control" value="<?php echo $userData['tanggal_lahir']; ?>"/>
                        </div>
                        <div class="jenis_kelamin">
                            <h6>Jenis Kelamin :</h6>
                            <div class="form-check d-flex align-items-center mx-3">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="flexRadioDefault1" value="L" <?php echo ($userData['jenis_kelamin'] == 'L') ? 'checked' : ''; ?>>
                                <label class="form-check-label mx-1" for="flexRadioDefault1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="radio" name="jenisKelamin" id="flexRadioDefault2" value="P" <?php echo ($userData['jenis_kelamin'] == 'P') ? 'checked' : ''; ?>>
                                <label class="form-check-label mx-1" for="flexRadioDefault2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <input type="text" name="noPonsel" class="form-control" placeholder="No Ponsel" value="<?php echo $userData['no_ponsel']; ?>"/>
                        <input type="text" name="noRekening" class="form-control" placeholder="No Rekening" value="<?php echo $userData['no_rekening']; ?>"/>
                    </div>
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button type="submit" class="btn btn-success">Simpan Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
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
  </body>
</html>