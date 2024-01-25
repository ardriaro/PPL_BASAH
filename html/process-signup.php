<?php


// Include the database configuration file
include('../html/database.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Perform some basic validation
    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
        // Handle validation errors (e.g., display an error message)
        echo "All fields are required.";
    } elseif ($password !== $confirmPassword) {
        // Handle password mismatch
        echo "Password and Confirm Password do not match.";
    } else {
        // Hash the password (for security)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the database
        $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$hashedPassword')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Registration successful, redirect or display success message
            header("Location: sign-in.php");
            exit();
        } else {
            // Registration failed, handle the error (e.g., display an error message)
            echo "Registration failed. Please try again.";
        }
    }
} else {
    // Redirect or handle other cases (e.g., if someone tries to access the page directly without submitting the form)
    header("Location: index.php");
}
?>
