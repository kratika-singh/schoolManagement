<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";

$conn = mysqli_connect($servername, $username, $password, $database);

$username=$_GET['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "DELETE FROM `teacher` WHERE username='$username'";

    $run = mysqli_query($conn, $sql);
    if (!$run) {
        echo "Error while deleting records";
    } else {
        echo "<script>alert('Your records has been deleted successfully!!!')</script>";
    }
    ?>

<!-- Redirecting to profile page -->
            <meta http-equiv="refresh" content="0; url = manageTeacher.php" />
    <?php
        }
    
    ?>

