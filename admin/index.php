<!-- Fetching -->
<?php   
$servername = "localhost";
$username = "root";
$password = "";
$databse = "school_db";
$conn = mysqli_connect($servername,$username,$password,$databse);

$sql = "Select * from student;";
$res1 = mysqli_query($conn,$sql);
$abc1 = mysqli_num_rows($res1);
$s_no = 0;
while ($row = mysqli_fetch_assoc($res1)){
    $s_no = $s_no+1;
}
echo "<br>";

$sql = "Select * from teacher;";
$res2 = mysqli_query($conn,$sql);
$abc2 = mysqli_num_rows($res2);
$t_no = 0;
while ($row = mysqli_fetch_assoc($res2)){
    $t_no = $t_no+1;
}
echo "<br>";

$sql = "Select * from query;";
$res3 = mysqli_query($conn,$sql);
$abc3 = mysqli_num_rows($res3);
$q_no = 0;
while ($row = mysqli_fetch_assoc($res3)){
    $q_no = $q_no + 1;
}
echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
            <script src="https://kit.fontawesome.com/07c5373a02.js" crossorigin="anonymous"></script>
            <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
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
                    <a href="#" >
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

        

        <main>
            <h2 class="dash-title">Overview</h2>

            <div class="dash-cards">
                <div class="card-single">
                    <div class="card-body">
                        <i class="fa-solid fa-user-pen"></i>
                        <div>
                            <h5>Students</h5>
                            <h4><?php echo $s_no;?></h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="manage/students/manageStudent.php">View All</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <i class="fa-solid fa-chalkboard-user"></i>
                        <div>
                            <h5>Teachers</h5>
                            <h4><?php echo $t_no;?></h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View All</a>
                    </div>
                </div>

                <div class="card-single">
                    <div class="card-body">
                        <i class="fa-solid fa-clipboard-question"></i>
                        <div>
                            <h5>Queries</h5>
                            <h4><?php echo $q_no;?></h4>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="">View All</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>