<?php

require '../connection.php';
$username=$_GET['username'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name= $_POST['name'];
    $lastname= $_POST['lastname'];
    $dob= $_POST['dob'];
    $fname= $_POST['fname'];
    $mname= $_POST['mname'];
    $address= $_POST['address'];
    $ph= $_POST['ph'];
    $email= $_POST['email'];
    $username= $_POST['username'];
    $pass= $_POST['pass'];
    $qual= $_POST['qual'];
    $gender= $_POST['inlineRadioOptions'];

    $sql = "UPDATE `teacher` SET `name`='$name',`qual`='$qual',`ph`='$ph',`gender`='$gender',`fname`='$fname',`mname`='$mname',`email`='$email',`address`='$address',`lastname`='$lastname',`dob`='$dob',`pass`='$pass' WHERE username='$username'";

    $run = mysqli_query($conn, $sql);
    if (!$run) {
        echo "Error while updating records";
    } else {
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
    }
    ?>

<!-- Redirecting to profile page -->
            <meta http-equiv="refresh" content="0; url = manageTeacher.php" />
    <?php
        }
    
    ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/07c5373a02.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        form input {
            font-size: 1rem;
            font-weight: 300px;
        }

        .sidebar ul {
            padding-left: 0;
        }

        .sidebar a {
            text-decoration: none;
        }
    </style>
</head>
<?php
 $sql = "SELECT * FROM `teacher` where username='$username'";
 $result = mysqli_query($conn, $sql);
 
 $row = mysqli_fetch_assoc($result);
        //  echo $row['address'];
?>
<body>
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
                <li class="active">
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

    <div class="main-content">

        <header>
            <div class="search-wrapper">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="search" name="" id="" placeholder="Search">
            </div>

            <div class="social-icons">
                <i class="fa-solid fa-bell"></i>
                <i class="fa-solid fa-message"></i>
                <div></div>
            </div>
        </header>
    </div>

    <main style="margin-left: 16%;">
        <?php
        //     if ($insert) {
        //         echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        //     <strong>Success!</strong> Your record has been saved.
        //     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        //   </div>";
        //     }
        ?>
        <h4>Add Students</h4>
        <form action="updateTeacher.php?username=<?=$username?>" method="post">
            <div class="row">
                <!-- Student photo div -->



                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="firstName">First Name</label>
                        <input name="name" value="<?=$row['name']?>" type="text" id="firstName" class="form-control form-control-lg" style="width:100%" />
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="lastName">Last Name</label>
                        <input name="lastname" value="<?=$row['lastname']?>" type="text" id="lastName" class="form-control form-control-lg" />
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
                            name="" value="option1" checked />
                        <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            name="" value="option2" />
                        <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            name="" value="option3" />
                        <label class="form-check-label" for="otherGender">Other</label>
                    </div>

                </div>
            </div>
            <div class="row">

                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="father_name">Father's Name</label>
                        <input name="fname" value="<?=$row['fname']?>" type="text" id="father_name" class="form-control form-control-lg" style="width:100%" />
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="mother_Name">Mother's Name</label>
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
            <div style="margin-bottom:10px">
                <label class="form-label" for="address">Address</label>
                <input type="text" name="address" value="<?=$row['address']?>" class="form-control" placeholder="" id="address" style="height:100px;"></textarea>

            </div>
            <div class="row">

                <div class="col">
                    <!-- Class in select by database using loop -->
                    <label class="form-label select-label">Choose Qualification: </label>
                    <select class="select form-control-lg " name="qual" style="font-size: 14px;">
                        <option name="" value="1">Graduate</option>
                        <option name="" value="2">Postgraduate</option>
                    </select><br>

                </div>

            </div>
            <div class="row">

                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="username">username</label>
                        <input  readonly name="username" value="<?=$row['username']?>" type="text" id="username" class="form-control form-control-lg" style="width:100%" />
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="password">Password</label>
                        <input name="pass" value="<?=$row['pass']?>" type="text" id="password" class="form-control form-control-lg" />
                    </div>

                </div>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </main>


</body>

</html>