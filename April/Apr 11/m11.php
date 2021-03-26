<?php
    $fName = $_GET["fName"];
    $lName = $_GET["lName"];
    $email = $_GET["email"];
    $job = $_GET["job"];
    $gender = $_GET["gender"];

    echo "Welcome ".$fName." ".$lName."<br>";
    echo "Email: ".$email."<br>";
    echo "Job: ".$job."<br>";
    echo "Gender: ".$gender."<br>";
?>