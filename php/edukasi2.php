<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Berita 1</title>
  <link rel="stylesheet" href="../css/kertas.css" />
  <link rel="stylesheet" href="../css/navbar.css">
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
      <img src="../assets/Berita 2.png" alt="" style = "border-radius: 50px;">

      <p style="font-family: 'Jost', sans-serif; margin-top: 30px; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Timbulan sampah elektronik di Indonesia tercatat mencapai 2 juta ton di tahun 2021, berdasarkan informasi Kementerian Lingkungan Hidup dan Kehutanan. Pulau Jawa menyumbang sebanyak 56%, 22%-nya berasal dari Pulau Sumatera, dan yang lainnya terbagi dari seluruh daerah di Indonesia. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Perkembangan digitalisasi disebut menjadi alasan meningkatnya penggunaan perangkat elektronik. Hal ini juga yang menyebabkan timbulan sampah elektronik selalu bertambah setiap tahunnya. Tanpa diiringi penanganan dan pengelolaan yang tepat, sampah elektronik yang menggunung dapat menimbulkan bahaya serius. Terlebih karena kandungannya yang sangat tidak ramah untuk lingkungan bahkan manusia.
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Dari total 2 juta ton sampah elektronik yang tercatat oleh KLHK di tahun 2021, nyatanya baru sekitar 17,4% yang berhasil dikelola dengan baik. Sisa lainnya masih tersimpan di rumah atau masuk ke tempat pembuangan sampah dan bercampur dengan jenis sampah lainnya. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Sampah elektronik sendiri wujudnya bermacam-macam. Dapat berupa baterai, kabel listrik, bohlam lampu, kipas angin listrik, perangkat komputer, bahkan kulkas dan mesin cuci yang secara ukuran tidak selayaknya dibuang di tempat penampungan sampah standar. Bukan hanya karena beberapa di antaranya berukuran besar, namun sampah elektronik termasuk ke dalam Limbah Bahan Berbahaya dan Beracun (B3) yang memiliki kandungan zat kimia beracun di dalamnya.
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Dikutip dari Media Indonesia, menurut penelitian PhD Candidate for Recycling Electronic Waste, timbulan sampah elektronik di Indonesia diprediksi akan mencapai angka 3.200 kiloton di tahun 2040. Artinya, rata-rata setiap orang menyumbang sebanyak 10 kilogram sampah elektronik dalam satu tahun. Angka ini bisa jadi akan terus bertambah mengingat perkembangan teknologi yang juga kian meningkat.
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Pengelolaan sampah elektronik yang termasuk sampah B3 masih terus disempurnakan hingga saat ini. Direktur Pengelolaan Sampah Limbah dan B3 (PSLB3) KLHK, Novrizal Tahar menyebut, peraturan mengenai sampah elektronik di Indonesia merupakan hal baru. Upaya integrasi antara pemerintah pusat, pemerintah daerah, industri/pelaku usaha, produsen, maupun masyarakat juga terus dilakukan. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Regulasi pengelolaan sampah elektronik di Indonesia saat ini tertuang dalam UU Nomor 18 Tahun 2008 tentang Pengelolaan Sampah, PP Nomor 101 Tahun 2014 tentang Pengelolaan Limbah Bahan Berbahaya dan Beracun, PP Nomor 27 Tahun 2020 tentang Pengelolaan Sampah Spesifik, serta PP Nomor 22 Tahun 2021 tentang Penyelenggaraan Perlindungan dan Pengelolaan Lingkungan Hidup. Penyelenggaraan aturan ini diharapkan dapat membantu menumbuhkan kesadaran masyarakat akan pentingnya pengelolaan sampah khusus yang bertanggung jawab. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Salah satunya yang dilakukan oleh Pemerintah Provinsi DKI Jakarta. Pemprov DKI Jakarta berupaya menyelenggarakan pengelolaan sampah elektronik secara benar mengikuti aturan yang ada melalui Program “Penjemputan Limbah Elektronik” yang diinisiasi tahun 2017 lalu. Warga Jakarta dapat menyerahkan atau meminta penjemputan sampah elektronik oleh DLH DKI untuk nantinya sampah akan ditempatkan di tempat penampungan sementara khusus.
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