<?php

session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['ID_user'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: sign-in.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <link rel="stylesheet" href="../../css/services/pesanan.css" />
    <link rel="stylesheet" href="../../css/navbar&top.css">
    <link rel="stylesheet" href="../../css/footer.css">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300&display=swap" rel="stylesheet">
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
            <li><a class="dropdown-item" href="../profile.php">Profil</a></li>
            <li><a class="dropdown-item" href="../../php/transaksi.php">Transaksi</a></li>
            <li><a class="dropdown-item" href="pesanan.php">Services</a></li>
            <li><a class="dropdown-item" href="../alamat.php">Alamat</a></li>
            <li><a class="dropdown-item" href="../logout.php">Log Out</a></li>
        </ul>
      </div>
      </div>

    </nav>
    <!-- End Navbar -->

    <!-- STRUCTURE -->
    <div id="gradient" class="container-fluid">
        <div class="row ps-5 py-4">
            <div class="col-7">
                <h1>Pengantaran yang sudah tersedia di 5 kecamatan</h1>
                <h3>"Mudah, Cepat, dan Ramah Lingkungan: Antar Sampah Tanpa Repot"</h3>
                <div class="text1 px-4">
                  <a href="pilihSampah.php" style="text-decoration: none;">
                    <button type="button" class="btn">Ayo Lakukan Pengantaran Sampahmu</button>
                  </a>
                </div>
            </div>
            <div class="col-5">
                <img src="../../assets/gambar_homeservices.png">
            </div>
        </div>
    </div>

    <section class="section1">
      <h1>Jenis Sampah Yang Ingin Kamu Buang</h1>
      <div class="container-xxl mx-auto bg">
          <div class="row">
              <div class="col-lg-4 col-sm-6 py-4 d-flex justify-content-center">
                  <div class="card">
                    <img src="../../assets/sampah_plastik.png" class="card-img-top" style="height: 14rem;">
                    <div class="card-body">
                      <h5 class="card-title">Sampah Plastik</h5>
                      <h4>1kg, 40RP</h4>
                    </div>
                  </div>
                </div>
                  
              <div class="col-lg-4 col-sm-6 py-4 d-flex justify-content-center">
                  <div class="card">
                      <img src="../../assets/sampah_kertas.png" class="card-img-top" style="height: 14rem;">
                      <div class="card-body">
                        <h5 class="card-title">Sampah Kertas</h5>
                        <h4>1kg, 40RP</h4>
                      </div>
                    </div>
              </div>
              <div class="col-lg-4 col-sm-6 py-4 d-flex justify-content-center">
                  <div class="card">
                      <img src="../../assets/sampah_kaca.png" class="card-img-top" style="height: 14rem;">
                      <div class="card-body">
                        <h5 class="card-title">Sampah Kaca</h5>
                        <h4>1kg, 40RP</h4>
                      </div>
                    </div>
              </div>
              <div class="col-lg-4 col-sm-6 py-4 d-flex justify-content-center">
                  <div class="card">
                      <img src="../../assets/sampah_besi.png" class="card-img-top" style="height: 14rem;">
                      <div class="card-body">
                        <h5 class="card-title">Sampah Besi</h5>
                        <h4>1kg, 40RP</h4>
                      </div>
                    </div>
              </div>
              <div class="col-lg-4 col-sm-6 pb-4 d-flex justify-content-center">
                  <div class="card">
                      <img src="../../assets/sampah_organik.png" class="card-img-top" style="height: 14rem;">
                      <div class="card-body">
                        <h5 class="card-title">Sampah Organik</h5>
                        <h4>1kg, 40RP</h4>
                      </div>
                    </div>
              </div>
              <div class="col-lg-4 col-sm-6 pb-4 d-flex justify-content-center">
                  <div class="card">
                      <img src="../../assets/sampah_elektronik.png" class="card-img-top" style="height: 14rem;">
                      <div class="card-body">
                        <h5 class="card-title">Sampah Elektronik</h5>
                        <h4>1kg, 40RP</h4>
                      </div>
                    </div>
              </div>
          </div>
        </div>

        <div class="container-xxl d-flex justify-content-center my-5">
          <a href="pilihSampah.php">
            <button type="button" class="btn btn-success btn-lg">Antar Sekarang</button>        
          </a>
        </div>
    </section>

      
    <!-- END STRUCTURE -->
    <!-- Footer -->
    <footer class="site-footer">
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
            <a
              class="btn btn-link btn-floating"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark" 
              style="font-size: 30px;">
              <i class="fab fa-facebook"></i>
            </a>

            <a
              class="btn btn-link btn-floating"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              style="font-size: 30px;">
              <i class="fab fa-apple"></i>
            </a>

            <a
              class="btn btn-link btn-floating"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              style="font-size: 30px;">
              <i class="fab fa-twitter"></i>
            </a>
            
            <a
              class="btn btn-link btn-floating"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
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
