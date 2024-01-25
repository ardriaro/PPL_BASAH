<?php
    require "../koneksi/koneksi.php";

    $queryEdukasi = mysqli_query($con, "SELECT * FROM gambar");
    $NoData = mysqli_num_rows($queryEdukasi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="../css/education.css">
    <link rel="stylesheet" href="../css/jenis-edu.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/regular.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/svg-with-js.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet">
    <head>
    <link rel="stylesheet" href="../css/homepage.css" />
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
    <title>Home Page</title>
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
      <div class="container-fluid">
      <a href="../html/homepage.php">
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
                <a class="nav-link active" aria-current="page" href="../php/news1.php">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/education1.php"
                  >Edukasi</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../html/sign-in.php"
                onclick="showLoginAlert()">Services</a
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

          <div class="d-grid gap-2" id="button_sign_in">
            <a href="sign-up2.php">
              <button
                class="btn btn-outline-success"
                type="submit"
                fdprocessedid="addvtc"
              >
                SignUp
              </button>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <script>
        function showLoginAlert() {
            // Check if the user is not logged in (you can customize this check)
            var userNotLoggedIn = true;

            if (userNotLoggedIn) {
                // Display an alert box with a button to redirect to login page
                var alertMessage = "You need to login to access this feature.";
                var buttonText = "Login";

                // Create a confirmation dialog (alert box with a button)
                if (confirm(alertMessage)) {
                    // Redirect to the login page if the user clicks "Login"
                    window.location.href = "signin.php"; // Change to your login page
                }
            }
        }
    </script>
    <!-- background image -->
    <div class="bg-image">
        <div class="text-image">
            Mari Berpartisipasi Untuk Indonesia Yang Lebih Baik
        </div>
    </div>

    <!-- Jenis Edukasi -->
    <div class="bg-content container">
        <p class="text-edu text-center">Mari Mengetahui jenis-jenis sampah berikut</p>
        <div class="bg-button container">
            <div class="general row justify-content-center">
                <div class="col-4 col-sm-4">
                    <a href="../html/kertas/definisi2.php">
                        <button type="button" class="btn btn-light btn-lg">
                            Kertas <i class="fa fa-scroll"></i>
                        </button>
                    </a>
                </div>
                <div class="col-4 col-sm-4">
                    <a href="../html/plastik/definisi2.php">
                        <button type="button" class="btn btn-light btn-lg">
                            Plastik <i class="fa fa-bottle-water"></i>
                        </button>
                    </a>
                </div>
                <div class="col-4 col-sm-4">
                    <a href="../html/kaca/definisi2.php">
                        <button type="button" class="btn btn-light btn-lg">
                            Kaca <i class="fa fa-champagne-glasses"></i>
                        </button>
                    </a>
                </div>
                <div class="col-4 col-sm-4">
                    <a href="../html/besi/definisi2.php">
                        <button type="button" class="btn btn-light btn-lg">
                            Besi <i class="fa fa-screwdriver-wrench"></i>
                        </button>
                    </a>
                </div>
                <div class="col-4 col-sm-4">
                    <button type="button" class="btn btn-light btn-lg">
                        Organik <i class="fa fa-leaf"></i>
                    </button>
                </div>
                <div class="col-4 col-sm-4">
                    <button type="button" class="btn btn-light btn-lg">
                        Elekronik <i class="fa fa-computer"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Text Center Education -->
    <p class="text-center">Edukasi Kami</p>
    <div class="line-center"></div>
    <!-- End Text Center Education -->

    <!-- Content -->
    <div class="container mt-4">
        <div class="row justify-content-center" style="gap: 20px 20px; margin-bottom: 150px;">
            <div class="card col-sm-12" style="width: 25rem;">
                <img src="../assets/Berita 1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Penduduk Indonesia menghasilkan 65 juta ton sampah
                    </h5>
                    <p class="card-text">
                    gundukan sampah mencapai 30 meter disinyalir hanya mampu menampung masuknya 7000-7500 ton sampah penduduk DKI Jakarta hingga maksimal 3 tahun lagi.
                    </p>
                    <a href="edukasi1.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card col-sm-12" style="width: 25rem;">
                <img src="../assets/Berita 2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Timbulan sampah elektronik di Indonesia tercatat mencapai 2 juta ton di tahun 2021
                    </h5>
                    <p class="card-text">
                    Dari total 2 juta ton sampah elektronik yang tercatat oleh KLHK di tahun 2021, nyatanya baru sekitar 17,4% yang berhasil dikelola dengan baik.
                    </p>
                    <a href="edukasi2.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card col-sm-12" style="width: 25rem;">
                <img src="../assets/Berita 3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    mengurangi timbulan sampah ke Tempat Pembuangan Akhir (TPA)
                    </h5>
                    <p class="card-text">
                    Contoh sampah B3 yaitu sampah kaca, kemasan detergen atau pembersih lainnya
                    </p>
                    <a href="edukasi3.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card col-sm-12" style="width: 25rem;">
                <img src="../assets/Berita 4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Edi Priyanto pegiat lingkungan Kampung Edukasi Sampah
                    </h5>
                    <p class="card-text">
                    Anak-anak harus ditanamkan sejak dini,  sampah tidak boleh dibuang sembarangan karena akan memberikan dampak buruk bagi lingkungannya
                    </p>
                    <a href="edukasi4.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card col-sm-12" style="width: 25rem;">
                <img src="../assets/Berita5.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                    Pengurangan sampah plastik ke laut hingga 70 persen
                    </h5>
                    <p class="card-text">
                        Prasetyo mengatakan bahwa masyarakat telah melakukan pengelolaan sampah rumah tangga secara menyeluruh, sehingga dapat mengurangi jumlah sampah yang yang berakhir di TPA
                    </p>
                    <a href="edukasi5.php" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
<footer class="site-footer" id="footer">
    <!-- Footer About Us -->
    <div class="container" style="max-width: 600px">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About Us</h6>
                <p class="text-justify">
                    Bank Sampah merupakan sebuah layanan yang bertujuan untuk
                    mengelola dan mendaur ulang sampah secara efisien.
                </p>
                <p></p>
            </div>

            <div class="col-sm-12 col-md-6">
                <h6>Newslatter</h6>
                <p class="text-justify">
                    Lorem Ipsum is simply dummy text of in market the printing
                    typesetting.
                </p>
                <p></p>
            </div>

            <div class="col-sm-12 col-md-6"></div>

            <div class="col-sm-12 col-md-6" id="footer_sosmed">
                <a class="btn btn-link btn-floating" href="#!" role="button" data-mdb-ripple-color="dark"
                    style="font-size: 30px;">
                    <i class="fab fa-facebook"></i>
                </a>

                <a class="btn btn-link btn-floating" href="#!" role="button" data-mdb-ripple-color="dark"
                    style="font-size: 30px;">
                    <i class="fab fa-apple"></i>
                </a>

                <a class="btn btn-link btn-floating" href="#!" role="button" data-mdb-ripple-color="dark"
                    style="font-size: 30px;">
                    <i class="fab fa-twitter"></i>
                </a>

                <a class="btn btn-link btn-floating" href="#!" role="button" data-mdb-ripple-color="dark"
                    style="font-size: 30px;">
                    <i class="fab fa-google"></i>
                </a>

            </div>

        </div>
    </div>
    <hr />
    <div class="container-fluid text-white text-center">
        <p>
            Copyright &copy; 2023 Sistem Bank Sampah - All Right Reserved.A
            product of <a href="#">PT.Bank Sampah</a>
        </p>
    </div>
</footer>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="/js/sign-in.js"></script>
</body>

</html>