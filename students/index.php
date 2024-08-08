<?php

require '../connection.php';
// $user = $_GET['username'];
session_start();


$user = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/07c5373a02.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script>
        $(document).ready(function() {
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
    </style>
</head>

<body>

    <input type="checkbox" id="sidebar-toggle">
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span>RBSPS</span>
            </h3>
            <!-- <label for="sidebar-toggle"><i class="fa-solid fa-bars"></i></label> -->

        </div>
        <div class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="#">
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
                <li>
                    <a href="flagComplain.php">
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

    <?php
    $sql = "SELECT * FROM student WHERE username='$user'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result)

    ?>


    <div class="main-content">


        <main>
            <h2 class="dash-title" style="margin-top: 30px;">Personal Details</h2>
            <form>
                <div class="row">
                    <!-- Student photo div -->
                    <img src="<?= $row['path'] ?>" alt="profile" style="border: 1px solid #c9c9c9; width: 12.5rem; height: 11.5rem; border-radius: 100%; background: white; padding: 0;">

                    <div class="col" style="    margin-top: 25px; width: 75%">
                        <div class="col-md-6 mb-4">
                            <!-- details can be saved in a variable and can be echoed using the "value" tag in input -->
                            <div class="form-outline">
                                <label class="form-label" for="firstName">First Name</label>
                                <input type="text" id="firstName" class="form-control form-control-lg" style="width:100%; font-size: 16px;" disabled value="<?= $row['name'] ?>" />
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input type="text" id="lastName" class="form-control form-control-lg" value="<?= $row['lastname'] ?>" disabled style="font-size: 16px;" />
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">

                        <div class="form-outline datepicker w-100">
                            <label for="birthdayDate" class="form-label">Date Of Birth</label>
                            <input type="text" class="form-control " id="birthdayDate" disabled style="height: 48px; font-size: medium;" value="<?= $row['dob'] ?>">
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <h6 class="mb-2 pb-1">Gender: </h6>
                        <?php
                        $gend = $row['gender'];
                        
                        ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="female" disabled <?php if($gend=='female'){echo 'checked';}?> />
                            <label class="form-check-label" for="femaleGender">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="male" disabled <?php if($gend=='male'){echo 'checked';}?> />
                            <label class="form-check-label" for="maleGender">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" disabled <?php if($gend=='other'){echo 'checked';}?> />
                            <label class="form-check-label" for="otherGender">Other</label>
                        </div>

                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="father_name">Father's Name</label>
                            <input type="text" id="father_name" class="form-control form-control-lg" style="width:100%; font-size: 16px;" value="<?= $row['fname'] ?>" disabled />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="lastName">Mother's Name</label>
                            <input type="text" id="mother_name" class="form-control form-control-lg" disabled style="font-size: 16px;" value="<?= $row['mname'] ?>" />
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <label class="form-label" for="emailAddress">Email</label>
                            <input type="email" id="emailAddress" class="form-control form-control-lg" disabled style="font-size: 16px;" value="<?= $row['email'] ?>" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <input type="tel" id="phoneNumber" class="form-control form-control-lg" disabled style="font-size: 16px;" value="<?= $row['ph'] ?>" />
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div style="margin-bottom:10px">
                        <label class="form-label" for="address">Address</label>
                        <textarea class="form-control" readonly placeholder="" id="address" style="height:100px;" disabled style="font-size: 16px;"><?= $row['address'] ?></textarea>

                    </div>
                    <div class="col-12">
                        <!-- Class in select by database using loop -->
                        <label class="form-label select-label">Choose Class</label>
                        <select class="select form-control-lg " style="font-size: 14px;" disabled>
                            <option value="1">Class</option>
                            <option value="2">Class1</option>
                        </select><br>

                    </div>
                </div>

                <div class="mt-4 pt-2">
                    <a href="editDetails.php?username=<?= $row['username'] ?>"><button class="btn btn-primary" type="button" value="Edit">Edit</button></a>
                </div>
                <hr>

            </form>

        </main>
    </div>
</body>

</html>