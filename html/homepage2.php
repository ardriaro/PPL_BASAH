<?php

session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['ID_user'])) {
    // Jika belum login, redirect ke halaman login
    header("Location: sign-in.php");
    exit();
}



// ... Kode lainnya untuk halaman berita ...
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../css/homepage2.css" />
    <link rel="stylesheet" href="../css/footer.css">
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
            <li><a class="dropdown-item" href="../html/profile.php">Profil</a></li>
            <li><a class="dropdown-item" href="../php/transaksi.php">Transaksi</a></li>
            <li><a class="dropdown-item" href="../html/services/pesanan.php">Services</a></li>
            <li><a class="dropdown-item" href="alamat.php">Alamat</a></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
        </ul>
      </div>
      </div>

    </nav>
    <!-- End Navbar -->

    <!-- Slide -->
    <div
      id="carouselExampleAutoplaying"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <img src="../assets/bgslide.png" alt="" />
        <div class="carousel-item active" id="carousel-item">
          <div
            class="carousel-caption d-none d-md-block"
            style="bottom: 2.25rem"
          >
            <img
              src="../assets/Screenshot_2023-10-21_121056-removebg-preview 2.svg"
              alt=""
            />
            <p>OUR MISSION</p>
            <h2>
              Bersama Kita Bisa <br />
              Membuat Perbedaan
            </h2>
          </div>
        </div>
        <div class="carousel-item" id="carousel-item">
          <div
            class="carousel-caption d-none d-md-block"
            style="bottom: 2.25rem"
          >
            <img
              src="../assets/Screenshot_2023-10-21_121056-removebg-preview 2.svg"
              alt=""
            />
            <p>OUR MISSION</p>
            <h2>
              Bersama Kita Bisa <br />
              Membuat Perbedaan
            </h2>
          </div>
        </div>
        <div class="carousel-item" id="carousel-item">
          <div
            class="carousel-caption d-none d-md-block"
            style="bottom: 2.25rem"
          >
            <img
              src="../assets/Screenshot_2023-10-21_121056-removebg-preview 2.svg"
              alt=""
            />
            <p>OUR MISSION</p>
            <h2>
              Bersama Kita Bisa <br />
              Membuat Perbedaan
            </h2>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- End Slide -->

    <!-- Div Putih -->
    <section class="container" id="div_putih">
      <div class="row">
        <div class="col align-self-center">
          <h1>What drives us</h1>
          <p>
            is knowing that what is good for our clients today may not be good
            enough for them tomorrow.
          </p>
          <h1>What excites us</h1>
          <p>
            is asking the unasked question. What inspires us is seeing the
            opportunities that others may not see.
          </p>
        </div>
      </div>
    </section>
    <!-- Div Putih -->

    <!-- Section 1 -->
    <section class="section about-section green-bg" id="section1">
      <div class="container-xxl" >
        <div class="row align-items-center justify-content-around radius">
          <!-- <div class="col-lg-5 text-center">
            <img src="/assets/gambar_aboutus_homepage.png" style="padding-left: 150px;">
          </div> -->
          <div class="col-7" style="padding-left: 50px;">
            <div class="about-text">
              <!-- <h3>ABOUT US</h3> -->
              <h4>Apa Itu Bank Sampah?</h4>
              <p>
                Apa itu bank sampah? Bank sampah adalah suatu tempat yang digunakan untuk mengumpulkan sampah yang sudah dipilah-pilah. Setelah itu, hasil dari pengumpulan sampah yang sudah dipilah akan disetorkan ke tempat pembuatan kerajinan dari sampah atau ke tempat Pengepul sampah. Sebagai gambaran, Bank sampah dikelola menggunakan sistem seperti perbankan yang dilakukan oleh petugas sukarelawan.
              </p>
              <div class="btn-bar">
                <a class="px-btn theme" href="#">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-5 text-center visible-xs-block hidden-xs p-0" id="kolom2">
            <img src="../assets/gambar_aboutus_homepage.png" width="700px" >
          </div>
        </div>
      </div>
    </section>
    <!-- End Section 1 -->

    <!-- Section 2 -->
    <section class="section about-section green-bg" id="section2">
      <div class="container-xxl" >
        <button style="background-color: #fff; border: none;" class="d-flex justify-content-center">
            <a href="../php/berita1.php" style="text-decoration: none;" class="d-flex justify-content-center">
            <div class="row align-items-center justify-content-around radius">
              <div class="col-8" style="padding-left: 50px;">
                <div class="about-text">
                  <h4>“Sosok Inspiratif Hesti Novera Imelda, Sulap Sampah Plastik Jadi Kerajinan yang Pasti Cuan”</h4>
                  <p>
                    24 Mei 2023, 07:48 WIB Liputan 6
                  </p>
                </div>
              </div>
              <div class="col-4 text-center visible-xs-block hidden-xs p-0" id="kolom2">
                <img src="../assets/Hesti_Novera_Imelda.png" width="700px" >
              </div>
            </div>
          </a>
        </button>
      </div>
    </section>
    <!-- End Section 2 -->
    
    <!-- Section 3 -->
    <section class="section about-section green-bg" id="section3">
      <div class="container-xxl" >
        <div class="row align-items-center justify-content-around radius">
          <div class="col-6 kolom">
            
            <a href="../php/berita1.php" style="text-decoration: none; color: transparent;" class="d-flex justify-content-center">
              <div class="col" style="padding-left: 20px;">
                <div class="about-text">
                  <h4>“Sosok Inspiratif Hesti Novera Imelda, Sulap Sampah Plastik Jadi Kerajinan yang Pasti Cuan”</h4>
                  <p>
                    24 Mei 2023, 07:48 WIB Liputan 6
                  </p>
                </div>
              </div>
              <div class="col text-center visible-xs-block hidden-xs p-0" id="kolom2">
                <img src="../assets/Hesti_Novera_Imelda.png" width="700px" >
              </div>
            </a>

          </div>

          <div class="col-6 kolom">
            <a href="../php/berita1.php" style="text-decoration: none; color: transparent;" class="d-flex justify-content-center">
              <div class="col" style="padding-left: 20px;">
                <div class="about-text">
                  <h4>“Sosok Inspiratif Hesti Novera Imelda, Sulap Sampah Plastik Jadi Kerajinan yang Pasti Cuan”</h4>
                  <p>
                    24 Mei 2023, 07:48 WIB Liputan 6
                  </p>
                </div>
              </div>
              <div class="col text-center visible-xs-block hidden-xs p-0" id="kolom2">
                <img src="../assets/Hesti_Novera_Imelda.png" width="700px" >
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Section 3 -->
    
        <!-- Footer -->
        <footer class="site-footer" id="footer">
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
