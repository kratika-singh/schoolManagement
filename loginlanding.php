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
        <style>
            body {
  background-color: #F2F2F2;
  font-family: Arial, sans-serif;
}

.container {
  background-color: #FFFFFF;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
  margin: 50px auto;
  padding: 20px;
  text-align: center;
  width: 500px;
}

h1 {
  color: #333333;
}

.login-buttons {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
}

button {
  background-color: #000000;
  border: none;
  border-radius: 3px;
  color: white;
  cursor: pointer;
  font-size: 16px;
  padding: 10px 20px;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #000000;
}
        </style>
            </head>

<body>
    <section id="header">
        <a href="#"><img src="Logo-with-text.jpg" alt="" width="200px" height="100px"></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="admission.php">Admission</a></li>
                <li><a href="gallary.php">Gallery</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a class="active" href="#">Login</a></li>
            </ul>
        </div>
    </section>
    
    <section id="page-header" class="about-header">
        <div>
            <h2>Login</h2>
        </div>
    </section>
    <div class="container">
        <p>Please choose your role to login:</p>
        <div class="login-buttons">
          <a href="loginadmin.php"><button>Admin Login</button></a>
          <a href="loginteacher.php"><button >Teacher Login</button></a>
          <a href="loginstudent.php"><button>Student Login</button></a>
        </div>
      </div>
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
            <p>&copy; 2022 Shri R.B. Singh Public School | Developed by <a href="#"><Strong> Kratika Singh</Strong></a>
            </p>
        </div>
    </footer>

</body>
</html>
