<?php

require '../connection.php';
session_start();
$u = $_SESSION['username'];

$sql = "SELECT * FROM student where username = '$u'";
$run = mysqli_query($conn, $sql);
// var_dump($run);
$fetch = mysqli_fetch_assoc($run);
// var_dump($fetch);
$name = $fetch['name'];
// echo $name;

$sql2 = "SELECT * FROM res where name = '$name';";
$run1 = mysqli_query($conn, $sql2);
$fetch1 = mysqli_fetch_assoc($run1);
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
                        <span>Profile</span>
                    </a>
                </li>


                <li class="active">
                    <a href="#">
                        <i class="fa-solid fa-pen"></i>
                        <span>Result</span>
                    </a>
                </li>
                <li>
                    <a href="flagComplain.php">
                        <i class="fa-solid fa-comments"></i>
                        <span>Complains</span>
                    </a>
                </li>
                <li>
                    <a href="viewNotice.php">
                        <i class="fa fa-sticky-note"></i>
                        <span>Notice</span>
                    </a>
                </li>
                <li>
                    <a href="homework.php">
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


    <div class="table-con" style="width: 54%; margin-left: 250px; padding-top: 70px;">
        <div class="container my-4">
            <table class="table table-hover caption-top" id="myTable" style="width:140%">

                <caption>List of users</caption>
                <thead>
                    <!-- store subject id using class id of student in a variable  -->
                    <!-- or grades can be store in a particular table given by teacher -->
                    <tr>
                        
                        <th scope="col">Hindi</th>
                        <th scope="col">English</th>
                        <th scope="col">Maths</th>
                        <th scope="col">Science</th>
                        <th scope="col">Social Science</th>
                        <th scope="col">Computer</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        
                        <td scope='row'><?=$fetch1['mo1']?></td>
                        <td scope='row'><?=$fetch1['mo2']?></td>
                        <td scope='row'><?=$fetch1['mo3']?></td>
                        <td scope='row'><?=$fetch1['mo4']?></td>
                        <td scope='row'><?=$fetch1['mo5']?></td>
                        <td scope='row'><?=$fetch1['mo6']?></td>
                        <td scope='row'><?=$fetch1['mo1']+$fetch1['mo2']+$fetch1['mo3']+$fetch1['mo4']+$fetch1['mo5']+$fetch1['mo6']?></td>

                    </tr>
                </tbody>
            </table>

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