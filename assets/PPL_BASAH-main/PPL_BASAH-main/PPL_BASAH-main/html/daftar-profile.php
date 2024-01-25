<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="../css/profile.css" />
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

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #e8f5e9">
      <div class="container-fluid">
        <img
          class="navbar-brand"
          src="../assets/Screenshot_2023-10-21_121056-removebg-preview 2.svg"
          alt="logo basah"
          style="width: 100px"
        />
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
          <form class="d-flex" role="search" >
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Education</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Services</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"
                >Contact</a
              >
            </li>
          </ul>

          <div class="d-grid gap-2" id="button_sign_in">
            <button
              class="btn btn-outline-success"
              type="submit"
              fdprocessedid="addvtc"
            >
              SignUp
            </button>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <!-- Start Form -->
    <h1>Informasi Pengguna</h1>
    <div class="container-fluid">
    <div class="card">
    <div class="card-body">
    <div class="row section justify-content-center">
        <?php
            include '../config/koneksi.php';
            $db = new database();
        ?>
        <table class="table" id="x" style="text-align : center; font-size : 14px;">
          <thead class="table-light">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">No Ponsel</th>
              <th scope="col">No Rekening</th>
            </tr>
        
          </thead>
          <tbody>
          <?php
          foreach($db->tampil_profile() as $d){
          ?>
            <tr>
              <th scope="row"><?php echo $d ['id']; ?></th>
              <td><?php echo $d ['nama']; ?></td>
              <td><?php echo $d ['username']; ?></td>
              <td><?php echo $d ['email']; ?></td>
              <td><?php echo $d ['tgl_lahir']; ?></td>
              <td><?php echo $d ['jenis_kelamin']; ?></td>
              <td><?php echo $d ['no_ponsel']; ?></td>
              <td><?php echo $d ['no_rekening']; ?></td>
            </tr>
          <?php
              }
          ?>
          </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>

    <!-- End Form -->
      
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
