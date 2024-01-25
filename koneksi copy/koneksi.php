<?php
    $con = mysqli_connect("localhost", "root", "", "basah");

    if(mysqli_connect_errno()){
        echo "Failed to Connect Mysql : " . mysqli_connect_error();
        exit();
    }
?>