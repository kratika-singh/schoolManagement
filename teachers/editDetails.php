<!-- todo -->

<?php

require '../connection.php';
$user = $_GET['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $filename = $_FILES["upload"]["name"];
$tempname = $_FILES["upload"]["tmp_name"];

$folder = "../images/simg/".$filename;
move_uploaded_file($tempname, $folder);


    $name= $_POST['name'];
    $lastname= $_POST['lastname'];
    $dob= $_POST['dob'];
    $gender= $_POST['inlineRadioOptions'];
    $fname= $_POST['fname'];
    $mname= $_POST['mname'];
    $email= $_POST['email'];
    $ph= $_POST['ph'];
    $address= $_POST['address'];
    $class= $_POST['class'];
    

    
    

    $sql = "UPDATE `teacher` SET `name`='$name', `qual`='$class', `ph`='$ph', `gender`='$gender', `fname`='$fname', `mname`='$mname', `email`='$email', `address`='$address', `lastname`='$lastname', `dob`='$dob', `path`='$folder' WHERE username='$user'";
    // var_dump($sql);
    $run = mysqli_query($conn, $sql);
    if (!$run) {
        echo "Error while updating records";
    } else {
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
    }
    ?>

<!-- Redirecting to profile page -->
            <meta http-equiv="refresh" content="0; url = index.php" />
    <?php
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
<?php
$sql = "SELECT * FROM teacher WHERE username='$user'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result)

?>
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
                    <a href="editResult.php">
                        <i class="fa-solid fa-pen"></i>
                        <span>Result</span>
                    </a>
                </li>
                <li>
                    <a href="viewNotice.php">
                        <i class="fa fa-sticky-note"></i>
                        <span>Notice</span>
                    </a>
                </li>
                <li>
                    <a href="assignHomework.php">
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

    <div class="main-content">


        <main>
            <h2 class="dash-title" style="margin-top: 30px;">Personal Details</h2>
            <form action="editDetails.php?username=<?=$row['username']?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <!-- Student photo div -->
                    <div class="col">
                    <img src="<?=$row['path']?>" alt="profile" style="border: 1px solid #c9c9c9; width: 12.5rem; height: 11.5rem; border-radius: 100%; background: white; padding: 0;" >

                    <input type="file" name="upload" id="">
                    </div>
                    

                    <div class="col" style="    margin-top: 25px; width: 75%">
                        <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <label class="form-label" for="firstName">First Name</label>
                                <input name="name" value="<?=$row['name']?>" type="text" id="firstName" class="form-control form-control-lg"
                                    style="width:100%" />
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">

                            <div class="form-outline">
                                <label class="form-label" for="lastName">Last Name</label>
                                <input name="lastname" value="<?=$row['lastname']?>" type="text" id="lastName" class="form-control form-control-lg" />
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">

                        <div class="form-outline datepicker w-100">
                            <label for="birthdayDate" class="form-label">Date Of Birth</label>
                            <input name="dob" value="<?=$row['dob']?>" type="date" class="form-control " id="birthdayDate"
                                style="height: 48px; font-size: medium;">
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <h6 class="mb-2 pb-1">Gender: </h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                                value="option1" checked />
                            <label class="form-check-label" for="femaleGender">Female</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                                value="option2" />
                            <label class="form-check-label" for="maleGender">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                                value="option3" />
                            <label class="form-check-label" for="otherGender">Other</label>
                        </div>

                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="father_name">Father's Name</label>
                            <input  name="fname" value="<?=$row['fname']?>" type="text" id="father_name" class="form-control form-control-lg"
                                style="width:100%" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <label class="form-label" for="lastName">Mother's Name</label>
                            <input name="mname" value="<?=$row['mname']?>" type="text" id="mother_name" class="form-control form-control-lg" />
                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <label class="form-label" for="emailAddress">Email</label>
                            <input name="email" value="<?=$row['email']?>" type="email" id="emailAddress" class="form-control form-control-lg" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <label class="form-label" for="phoneNumber">Phone Number</label>
                            <input name="ph" value="<?=$row['ph']?>" type="tel" id="phoneNumber" class="form-control form-control-lg" />
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div style="margin-bottom:10px">
                        <label class="form-label" for="address">Address</label>
                        <input type="text" name="address" value="<?=$row['address']?>" class="form-control" placeholder="" id="address" style="height:100px;"></textarea>

                    </div>
                    <div class="col-12">
                        <!-- Class in select by database using loop -->
                        <label class="form-label select-label">Choose Qualification</label>
                        <select name="class" class="select form-control-lg " style="font-size: 14px;">
                            <option value="Graduate">Graduate</option>
                            <option value="Postgraduate">Postgraduate</option>
                        </select><br>

                    </div>
                </div>

                <div class="mt-4 pt-2">
                    <input class="btn btn-primary" type="submit" value="Submit" />
                </div>

            </form>

        </main>
    </div>
</body>

</html>