<!-- todo -->



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
        
        #myTable_wrapper{
            width:140%;
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
                <li class="active">
                    <a href="#">
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


    <div class="table-con" style="width: 54%; margin-left: 250px; padding-top: 70px;">
    <form action="">
    <div class="col">
                    <!-- Class in select by database using loop -->
                    <label class="form-label select-label">Choose Class</label>
                    <select class="select form-control-lg " style="font-size: 14px; margin-right: 38px;">
                        <option value="1">Class1</option>
                        <option value="2">Class2</option>
                    </select>

                    <label class="form-label select-label">Choose Exam: </label>
                    <select class="select form-control-lg " style="font-size: 14px; margin-right: 38px;">
                        <option value="1">Mid term</option>
                        <option value="2">P.A.</option>
                    </select>
                    <button type="button" class="btn btn-sm btn-success">View</button>
                </div>
              
    </form>

        <div class="container my-4">
            <table class="table table-hover  caption-top" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">SNo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Subject 1</th>
                        <th scope="col">Subject 2</th>
                        <th scope="col">Subject 3</th>
                        <th scope="col">Subject 4</th>
                        <th scope="col">Subject 5</th>
                        <th scope="col">Subject 6</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td scope='row'>1</td>
                        <td scope='row'>sdfg</td>
                        <td scope='row'>
                            <input type="number" name="" id="marksObtain1" style="width: 50px; border-radius: 7px;">/
                            <input type="number" name="" id="maxMarks1" style="width: 50px; border-radius: 7px;">
                        </td>
                        <td scope='row'>
                            <input type="number" name="" id="marksObtain1" style="width: 50px; border-radius: 7px;">/
                            <input type="number" name="" id="maxMarks1" style="width: 50px; border-radius: 7px;">
                        </td>
                        <td scope='row'>
                            <input type="number" name="" id="marksObtain1" style="width: 50px; border-radius: 7px;">/
                            <input type="number" name="" id="maxMarks1" style="width: 50px; border-radius: 7px;">
                        </td>
                        <td scope='row'>
                            <input type="number" name="" id="marksObtain1" style="width: 50px; border-radius: 7px;">/
                            <input type="number" name="" id="maxMarks1" style="width: 50px; border-radius: 7px;">
                        </td>
                        <td scope='row'>
                            <input type="number" name="" id="marksObtain1" style="width: 50px; border-radius: 7px;">/
                            <input type="number" name="" id="maxMarks1" style="width: 50px; border-radius: 7px;">
                        </td>
                        <td scope='row'>
                            <input type="number" name="" id="marksObtain1" style="width: 50px; border-radius: 7px;">/
                            <input type="number" name="" id="maxMarks1" style="width: 50px; border-radius: 7px;">
                        </td>

                        <td scope='row'>
                            <button type="button" class="btn btn-sm btn-warning">Save</button>
                            <button type="button" class="btn btn-sm btn-success">Saved</button>
                        </td>

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