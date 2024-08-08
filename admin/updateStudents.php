<?php
require '../connection.php';
$admno=$_GET['admno'];

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
    $class= $_POST['class'];
    $gender= $_POST['inlineRadioOptions'];

    $sql = "UPDATE `student` SET `name`='$name',`class`='$class',`ph`='$ph',`gender`='$gender',`fname`='$fname',`mname`='$mname',`email`='$email',`address`='$address',`username`='$username',`lastname`='$lastname',`dob`='$dob',`pass`='$pass' WHERE admno=$admno";

    $run = mysqli_query($conn, $sql);
    if (!$run) {
        echo "Error while updating records";
    } else {
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
    }
    ?>

<!-- Redirecting to profile page -->
            <meta http-equiv="refresh" content="0; url = manageStudent.php" />
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
        
        #myTable_wrapper{
            width:140%;
        }
    </style>
</head>

<?php
 $sql = "SELECT * FROM `student` where admno=$admno";
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

    <main style="margin-left: 16%; margin-top: 4%;">
        
        <h4>Update Students</h4>
        <form action="updateStudents.php?admno=<?=$admno?>" method="post">
            <div class="row">
                <!-- Student photo div -->



                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="firstName">First Name</label>
                        <input value="<?=$row['name']?>" type="text" name="name" id="firstName" class="form-control form-control-lg" style="width:100%" />
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="lastName">Last Name</label>
                        <input value="<?=$row['lastname']?>" name="lastname" type="text" id="lastName" class="form-control form-control-lg" />
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline datepicker w-100">
                        <label for="birthdayDate" class="form-label">Date Of Birth</label>
                        <input value="<?=$row['dob']?>" type="date" class="form-control " name="dob" id="birthdayDate"
                            style="height: 48px; font-size: medium;">
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Gender: </h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                            value="female" checked />
                        <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                            value="male" />
                        <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                            value="other" />
                        <label class="form-check-label" for="otherGender">Other</label>
                    </div>

                </div>
            </div>
            <div class="row">

                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="father_name">Father's Name</label>
                        <input value="<?=$row['fname']?>" type="text" id="father_name" name="fname" class="form-control form-control-lg" style="width:100%" />
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="mother_name">Mother's Name</label>
                        <input value="<?=$row['mname']?>" type="text" id="mother_name" name="mname" class="form-control form-control-lg" />
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                        <label class="form-label" for="emailAddress">Email</label>
                        <input value="<?=$row['email']?>" type="email" id="emailAddress" name="email" class="form-control form-control-lg" />
                    </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                        <label class="form-label" for="phoneNumber">Phone Number</label>
                        <input value="<?=$row['ph']?>" type="tel" id="phoneNumber" name="ph" class="form-control form-control-lg" />
                    </div>

                </div>
            </div>
            <div style="margin-bottom:10px">
                <label class="form-label" for="address">Address</label>
                    <input type='text' value="<?=$row['address']?>" class="form-control" name="address" placeholder="" id="address" style="height:100px;"></textarea>

                </div>
            <div class="row">
                
                <div class="col">
                    <!-- Class in select by database using loop -->
                    <label class="form-label select-label">Choose Class</label>
                    <select class="select form-control-lg " name="class" style="font-size: 14px;">
                        <option value="1">Class</option>
                        <option value="2">Class1</option>
                    </select><br>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="admsnNo">Admission number</label>
                        <input readonly value="<?=$row['admno']?>" type="text" id="admsnNo" class="form-control form-control-lg" style="width:100%" />
                    </div>

                </div>

            </div>
            <div class="row">

                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="username">username</label>
                        <input value="<?=$row['username']?>" name="username" type="text" id="username" class="form-control form-control-lg" style="width:100%" />
                    </div>

                </div>
                <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <label class="form-label" for="password">Password</label>
                        <input value="<?=$row['pass']?>" name="pass" type="text" id="password" class="form-control form-control-lg" />
                    </div>

                </div>
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </main>


</body>

</html>