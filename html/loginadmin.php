<?php
// signin.php

session_start();

// Include file database.php
include 'databaseadmin.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Authenticate user based on both email and password
    if (authenticate_user($email, $password, $conn)) {
        // Login successful
        $_SESSION['id_agen'] = get_id_from_email($conn, $email);
        header('Location: profile_user.php');
        exit();
    } else {
        // Authentication failed
        echo "Authentication failed";
    }
}

// Function to authenticate user based on email and password
function authenticate_user($email, $password, $conn) {
    // Note: No need to include 'database.php' here

    $sql = "SELECT * FROM agen WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Compare the plain-text password with the stored password
        if ($password === $row['password']) {
            return true;
        }
    }

    return false;
}

// Function to get user ID from the database based on email
function get_id_from_email($conn, $email) {
    $sql = "SELECT id_agen FROM agen WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['id_agen'];
    }

    return null; // Return null if not found
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link rel="stylesheet" href="../css/sign-in.css" />
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
    <link rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">

  </head>
  <body>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
      </div>
    </div>
    
    <section>
      <div class="sign-in-container">
        <div class="sign-in-sign-in" style="height: 600px;">
          <!-- login -->
          <div class="wrapper fadeInDown">
            <div id="formContent" style="bottom: 8  0px;">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
                <img src="../assets/Screenshot_2023-10-21_121056-removebg-preview 2.svg" id="icon" alt="User Icon" />
              </div>
              
              <!-- Login Form -->
              <form class="mx-4 mb-4" method="post" action="">
                <div class= "mb-3 email1">
                  <input
                    type="email"
                    class="form-control focus-ring"
                    id="floatingInput"
                    placeholder="Email"
                    name="email"
                    style="
                      border-color: #79ac78;
                      --bs-focus-ring-color: rgba(var(--bs-success-rgb), 0.25);
                    "
                  />
                  <label for="floatingInput" class="visually-hidden">Email</label>
                </div>

                <div class="pass">
                  <input type="password"  name="password" id="password" placeholder="Password"/>
                  <i onclick="change()"></i>
                </div>

                <div class="d-flex">
                  <!-- <p>
                    <a
                      class="link-offset-2 link-underline link-underline-opacity-0"
                      href="password.php"
                      style="color: #696969"
                      >Forgot Password?</a
                    >
                  </p> -->
                  <!-- <div class="ms-auto">
                    <p>
                      <a
                        class="link-offset-2 link-underline link-underline-opacity-0"
                        href="sign-up2.php"
                        style="color: #696969"
                        >Sign Up</a
                      >
                    </p>
                  </div> -->
                </div>
  
                <div class="d-grid gap-2 col-6 mx-auto">
                  <a href="homepage2.php">
                    <button
                      class="btn"
                      type="submit"
                      style="background-color: #1E232C; color: white"
                    >
                      Sign In
                    </button>
                  </a>
                </div>
              </form>
            </div>
          </div>
          <div>
          </div>
        </div>
      </div>
    </section>

     

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
    <script src="/js/sign-in.js"></script>
  </body>
</html>
