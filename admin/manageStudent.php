<?php

$insert = false;
$update = false;
$delete = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry access denied" . mysqli_connect_error());
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
                <li class="active">
                    <a href="#">
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
                        <span>Complains</span>
                    </a>
                </li>
                <li>
                    <a href="manageNotice.php">
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

    <div class="table-con" style="width: 55%;
   margin-left: 250px;
    padding-top: 70px;">
        <div class="container my-4">
            <table class="table table-hover caption-top" id="myTable" style="width:140%">
            <?php
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Your note has been deleted successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    ?>
                <thead>

                    <tr>
                        <th scope="col">Sno.</th> 
                        <th scope="col">AdmissionNo</th>
                        <th scope="col">Name</th> 
                        <th scope="col">Gender</th>
                        <th scope="col">Father's Name</th>
                        <th scope="col">Mother's Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone No.</th> 
                        <th scope="col">Class</th> 
                        <th scope="col">Address</th>
                        <th scope="col">username</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `student`";
                    $result = mysqli_query($conn, $sql);
                    $sno = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                            $sno +=1;


                        echo "
                        <tr>
                            <td scope='row'>" . $sno . "</td>
                            <td scope='row'>" . $row['admno'] . "</td>
                            <td scope='row'>" . $row['name'] . "</td>
                            <td scope='row'>" . $row['gender'] . "</td>
                            <td scope='row'>" . $row['fname'] . "</td>
                            <td scope='row'>" . $row['mname'] . "</td>
                            <td scope='row'>" . $row['email'] . "</td>
                            <td scope='row'>" . $row['ph'] . "</td>
                            <td scope='row'>" . $row['class'] . "</td>
                            <td scope='row'>" . $row['address'] . "</td>
                            <td scope='row'>" . $row['username'] . "</td>
                            <td style='display: flex; justify-content: space-evenly;'>
                            
                            <a href = 'updateStudents.php?admno=".$row['admno']."'><button class='edit btn btn-sm btn-primary' >Edit</button>  </a> <hr>
                            <form action='del.php?admno=".$row['admno']."' method='post'>
                            <button class='delete btn btn-sm btn-primary' id=d" . $row['admno'] . ">Delete</button>                       
</form>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary"><a href="addStudent.php"
                    style="list-style: none; color: white; text-decoration: none;">Add Student</a></button>
        </div>
    </div>

    <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>