<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RBSPS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main-style.css">
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
<header class="header">
    <nav class="nav nav-container">
      <div class="nav__data">
        <a href="#" class="nav__logo">
          <img src="images/Logo/Logo-with-text.jpg" alt="" />
        </a>

        <div class="nav__toggle" id="nav-toggle">
          <i class="fa-solid fa-bars nav__burger"></i>
          <i class="fa-solid fa-x nav__close"></i>
        </div>
      </div>

      <!--=============== NAV MENU ===============-->
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li><a href="index.php" class="nav__link ">Home</a></li>

          <li><a href="about.php" class="nav__link ">About</a></li>
          <li><a href="admission.php" class="nav__link">Admission</a></li>
          <li><a href="contact.php" class="nav__link active">Contact</a></li>

          <li><a href="gallery.php" class="nav__link">Gallery</a></li>

          <!--=============== DROPDOWN 2 ===============-->
          <li class="dropdown__item">
            <div class="nav__link">
              Login <i class="fa-solid fa-angle-down dropdown__arrow"></i>
            </div>

            <ul class="dropdown__menu">
              <li>
                <a href="loginstudent.php" class="dropdown__link"> Student </a>
              </li>

              <li>
                <a href="loginteacher.php" class="dropdown__link"> Teacher </a>
              </li>

              <li>
                <a href="loginadmin.php" class="dropdown__link"> Admin </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <div id="space">
  </div>

  <section id="a-img">
    <h2>Contact us</h2>
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

    <section id="footer">
    <div class="footer-container">
      <div class="sec f-aboutus">
        <h2>About us</h2>
        <p>
        Founded in 2008, Shri R. B. Singh Public School, affiliated with the UP Board, offers a balanced curriculum and holistic development. It focuses on academic excellence and extracurricular growth in a supportive environment.

        </p>
      </div>
      <div class="sec f-quick-links">
        <h2>Quick Links</h2>
        <ul>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="admission.php">Admission</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="index.php#features">Features</a></li>
        </ul>
      </div>

      <div class="sec f-contact">
        <h2>Contact Info</h2>
        <ul class="info">
          <li>
            <span><i class="fa fa-map-marker"></i></span>
            <p>Nasirpur, Sadabad, Hathras <br> (U.P.) India <br>204101</p>
          </li>
          <li>
            <span><i class="fa fa-phone"></i></span>
            <p><a href="tel:+919761996622">+91 9761996622</a></p>
          </li>
          <li>
            <span><i class="fa-solid fa-envelope"></i></span>
            <p>
              <a href="mailto:drasmai@gmail.com">drasmai@gmail.com</a>
            </p>
          </li>
        </ul>
      </div>
    </div>

  </section>
  <div class="copyright">
    <p>&copy; 2024 Shri R.B. Singh Public School | Developed by <a href="https://kratika-singh.github.io/portfolio/"
        target="_blank" rel="noopener noreferrer"><Strong> Kratika Singh</Strong></a>
    </p>
  </div>

  <script>
    const showMenu = (toggleId, navId) => {
      const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId);

      toggle.addEventListener("click", () => {
        // Add show-menu class to nav menu
        nav.classList.toggle("show-menu");

        // Add show-icon to show and hide the menu icon
        toggle.classList.toggle("show-icon");
      });
    };

    showMenu("nav-toggle", "nav-menu");
  </script>

</body>

</html>