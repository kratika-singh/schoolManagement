<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";

$conn = mysqli_connect($servername, $username, $password, $database);
$sid = $_GET['sid'];

// $sql1 = "SELECT * FROM `student` where `sid`=$sid;";
// $fetch = mysqli_query($conn, $sql1);
// $ans = mysqli_fetch_assoc($fetch);
// $name = $ans['name'];

if($_SERVER['REQUEST_METHOD']=='POST'){
    $mo1=$_POST['mo1'];
    $mo2=$_POST['mo2'];
    $mo3=$_POST['mo3'];
    $mo4=$_POST['mo4'];
    $mo5=$_POST['mo5'];
    $mo6=$_POST['mo6'];
    $fm1=$_POST['fm1'];
    $fm2=$_POST['fm2'];
    $fm3=$_POST['fm3'];
    $fm4=$_POST['fm4'];
    $fm5=$_POST['fm5'];
    $fm6=$_POST['fm6'];
    $sql = "INSERT INTO `res` (`sid`, `mo1`, `mo2`, `mo3`, `mo4`, `mo5`, `mo6`, `fm1`, `fm2`, `fm3`, `fm4`, `fm5`, `fm6`) VALUES ('$sid', '$mo1', '$mo2', '$mo3', '$mo4', '$mo5', '$mo6', '$fm1', '$fm2', '$fm3', '$fm4', '$fm5', '$fm6');";
    $run = mysqli_query($conn, $sql);
    if (!$run) {
        echo "Error while updating records";
    } else {
        echo "<script>alert('Result has been updated successfully!!!')</script>";
    }
    ?>

<!-- Redirecting to profile page -->
            <meta http-equiv="refresh" content="0; url = editResult.php" />
    <?php
        }
    
    ?>
