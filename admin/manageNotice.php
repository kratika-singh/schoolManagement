<?php

require '../connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filename = $_FILES["upload"]["name"];
$tempname = $_FILES["upload"]["tmp_name"];

$folder = "images/".$filename;
move_uploaded_file($tempname, $folder);
    
    $description= $_POST['description'];
    

    $sql = "INSERT INTO `notice`(`description`, `path`) VALUES ('$description','$folder')";
    

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
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/07c5373a02.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <link rel="stylesheet" href="style.css">
    <style>
        #myTable_wrapper {
            width: 140%;
        }

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
                    <a href="manageStudent.php">
                        <i class="fa-solid fa-user-pen"></i>
                        <span>Students</span>
                    </a>
                </li>
                <li>
                    <a href="manageTeacher.php">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <span>Teachers</span>
                    </a>
                </li>
                <li>
                    <a href="manageSubject.php">
                        <i class="fa fa-book"></i>
                        <span>Subject</span>
                    </a>
                </li>
                <li>
                    <a href="editResult.php">
                        <i class="fa-solid fa-pen"></i>
                        <span>Result</span>
                    </a>
                </li>
                <li>
                    <a href="viewComplaints.php">
                        <i class="fa-solid fa-comments"></i>
                        <span>Complaints</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="fa fa-sticky-note"></i>
                        <span>Notice</span>
                    </a>
                </li>
                <li>
                    <a href="manageQuery.php">
                        <i class="fa-solid fa-clipboard-question"></i>
                        <span>Queries</span>
                    </a>
                </li>
                <li>
                    <a href="calender.php">
                        <i class="fa-regular fa-calendar-check"></i>
                        <span>Calender</span>
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

    <div class="main-content" >

        
        <div class="table-con" style="width: 54%; margin-left:30px; padding-top: 70px;">
            <h3>Add Notice</h3>
            <form action="manageNotice.php" method="post" enctype="multipart/form-data">
                <div>
                    <div style="margin-bottom:10px">
                        <label class="form-label" for="notice">Notice</label>
                        <textarea class="form-control" name="description" placeholder="" id="notice" style="height:100px;"></textarea>

                    </div>
                    <label for="uploadNotice">Upload File: </label>
                    <input type="file" name="upload" class="btn btn-sm btn-secondary" id="uploadNotice">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </form>
            <hr style="width:140%">
            <div class="container my-4">
                <h3>Notices</h3>

                <table class="table table-hover  caption-top" id="myTable">

                    <thead>
                        <tr>
                            <th scope="col">SNo</th>
                            <th scope="col">Date</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>


                    <?php
                    $sql = "SELECT * FROM `notice`";
                    $result = mysqli_query($conn, $sql);
                    $sno = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                            $sno +=1;


                        echo "
                        <tr>
                            <td scope='row'>" . $sno . "</td>
                            <td scope='row'>" . $row['date'] . "</td>
                            <td scope='row'>" . $row['description'] . "</td>
                            <td>
                            <button type='button' class='btn btn-sm btn-danger'>Download</button>
                            
                            </td>
                        </tr>";
                    }
                    ?>



                       
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>