<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";

$conn = mysqli_connect($servername, $username, $password, $database);

$admno=$_GET['admno'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "DELETE FROM `student` WHERE admno=$admno";

    $run = mysqli_query($conn, $sql);
    if (!$run) {
        echo "Error while deleting records";
    } else {
        echo "<script>alert('Your records has been deleted successfully!!!')</script>";
    }
    ?>

<!-- Redirecting to profile page -->
            <meta http-equiv="refresh" content="0; url = manageStudent.php" />
    <?php
        }
    
    ?>

