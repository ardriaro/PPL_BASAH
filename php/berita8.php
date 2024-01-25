<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Berita 7</title>
  <link rel="stylesheet" href="../css/kertas.css" />
  <link rel="stylesheet" href="../css/navbar&top.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
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
      <a class="btn btn-link btn-floating text-white" href="#!" role="button" data-mdb-ripple-color="dark"
        style="padding: 6px;"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-link btn-floating text-white" href="#!" role="button" data-mdb-ripple-color="dark"
        style="padding: 6px;"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn btn-link btn-floating text-white" href="#!" role="button" data-mdb-ripple-color="dark"
        style="padding: 6px;"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn btn-link btn-floating text-white" href="#!" role="button" data-mdb-ripple-color="dark"
        style="padding: 6px;"><i class="fab fa-instagram"></i></a>
    </div>
  </div>

  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg" style="background-color: #e8f5e9">
    <div class="container-fluid">
      <img class="navbar-brand" src="../assets/Screenshot_2023-10-21_121056-removebg-preview 2.svg" alt="logo basah"
        style="width: 100px" />

      <div class="d-flex reverse">
        <div class="dropdown-center">
          <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-person-circle" viewBox="0 0 16 16" style="font-size: xx-large;">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
              <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="../html/profile.php">Profil</a></li>
            <li><a class="dropdown-item" href="../html/alamat.php">Alamat</a></li>
            <li><a class="dropdown-item" href="transaksi.php">Transaksi</a></li>
            <li><a class="dropdown-item" href="../html/sign-in.php">Log out</a></li>
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../php/news.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../php/education.php">Edukasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../html/services/pesanan.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#footer">Bantuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#footer">Kontak</a>
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
          <li><a class="dropdown-item" href="../php/pesanan.php">Services</a></li>
          <li><a class="dropdown-item" href="#footer">Bantuan</a></li>
          <li><a class="dropdown-item" href="#footer">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- STRUCTURE -->
  <section class="container" style="background-color: white;">
    <div class="content">
      <img src="../assets/berita sembilan.jpg" alt="" style = "border-radius: 50px;">

      <p style="font-family: 'Jost', sans-serif; margin-top: 30px; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      KUWARISAN (06/02/2022) - Bank Sampah Bedjo Lestari membuat Edukasi sampah dengan tajuk "Seribu Sampah Sejuta Kreasi" sebagai tema utama dalam memberikan edukasi kepada anak-anak mengenai pemanfaatan sampah menjadi produk kreatif. Kegiatan ini bertujuan untuk menumbuhkan rasa kesadaran dan kepekaan akan lingkungan, ditanamkan langsung melalui edukasi pada anak tingkat SLTA.  
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Kegiatan ini diikuti oleh 20 orang peserta dari MA-Alfurqon. Bank Sampah Bedjo Lestari memberikan edukasi secara rutin kedepan sesuai dengan tajuk Seribu Sampah Sejuta Kreasi yang diinisiasi oleh pengurus Bank Sampah yakni Apriyanto, S.Hum yang juga selaku pengajar di MA- Al Furqon.  
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Kegiatan edukasi menjadi sarana untuk mengenalkan kepeduliaan lingkungan  sekaligus wahana kreatif, dan hiburan, anak-anak bisa berkreatifitas dan membuat kreasi apapun.    
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      “Kami akan sediakan bahan-bahan beserta sample dari produk yang akan dibuat. Kegiatan ini juga menjadi motor penggerak untuk mendekatkan Sampah yang tadinya dianggap tidak bernilai tapi bisa dimanfaatkan menjadi barang layak pakai dikombinasikan dengan kreatifitas". Kata Genduk Sri Rudati, S.IP selaku Direktur Bank Sampah Bedjo Lestari. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Selain itu dari perwakilan MA-Al Furqon Ustadzah Diannisa Primausadi menyampaikan rasa terimakasih dan berharap bahwa kegiatan edukasi ini bisa menjadi momentum untuk anak-anak lebih peduli pada lingkungan. Serta barangkali bisa mewujudkan sinergitas yang lebih baik ke depan.  
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      “kegiatan ini akan menjadi tolak ukur pertumbuhan ekonomi kreatif daur ulang di Desa Kuwarisan maupun sarana rekreatif bagi anak-anak ke depannya." Kata Apriyanto, S.Hum selaku pengajar di MA- Al Furqon.  
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Bank Sampah Bedjo Lestari Desa Kuwarisan akan menumbuhkan misi untuk menciptakan kepeduliaan lingkungan, melibatkan sinergitas kelompok masyarakat, serta menumbuhkan ekonomi melalui gerakan di tingkat lokal yang nantinya akan memberikan pengaruh yang lebih luas melalui aksi-aksi kecil nyata. 
      </p>
    </div>
  </section>
  <!-- END STRUCTURE -->

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


  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <!-- <script src="alamat.js"></script> -->
</body>

</html>