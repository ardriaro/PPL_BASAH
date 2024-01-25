<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="../css/news.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/newsss.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../css/newss.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&family=Shanti&display=swap" rel="stylesheet">
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
    <a href="../html/homepage2.php">
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

    <!-- bg-image -->
    <div class="back-image">
        <div class="text-image">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col">
                        <img class="bg-logo rounded mx-auto d-block"
                            src="../assets/Screenshot_2023-10-21_121056-removebg-preview 1.png" alt=""
                            style="width: 31rem; height: 14rem;">
                    </div>
                </div>
            </div>
            <p class="text-bg1 text-center">OUR MISSON</p>
            <p class="text-bg2 text-center">Bersama Kita Bisa Membuat Perbedaan</p>
        </div>
    </div>
    <!-- END  bg-image -->

    <!-- Content News -->
    <div class="top-berita">
        <div class="text-berita">
            Berita Baru <i class="bi bi-newspaper"></i>
            <div class="line-berita">
                __________________________________________________________
            </div>
        </div>
    </div>

    <!-- Content News -->

    <div class="column row mt-4" style="gap: 30px 20px; margin: 0px 0px 0px 0px;">
        <div class="lebar-content col-7">
            <div class="content-row row" style="gap: 30px 0px;">
                <div class="lebar-content pertama col-sm-12">
                    <div class="lebar-kartu card" style="width: 70rem; margin: 0px; padding: 0px;">
                        <div class="card-body">
                            <img src="../assets/078287300_1684830016-20230521_131416 2.png" class="lebar-foto rounded float-end" alt="..."
                                style="width: 300px; height: 220px;">
                            <h5 class="card-title">Solo Art Market</h5>
                            <p class="card-text">“Bunga dari plastik kresek itu gampang perawatannya. Gampang untuk membersihkannya karena tahan air. Juga tidak akan diteluri lalat yang bintik-bintik hitam seperti di bunga artificial. Tapi ketahannya juga sesuai dengan kualitas plastik kresek itu sendiri,” jelas Imelda saat ditemui Liputan6.com, pada Minggu (23/5) di gelaran Solo Art Market 2023.</p>
                            <a href="berita1.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="lebar-content col-sm-12">
                    <div class="lebar-kartu card" style="width: 70rem; margin: 0px; padding: 0px;">
                        <div class="card-body">
                            <img src="../assets/berita kedua.png" class="lebar-foto rounded float-end" alt="..."
                                style="width: 300px; height: 220px;">
                            <h5 class="card-title">Ayo datang ke rumah saya di Medan Belawan</h5>
                            <p class="card-text">Sementara, plastik saset dianyam menjadi tikar, tempat tisu, atau tas tangan. Ada juga styrofoam yang dibentuk menjadi hiasan berbentuk bunga.</p>
                            <a href="berita2.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="lebar-content col-sm-12">
                    <div class="lebar-kartu card" style="width: 70rem; margin: 0px; padding: 0px;">
                        <div class="card-body">
                            <img src="../assets/berita tiga.png" class="lebar-foto rounded float-end" alt="..."
                                style="width: 300px; height: 220px;">
                            <h5 class="card-title">Bunga dari plastik kresek itu gampang perawatannya</h5>
                            <p class="card-text">Latar belakang pendidikan Imelda adalah seorang akuntan (kuliah jurusan akutansi). Lalu, bekerja sebagai pengajar sekaligus mengisi eskul (kegiatan ekstrakurikuler) seni di salah satu sekolah swasta di Solo dan aktif di KREASO (Kreatif Anak Sekolah Solo) untuk mengenalkan ide minimalis menggunakan plastik.</p>
                            <a href="berita3.php" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <button class="tombol-load btn btn-primary" id="load-more">
                    <p class="load-text text-center">Load More</p>
                </button>
                <div id="hidden-content" style="display: none;">
                    <div class="row" style="gap: 30px 0px; padding: 0px;">
                        <div class="lebar-content col-sm-12">
                            <div class="lebar-kartu card" style="width: 70rem; margin: 0px; padding: 0px;">
                                <div class="card-body">
                                    <img src="../assets/berita empat.png" class="lebar-foto rounded float-end" alt="..."
                                        style="width: 300px; height: 220px;">
                                    <h5 class="card-title">Kreativitas bank sampah di Kota Yogyakarta</h5>
                                    <p class="card-text">Sejumlah kerajinan dan barang seni yang mampu dihasilkan dari beragam jenis sampah di antaranya hiasan dinding dari tutup botol plastik dan kaleng, jam dinding, kap lampu, hiasan meja dari botol bekas, vas, dan berbagai kerajinan lainnya</p>
                                    <a href="berita4.php" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="lebar-content col-sm-12">
                            <div class="lebar-kartu card" style="width: 70rem; margin: 0px; padding: 0px;">
                                <div class="card-body">
                                    <img src="../assets/berita lima.jpg" class="lebar-foto rounded float-end" alt="..."
                                        style="width: 300px; height: 220px;">
                                    <h5 class="card-title">Salah satu program pemerintah Nusa Tenggara Barat adalah zero waste</h5>
                                    <p class="card-text">Wanita yang kerap disapa Eka ini mengatakan, di samping edukasi secara teori, mereka juga diajak berkreasi mengolah sampah anorganik seperti plastik menjadi beragam kerajinan bernilai ekonomis secara berkelompok</p>
                                    <a href="berita5.php" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="lebar-content col-sm-12">
                        <div class="lebar-content col-sm-12">
                            <div class="lebar-kartu card" style="width: 70rem; margin: 0px; padding: 0px;">
                                <div class="card-body">
                                    <img src="../assets/berita sembilan.jpg" class="lebar-foto rounded float-end" alt="..."
                                        style="width: 300px; height: 220px;">
                                    <h5 class="card-title">Kegiatan edukasi menjadi sarana untuk mengenalkan kepeduliaan lingkungan</h5>
                                    <p class="card-text">Kegiatan ini diikuti oleh 20 orang peserta dari MA-Alfurqon. Bank Sampah Bedjo Lestari memberikan edukasi secara rutin kedepan sesuai dengan tajuk Seribu Sampah Sejuta Kreasi yang diinisiasi oleh pengurus Bank Sampah yakni Apriyanto, S.Hum yang juga selaku pengajar di MA- Al Furqon.  </p>
                                    <a href="berita8.php" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>  
                        </div>
                        <div class="lebar-content col-sm-12">
                            <div class="lebar-kartu card" style="width: 70rem; margin: 0px; padding: 0px;">
                                <div class="card-body">
                                    <img src="../assets/berita6.jpg" class="lebar-foto rounded float-end" alt="..."
                                        style="width: 300px; height: 220px;">
                                    <h5 class="card-title">Penanggulangan polusi sampah plastik</h5>
                                    <p class="card-text">Dengan banyaknya jumlah sampah plastik (anorganik) yang belum terkelola dengan baik dan belum optimal mendorong mahasiswa KKN Tim II Universitas Diponegoro Kecamatan Bae menyelenggarakan program monodisiplin mengenai “Pelatihan Kreasi Sampah dan Branding Produk Kreasi Sampah Melalui Media Sosial” dalam rangka mengupayakan pencapaian SDGs tujuan ke-8 yaitu Pekerjaan Layak dan Pertumbuhan Ekonomi untuk Meningkatkan Pertumbuhan Ekonomi yang Inklusif dan Berkelanjutan, Kesempatan Kerja yang Produktif dan Menyeluruh, serta Pekerjaan yang Layak untuk Semua sekaligus mendorong pemberdayaan masyarakat melalui kegiatan produktif, berkelanjutan, dan diupayakan mampu mengoptimalkan potensi nilai ekonomis pada produk kreasi daur ulang sampah guna menunjang perekonomian masyarakat maupun desa. </p>
                                    <a href="berita7.php" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="lebar-content col-sm-12">
                            <div class="lebar-kartu card" style="width: 70rem; margin: 0px; padding: 0px;">
                                <div class="card-body">
                                    <img src="../assets/berita tujuh.jpeg" class="lebar-foto rounded float-end" alt="..."
                                        style="width: 300px; height: 220px;">
                                    <h5 class="card-title">Dikatakan lebih lanjut, begitu sulitnya pengelolaan sampah</h5>
                                    <p class="card-text">Menurut Hj Dewi Tedjowati, saat ini kondisi lingkungan sudah masuk dalam kategori darurat sampah, sehingga para ibu memiliki peran sebagai ujung tombak penanganan sampah plastik, kertas dan lainnya</p>
                                    <a href="berita8.php" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom: 30px;">

                </div>
            </div>
        </div>
        <div class="trending col-3 ">
            <div class="bg-trending col-sm-12">
                <p class="trending-text text-center">Trending</p>
                <span class="text-gede">1. Perubahan Iklim : </span> <span class="text-kecil">Diskusi mengenai dampak
                    perubahan iklim dan upaya untuk mengatasi serta beradaptasi dengan perubahan tersebut.</span> <br>
                <span class="text-gede">2. Energi Terbarukan : </span> <span class="text-kecil">Inovasi dan perkembangan
                    terbaru dalam teknologi energi terbarukan seperti solar, angin, hidro, dan lainnya.</span> <br>
                <span class="text-gede">3. Pengurangan Limbah Plastik:</span> <span class="text-kecil"> Inisiatif dan
                    kampanye global untuk mengurangi penggunaan plastik sekali pakai dan mencari solusi
                    alternatif.</span> <br>
                <span class="text-gede">4. Konservasi Hutan:</span> <span class="text-kecil">Upaya untuk melindungi
                    hutan hujan dan ekosistem lainnya, serta kebijakan-kebijakan terkait deforestasi.</span> <br>
                <span class="text-gede">5. Keseimbangan Ekosistem:</span> <span class="text-kecil">Perhatian terhadap
                    keberlanjutan ekosistem dan upaya-upaya untuk menjaga keseimbangan alam.</span> <br>
            </div>
        </div>
    </div>

    <!-- END Content News -->

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
    <script>
        document.getElementById('load-more').addEventListener('click', function () {
            var hiddenContent = document.getElementById('hidden-content');
            hiddenContent.style.display = 'block';
            this.style.display = 'none';
        });
    </script>
</body>

</html>