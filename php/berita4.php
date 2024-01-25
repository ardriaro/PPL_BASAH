<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Berita 4</title>
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
      <img src="../assets/berita empat.png" alt="" style = "border-radius: 50px;">

      <p style="font-family: 'Jost', sans-serif; margin-top: 30px; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Yogyakarta (ANTARA) - Kreativitas bank sampah di Kota Yogyakarta untuk mengolah sampah semakin meningkat, sehingga sampah anorganik yang biasanya hanya dibuat aksesoris dan bunga, kini dapat disulap menjadi barang seni yang memiliki nilai jual. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      “Kami bekerja sama dengan Institut Seni Indonesia (ISI) memberikan pendampingan dan pelatihan kepada pengelola bank sampah agar kreasi yang dihasilkan dari pengolahan sampah ini semakin bagus, memiliki nilai seni dan akhirnya memiliki nilai jual yang baik,” kata Kepala Seksi Pengurangan Sampah Dinas Lingkungan Hidup (DLH) Kota Yogyakarta Fauziah di Yogyakarta, Rabu. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Menurut Fauziah, pelatihan baru diberikan kepada 20 kelompok bank sampah yang dinilai sudah memiliki keterampilan dasar untuk mengolah sampah menjadi kerajinan. Di Kota Yogyakarta hingga akhir 2018 terdata sebanyak 475 kelompok bank sampah. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Meskipun demikian, Fauziah berharap bank sampah yang sudah memperoleh pendampingan dan pelatihan tersebut dapat menularkan ilmu yang diperoleh kepada bank sampah lain sehingga mampu menghasilkan karya dari sampah yang juga memiliki cita rasa seni yang tinggi. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Sejumlah kerajinan dan barang seni yang mampu dihasilkan dari beragam jenis sampah di antaranya hiasan dinding dari tutup botol plastik dan kaleng, jam dinding, kap lampu, hiasan meja dari botol bekas, vas, dan berbagai kerajinan lainnya. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      “Bahan-bahan yang digunakan untuk membuat kerajinan sepenuhnya berasal dari sampah yang terkumpul di bank sampah mereka sendiri,” katanya. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Fauziah mengatakan selain untuk mengurangi potensi timbunan sampah anorganik di Kota Yogyakarta, kerajinan yang dihasilkan dari sampah tersebut diharapkan mampu meningkatkan kesejahteraan masyarakat. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      “Harapannya, bank sampah ini mampu membentuk semacam kelompok usaha sehingga pemasaran barang kerajinan yang dihasilkan bisa semakin mudah,” katanya. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      “Sekarang, barang yang dihasilkan dari pengolahan sampah tidak hanya terbatas pada dompet, tas, atau bunga saja. Tetapi ada beraneka barang yang sebelumnya mungkin tidak sempat terpikirkan,” katanya. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Selain itu, Fauziah juga berharap keberadaan bank sampah mampu meningkatkan pemahaman dan kesadaran kepada masyarakat untuk memilah dan mengelola sampah sejak dari rumah tangga. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Sedangkan untuk pelatihan dan pendampingan kreasi untuk bank sampah akan dilanjutkan tahun berikutnya karena Pemerintah Kota Yogyakarta sudah menandatangani kesepakatan bersama dengan ISI untuk tiga tahun. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Sementara itu, salah satu peserta pelatihan Sri Martini yang tergabung dalam Bank Sampah Gema Berseri Suryatmajan mengatakan ada tambahan nilai jual yang cukup signifikan jika sampah diolah menjadi kreasi seni yang berkualitas.  
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      “Kami mengikuti pelatihan dengan ISI. Ada beberapa sampah yang menjadi bahan baku utama, misalnya bungkus deterjen atau kopi yang tidak memiliki nilai jual ternyata bisa dikreasikan menjadi hiasan dinding. Begitu pula dengan tutup botol bisa dibuat menjadi boneka dinding,” katanya. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Ia menyebutkan hasil kreasinya bisa dijual dengan harga bervariasi antara Rp10.000 hingga ratusan ribu rupiah tergantung dari nilai seni dari barang yang dihasilkan. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      Kreasi sampah yang dihasilkan pun diikutkan dalam beberapa pameran, salah satunya setiap kali digelar acara “car free day” di Jalan Jenderal Sudirman Yogyakarta tiap pekan ketiga setiap bulannya. 
      </p>
      <p style="font-family: 'Jost', sans-serif; font-size: 1.5rem; text-indent: 1rem; text-align: justify;">
      “Kami berharap, pelatihan bisa diteruskan. Ada bahan yang ingin kami olah menjadi kerajinan yaitu dari styrofoam menjadi pot atau batako ringan,” katanya. 
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