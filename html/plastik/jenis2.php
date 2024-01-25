<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>organik</title>
    <link rel="stylesheet" href="../../css/kertas.css" />
    <link rel="stylesheet" href="../../css/navbar.css">
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
      <img class="navbar-brand" src="../../assets/logo.png" alt="logo basah"
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
          <li><a class="dropdown-item" href="../profile.php">Profil</a></li>
            <li><a class="dropdown-item" href="../alamatEdit.php">Alamat</a></li>
            <li><a class="dropdown-item" href="../../php/transaksi.php">Transaksi</a></li>
            <li><a class="dropdown-item" href="../sign-in.php">Log out</a></li>
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../../php/news.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../../php/education.php">Edukasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../services/pesanan.php">Services</a>
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
        <li><a class="dropdown-item" href="../../php/news.php">Berita</a></li>
            <li><a class="dropdown-item" href="../../php/education.php">Edukasi</a></li>
            <li><a class="dropdown-item" href="../services/pesanan.php">Services</a></li>
            <li><a class="dropdown-item" href="#footer">Bantuan</a></li>
            <li><a class="dropdown-item" href="#footer">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
    
        <!-- STRUCTURE -->
        <section class="container">
          <div class="content row">
              <div class="col-4">
                <img src="../../assets/plastik.png" alt="">
              </div>
              <div class="col-8">
                <div class="button d-flex justify-content-center">
                  <a href="definisi2.php" class="btn btn-outline-primary" aria-current="page">Definisi</a>
                  <a href="jenis2.php" class="btn btn-outline-primary active">Jenis-jenis</a>
                  <a href="keberlanjutan2.php" class="btn btn-outline-primary">Keberlanjutan</a>
                  <a href="masalahdantantangan2.php" class="btn btn-outline-primary">Masalah dan Tantangan</a>
              </div>
  
              <div>
                <p>
                  Berikut adalah beberapa jenis kertas:
                </p>
                <ol>
                  <li>
                    <b>Polietilen (PE): </b>Polietilen adalah plastik yang sangat umum dan sering digunakan dalam berbagai aplikasi. Ada dua jenis utama polietilen: polietilen berdensitas rendah (LDPE) yang fleksibel dan sering digunakan untuk kantong plastik, dan polietilen berdensitas tinggi (HDPE) yang lebih kuat dan digunakan untuk botol plastik, pipa, dan wadah.
                  </li>
                  <li>
                    <b>Polipropilena (PP): </b> Polipropilena adalah plastik yang tahan terhadap panas dan berat serta memiliki kegunaan yang beragam. Ini digunakan dalam wadah makanan, botol, tali, dan komponen otomotif.
                  </li>
                  <li>
                    <b>Polivinil Klorida (PVC): </b> PVC adalah plastik yang tahan terhadap kimia dan cuaca, sehingga digunakan dalam pipa, kabel listrik, lapisan, dan produk konstruksi seperti jendela dan pintu.
                  </li>
                  <li>
                    <b>Polistirena (PS): </b> Polistirena memiliki beberapa varian, termasuk polistirena ekspanded (EPS) yang digunakan dalam bahan isolasi dan kotak pendingin, serta polistirena padat yang digunakan untuk wadah makanan, cangkir, dan produk elektronik.
                  </li>
                  <li>
                    <b>Polietilen Tereftalat (PET): </b> JPET digunakan dalam botol air minum, botol plastik lainnya, serat, dan benang untuk tekstil.
                  </li>
                  <li>
                    <b>Polikarbonat (PC): </b> Polikarbonat adalah plastik yang kuat dan tahan terhadap benturan, sehingga digunakan dalam kacamata matahari, panel jendela, dan aplikasi di mana ketahanan benturan penting.
                  </li>
                  <li>
                    <b>Akrilonitril Butadiena Stirena (ABS): </b> ABS adalah plastik yang kuat, tahan terhadap panas, dan mudah diolah, sehingga digunakan dalam peralatan rumah tangga, mainan, dan komponen otomotif.
                  </li>
                  <li>
                    <b>Poliamida (Nylon): </b> Nylon adalah plastik yang kuat dan tahan aus, sehingga digunakan dalam produk tekstil, sikat gigi, dan aplikasi industri seperti bantalan dan roda gigi.
                  </li>
                  <li>
                    <b>Polietilena Rendah Densitas Linear (LLDPE): </b> LLDPE adalah varian polietilen yang digunakan dalam kantong belanja, film plastik, dan wadah cairan.
                  </li>
                  <li>
                    <b>Polietilena Rendah Densitas Rendah (LDPE): </b> LDPE adalah jenis polietilen yang sangat fleksibel dan digunakan dalam bahan pelindung, kantong plastik, dan selimut.
                  </li>
                  <li>
                    <b>PPolietilena Klorosulfonat (CSM): </b> CSM adalah plastik yang tahan terhadap bahan kimia dan cuaca, sehingga digunakan dalam produk karet sintetis seperti tali dan karet lapis.
                  </li>
                  <li>
                    <b>Polietilena Rendah Densitas Linear (LDLPE): </b> LDLPE adalah plastik yang fleksibel dan tahan terhadap suhu rendah, digunakan dalam aplikasi seperti kantong plastik beku dan selimut.
                  </li>
                  <li>
                    <b>Polietilena Rendah Densitas Linear (LDLPE): </b> PP-R adalah jenis polipropilena yang digunakan dalam sistem pipa air panas dan dingin karena tahan terhadap panas.
                  </li>
                </ol>
                <p>
                  Setiap jenis plastik memiliki karakteristik yang unik, termasuk kekuatan, tahanan terhadap panas, elastisitas, dan sifat-sifat lainnya yang membuatnya cocok untuk penggunaan tertentu. Seleksi jenis plastik yang tepat sangat tergantung pada kebutuhan dan aplikasi spesifik.
                </p>
              </div>
              </div>
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
