<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";

$conn = mysqli_connect($servername, $username, $password, $database);
// $user = $_GET['username'];
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $filename = $_FILES["upload"]["name"];
$tempname = $_FILES["upload"]["tmp_name"];

$folder = "../images/".$filename;
move_uploaded_file($tempname, $folder);


    $description= $_POST['description'];
    $class= $_POST['class'];
    $sub= $_POST['sub'];
    

    

    $sql = "INSERT INTO `homework` (`class`, `description`, `sub`, `path`) VALUES ('$class', '$description', '$sub', '$folder');";
    // var_dump($sql);
    $run = mysqli_query($conn, $sql);
    if (!$run) {
        echo "Error while updating records";
    } else {
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
    }
}
    ?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/07c5373a02.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <style>
        .sidebar ul {
            padding-left: 0;
        }

        .sidebar a {
            text-decoration: none;
        }
    </style>

</head>

<body>

    <!-- <input type="checkbox" id="sidebar-toggle"> -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span>RBSPS</span>
            </h3>
            <!-- <label for="sidebar-toggle"><i class="fa-solid fa-bars"></i></label> -->

        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fa-sharp fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                </li>


                <li>
                    <a href="editResult.php">
                        <i class="fa-solid fa-pen"></i>
                        <span>Result</span>
                    </a>
                </li>
                <li >
                    <a href="viewNotice.php">
                        <i class="fa fa-sticky-note"></i>
                        <span>Notice</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>HomeWork</span>
                    </a>
                </li>
                <li>
                    <a href="changePassword.php">
                        <i class="fa-solid fa-wrench"></i>
                        <span>Change Password</span>
                    </a>
                </li>
                
                <li>
                    <a href="logout.php">
                        <i class="fa-solid fa-gear"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="table-con" style="width: 54%;  margin: auto; padding-top: 70px;">

        <div class="container my-4">
            <h3>Add Homework</h3>
            <form action="assignHomework.php" method="post" enctype="multipart/form-data">

            <div class="row">
                
                <div class="col">
                    <!-- Class in select by database using loop -->
                    <label class="form-label select-label">Choose Class:</label><br>
                    <select class="select form-control-lg " name="class" style="font-size: 14px;">
                        <option value="1">Class</option>
                        <option value="2">Class1</option>
                    </select><br>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="subject">Subject</label>
                        <input type="text" name="sub" id="subject" class="form-control form-control-lg" style="width:100%" />
                    </div>
                    

                </div>
                <div class="col" style="margin:auto;">
                <input type="file" name="upload" id="homeworkFile">
                </div>
                

            </div>
            <div style="margin-bottom:10px">
                <label class="form-label" for="desc">Description</label>
                    <textarea name="description" class="form-control" placeholder="" id="desc" style="height:100px;"></textarea>

                </div>
            <button type="submit" class="btn btn-primary"> Submit</button>
            
        </form><a href="viewHomework.php"><button  class="btn btn-danger" style="margin-top: 10px;">View</button></a>
           

            

        </div>
    </div>

    <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script>

    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->

</body>

</html>