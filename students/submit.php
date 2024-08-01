<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";

$conn = mysqli_connect($servername, $username, $password, $database);
// $user = $_GET['username'];
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $filename = $_FILES["upload"]["name"];
$tempname = $_FILES["upload"]["tmp_name"];

$folder = "../images/".$filename;
move_uploaded_file($tempname, $folder);

    

    $sql = "UPDATE `homework` SET `paths`='$folder' WHERE id='$id'";
    // var_dump($sql);
    $run = mysqli_query($conn, $sql);
    if (!$run) {
        echo "Error while updating records";
    } else {
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
    }
    ?>

<!-- Redirecting to profile page -->
            <meta http-equiv="refresh" content="0; url = homework.php" />
    <?php
        }
    
    ?>