<?php

require '../connection.php';
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
        #myTable_wrapper{
            width:140%;
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
            
        </div>
        <div class="sidebar-menu">
            <ul>
            <li>
                    <a href="index.php">
                        <i class="fa-sharp fa-solid fa-house"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li >
                    <a href="manageStudent.php">
                        <i class="fa-solid fa-user-pen"></i>
                        <span>Students</span>
                    </a>
                </li>
                <li >
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
                <li>
                    <a href="manageNotice.php">
                        <i class="fa fa-sticky-note"></i>
                        <span>Notice</span>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
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

    <div class="main-content">


        <div class="table-cont" style="width: 55%; margin: 10px;    padding-top: 70px;">
        <div class="container my-4">
            <table class="table table-hover caption-top" id="myTable" style="width:140%">
 
                <caption>List of users</caption>
                <thead>

                    <tr>
                        <th scope="col">Sno.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone No.</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date/Time</th>
                        <th scope="col">Reason</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM `query`";
                    $result = mysqli_query($conn, $sql);
                    $sno = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                            $sno +=1;


                        echo "
                        <tr>
                            <td scope='row'>" . $sno . "</td>
                            <td scope='row'>" . $row['name'] . "</td>
                            <td scope='row'>" . $row['email'] . "</td>
                            <td scope='row'>" . $row['phone'] . "</td>
                            <td scope='row'>" . $row['address'] . "</td>
                            <td scope='row'>" . $row['date'] . "</td>
                            <td scope='row'>" . $row['reason'] . "</td>

                            <td scope='row'>
                            <button type='button' class='btn btn-sm btn-warning'>Close</button>
                            <button type='button' class='btn btn-sm btn-success'>closed</button>
                        </td>
                        </tr>";
                    }
                    ?>
                   
                </tbody>
            </table>
    </div>
    </div>
</body>

</html>
