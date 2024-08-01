<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RBSPS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/07c5373a02.js" crossorigin="anonymous"></script>
</head>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";

$conn = mysqli_connect($servername, $username, $password, $database);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    $date= $_POST['date'];
    $reason= $_POST['reason'];
 

    $sql = "INSERT INTO `query`(`name`, `email`, `phone`, `address`, `date`, `reason`) VALUES ('$name','$email','$phone', '$address','$date','$reason')";

    $run = mysqli_query($conn, $sql);
    if (!$run) {
        echo "Error while updating records";
    } else {
        echo "<script>alert('Your records has been updated successfully!!!')</script>";
    }
}
    ?>

<!-- Redirecting to profile page -->
        



<body>
    <section id="header">
        <a href="#"><img src="Logo-with-text.jpg" alt="" width="200px" height="100px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="admission.php">Admission</a></li>
                <li><a href="gallary.php">Gallery</a></li>
                <li><a class="active" href="#">Contact Us</a></li>
                <li><a href="loginlanding.php">Login</a></li>
            </ul>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <div>
            <h2>Contact Us</h2>
        </div>
    </section>

    <section id="c-main">
        <div id="c-form">
            <form action="contact.php" method="post">
                <h3>Query Form</h3>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="" name="name">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="PhoneNo">Phone No</label>
                    <input type="number" class="form-control" id="PhoneNo" name="phone">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="address">
                  </div>
                 
                    <div class="form-group">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" id="date" name="date">
           
                   
                  </div>
                 
                    <div class="form-group">
                      <label for="reason">Reason</label>
                      <textarea class="form-control" id="reason" name="reason"></textarea>

                   
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div id="c-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14157.649409187628!2d77.9313047!3d27.4875486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6dfe2f7ca359a9d6!2sShri%20R.B.Singh%20Public%20School!5e0!3m2!1sen!2sin!4v1672831139351!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <h4>Academic</h4>
            <a href="#">Information Sheets</a>
            <a href="#">Transfer Certificate</a>
            <a href="#">Awards and Achievements</a>
            <a href="#">Academic Calender</a>
            <a href="#">Syllabus</a>
        </div>
        <div class="col">
            <h4>Infrastructure</h4>
            <a href="#">About us</a>
            <a href="#">Library</a>
            <a href="#">Computer Lab</a>
            <a href="#">Sports</a>
            <a href="#">Transport</a>
        </div>
        <div class="col">
            <h4>Admission</h4>
            <a href="#">Admission Process</a>
            <a href="#">Fee Structure</a>
            <a href="#">Enquiry</a>
            <a href="#">Download Prospectus</a>
            <a href="#">FAQ's</a>
        </div>
        <div class="col">
            <h4>Get In Touch</h4>
            <div class="f-list">
                <p>If you have any query, You can Contact by any <br> following ways </p>
                <ul>
                    <li><i class="fa-solid fa-house"></i> &nbsp; Nasirpur, Sadabad, Hathras - 204101 <br> (U.P.) India
                    </li>
                    <li><i class="fa-solid fa-phone"></i> <a href="tel:+919761996622">+91 9761996622</a></li>
                    <li><i class="fa-solid fa-envelope"></i> <a href="mailto:drasmai@gmail.com">drasmai@gmail.com</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="copyright">
            <p>&copy; 2023 Shri R.B. Singh Public School | Developed by <a href="#"><Strong> Kratika Singh</Strong></a>
            </p>
        </div>
    </footer>


</body>

</html>