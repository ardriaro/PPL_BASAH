<?php
session_start();

// Include the database connection file
include 'database2.php';

// Assuming you have a user ID associated with the password reset
$ID_user = isset($_SESSION['ID_user']) ? $_SESSION['ID_user'] : null;

// Assuming you have a users table with a password field
$sql = "SELECT password FROM user WHERE ID_user = :ID_user";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':ID_user', $ID_user, PDO::PARAM_INT);
$stmt->execute();
$userData = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST['lama'];
    $newPassword = $_POST['baru'];
    $confirmPassword = $_POST['konfirmasi'];

    // Check if the current password matches the one in the database
    if (password_verify($currentPassword, $userData['password'])) {
        // Check if the new password matches the confirmed password
        if ($newPassword === $confirmPassword) {
            // Update the user's password in the database
            $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $updateSql = "UPDATE user SET password = :hashedNewPassword WHERE ID_user = :ID_user";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bindParam(':hashedNewPassword', $hashedNewPassword, PDO::PARAM_STR);
            $updateStmt->bindParam(':ID_user', $ID_user, PDO::PARAM_INT);
            $updateStmt->execute();

            // Redirect to profile page or other relevant page after changing the password
            header('Location: logout.php');
            exit();
        } else {
            // Handle password mismatch error
            $error = "New password and confirmed password do not match.";
        }
    } else {
        // Handle incorrect current password error
        $error = "Incorrect current password.";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/stylepassword.css" />
    <link rel="stylesheet" href="../css/navbar&top.css">
    <link rel="stylesheet" href="../css/footer.css">
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
    <title>Password</title>
  </head>
  <body>
    <!-- TOP -->
    <div class="container-fluid d-flex" id="top">
      <p class="my-auto" id="text1">
        Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec.Purwokerto
        Sel., Kabupaten Banyumas, Jawa Tengah 5314
      </p>
      <div class="ms-auto" style="width: auto">
        <a style="color: #fff; text-decoration: none" href="#" class="m-1">
          <i class="far fa-envelope m-2"></i>
          <span>Basah@gmail.com</span>
        </a>

        <!-- Facebook -->
        <a
          class="btn btn-link btn-floating text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          style="padding: 6px"
          ><i class="fab fa-facebook-f"></i
        ></a>

        <!-- Twitter -->
        <a
          class="btn btn-link btn-floating text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          style="padding: 6px"
          ><i class="fab fa-twitter"></i
        ></a>

        <!-- Google -->
        <a
          class="btn btn-link btn-floating text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          style="padding: 6px"
          ><i class="fab fa-google"></i
        ></a>

        <!-- Instagram -->
        <a
          class="btn btn-link btn-floating text-white"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          style="padding: 6px"
          ><i class="fab fa-instagram"></i
        ></a>
      </div>
    </div>
    <!-- End Top -->

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

    <!-- FORM -->
<div class="intro container">
    <div class="card card-body p-4 p-md-5">
        <form class="formulir" method="post" action="">
            <div class="form-outline">
                <input type="password" name="lama" class="form-control" placeholder="Password Saat Ini" required/>
                <input type="password" name="baru" class="form-control" placeholder="Password Baru" required/>
                <input type="password" name="konfirmasi" class="form-control" placeholder="Konfirmasi Password" required/>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Ubah</button>
            </div>
        </form>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- FORM -->

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

    <!-- FORM -->
    <!-- <section>
        <form class="change-password" >
            <div class="form-field">
                <input type="password" placeholder="Enter Current Password" name="currentPassword" id="currentPassword" style="font-family: 'Inter', sans-serif;" required >
            </div>
            <div class="form-field">
                <input type="password" placeholder="Enter New Password" name="newPassword" id="newPassword" style="font-family: 'Inter', sans-serif;" required>
              </div>
            <div class="form-field">
                <input type="password" placeholder="Confirm New Password" name="confirmNewPassword" id="confirmNewPassword" style="font-family: 'Inter', sans-serif;" required>
              </div>
            <button type="submit" style="font-family: 'Inter', sans-serif;">Change Password</button>
        </form>
      </section> -->
      <!-- FORM -->