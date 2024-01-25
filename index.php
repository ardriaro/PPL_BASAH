<?php
// index.php

// Specify the file you want to redirect to
$redirectFile = 'html/homepage.php';

// Use the header function to redirect
header("Location: $redirectFile");
exit(); // Make sure to exit after sending the header to prevent further execution
?>