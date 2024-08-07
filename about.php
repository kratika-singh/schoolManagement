<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RBSPS</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="main-style.css">
  <script src="https://kit.fontawesome.com/07c5373a02.js" crossorigin="anonymous"></script>
</head>

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

          <li><a href="#" class="nav__link active">About</a></li>
          <li><a href="admission.php" class="nav__link">Admission</a></li>
          <li><a href="contact.php" class="nav__link">Contact</a></li>

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
    <h2>OverView</h2>
  </section>

  <section id="about-school">
    <h1>About School</h1>
    <div class="a-about">
      <div class="row1">
        <div class="left">
          <img src="images/about/about.jpg" alt="">
        </div>
        <div class="right">
          <div class="content">
          <p>Founded in 2008,Shri R.B. Singh Public School is a prominent institution affiliated with the Uttar Pradesh (UP) Board. It has rapidly established itself as a center of academic excellence and holistic development. The school offers a comprehensive curriculum that adheres to the UP Board's standards, focusing on core subjects such as mathematics, science, and languages. In addition to academic rigor, [School Name] places a strong emphasis on extracurricular activities, providing students with opportunities to explore their interests and talents beyond the classroom. The school boasts modern facilities and a dedicated team of educators committed to nurturing each student's intellectual, social, and emotional growth. By fostering a supportive and enriching environment, Shri R.B. Singh Public School aims to prepare students for future success and instill a strong sense of ethical values.</p>

          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="facilities">
    <h1>Our Facilities</h1>
    <div class="card-container">
      <div class="card1">
        <img src="images/about/lib.jpg" alt="Card image cap">
        <div class="card-content">
          <h5>Library</h5>
          <p class="card-text">School has a library that provides access to a variety of resources, including books,
            e-books, journals, and magazines. The library should be well-stocked and equipped with computers and
            internet access.</p>
        </div>
      </div>
      <div class="card1">
        <img src="images/about/computerlab.jpg" alt="Card image cap">
        <div class="card-content">
          <h5>Computer Lab</h5>
          <p class="card-text">A Well-furnished and well-maintained computer lab provides students with access to
            technology and software that is necessary for learning and research.</p>
        </div>
      </div>
      <div class="card1">
        <img src="images/about/playground.jpg" alt="Card image cap">
        <div class="card-content">
          <h5>Playgrounds</h5>
          <p class="card-text">The Lush-Green Schools's Playgrounds provide space for students to engage in physical
            activities and play, supporting their social and emotional development.</p>
        </div>
      </div>
      <div class="card1">
        <img class="card-img-top" src="images/about/transportation.jpg" alt="Card image cap">
        <div class="card-content">
          <h5>Transportation</h5>
          <p>The school provide transportation facilities of school vans to enable students to travel
            safely and efficiently to and from school.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="faculty-section">
    <div class="faculty-title">
      <h1>Our Faculty</h1>
    </div>
    <div class="faculty-cards">
      <div class="faculty-card">
        <div class="faculty-image">
          <img src="images/about/Faculty/DigambarSingh.jpg" alt="">
        </div>
        <div class="faculty-detail">
          <h3>Digambar Singh</h3>
          <p>Principal</p>
          <p>M.A., M.B.A. , B.Ed. </p>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-image">
          <img src="images/about/Faculty/ajayKumarSingh.jpg" alt="">
        </div>
        <div class="faculty-detail">
          <h3>Ajay Kumar Singh</h3>
          <p>Teacher</p>
          <p>B.A. , B.Ed. </p>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-image">
          <img src="images/about/Faculty/vimalPratapSingh.jpg" alt="">
        </div>
        <div class="faculty-detail">
          <h3>Vimal Prata Singh </h3>
          <p>Teacher</p>
          <p>B.Sc. , B.Ed. </p>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-image">
          <img src="images/about/Faculty/virendraSingh.jpeg" alt="">
        </div>
        <div class="faculty-detail">
          <h3>Virendra Singh</h3>
          <p>Teacher</p>
          <p>B.Sc. , B.Ed. </p>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-image">
          <img src="images/about/Faculty/mohanSingh.jpeg" alt="">
        </div>
        <div class="faculty-detail">
          <h3>Mohan Singh </h3>
          <p>Teacher</p>
          <p>M.A., B.Ed. </p>
        </div>
      </div>

      <div class="faculty-card">
        <div class="faculty-image">
          <img src="images/about/Faculty/sukhvirSingh.jpg" alt="">
        </div>
        <div class="faculty-detail">
          <h3>Sukhvir Singh</h3>
          <p>Teacher</p>
          <p>B.Sc. , B.Ed. </p>
        </div>
      </div>
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