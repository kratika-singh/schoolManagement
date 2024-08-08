<?php

require '../connection.php';
session_start();
$user = $_SESSION['username'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $toWho= $_POST['toWho'];
    $description= $_POST['description'];
    $des= $_POST['des'];
    
    

    $sql = "INSERT INTO `complain`(`toWho`, `byWho`, `description`, `des`) VALUES ('$toWho', '$user', '$description', '$des')";
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
                        <span>Profile</span>
                    </a>
                </li>


                <li>
                    <a href="viewResult.php">
                        <i class="fa-solid fa-pen"></i>
                        <span>Result</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="fa-solid fa-comments"></i>
                        <span>Complaints</span>
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

    
    

    <div class="table-con" style="width: 54%; margin-left:250px; padding-top: 70px;">
        <h3>Register a Complain</h3>
        <form action="flagComplain.php" method="post">
            <div class="form-outline">
                <label class="form-label" for="to">To</label>
                <input type="text" id="to" name="toWho" class="form-control form-control-lg" />
            </div>
            <div class="form-outline">
                <label class="form-label" for="designation">Designation</label>
                <input type="text" id="designation" name="des" class="form-control form-control-lg" />
            </div>
            <div style="margin-bottom:10px">
                <label class="form-label" for="desc">Description</label>
                <textarea class="form-control" name="description" placeholder="" id="desc" style="height:100px;"></textarea>

            </div>
            <button class='btn btn-sm btn-primary'>Register</button>
        </form>
        <hr>
        <div class="container my-4">
            <!-- if there is any previous complains only then this block will execute -->
            <caption>Previous Complains</caption>

            <table class="table table-hover caption-top" id="myTable" style="width:140%">

                <thead>
                    <tr>
                        <th scope="col">To</th>
                        <th scope="col">Designation</th>                        
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>

                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM `complain`";
                    $result = mysqli_query($conn, $sql);
                    $sno = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                            $sno +=1;


                        echo "
                        <tr>
                            
                            <td scope='row'>" . $row['toWho'] . "</td>
                            <td scope='row'>" . $row['des'] . "</td>
                            <td scope='row'>" . $row['description'] . "</td>
                            <td scope='row'>" . $row['whenDid'] . "</td>
                            <td scope='row'>
                             <button type='button' class='btn btn-sm btn-warning'>Registered</button>

                            </td>
                        </tr>";
                    }
                    ?>

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