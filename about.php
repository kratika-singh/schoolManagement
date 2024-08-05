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
          <li><a href="#" class="nav__link active">Home</a></li>

          <li><a href="about.php" class="nav__link">About</a></li>
          <li><a href="admission.php" class="nav__link">Admission</a></li>
          <li><a href="contact.php" class="nav__link">Contact</a></li>

          <li><a href="gallary.php" class="nav__link">Gallery</a></li>

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

    <section id="page-header" class="about-header">
        <div>
            <h2>OverView</h2>
        </div>
    </section>

    <section style="margin: 40px 80px;">
        <div class="row"style=" display: flex;
        justify-content: center;">
            <div class="single-column col-md-5 col-sm-10">
                <h4>About School</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam saepe tenetur numquam eligendi facere autem dolorum a vel debitis,
                     corporis, quo facilis labore eaque architecto fugiat accusantium minus aliquam ipsa.
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit assumenda excepturi enim obcaecati vel pariatur commodi
                     debitis quod doloremque aperiam, ad necessitatibus itaque dignissimos optio ex fugiat nemo quas cum?
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid rerum ea dolore deserunt nihil fugiat iure, accusantium, 
                    reiciendis velit magni harum veniam dolor omnis earum dolorem incidunt temporibus ab ipsum.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam tempore at consequuntur voluptas eum ex dicta nam aperiam
                 doloremque ipsum amet, dolorum labore nisi nobis eligendi quae sequi ea cumque?</p>
            </div>

            <div class="single-column col-md-5 col-sm-10" style="background-image: url(history.jpg);">
            </div>
        </div>
    </section>

    <section id="facilities">
      <h2>OUR FACILITIES</h2>
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="lib.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Library</h5>
                <p class="card-text">School has a library that provides access to a variety of resources, including books, e-books, journals, and magazines. The library should be well-stocked and equipped with computers and internet access.</p>
              </div>
            </div>

            <div class="card">
              <img class="card-img-top" src="images/computerlab.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Computer Lab</h5>
                <p class="card-text">A Well-furnished and well-maintained computer lab provides students with access to technology and software that is necessary for learning and research.</p>
              </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="images/playground.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Playgrounds</h5>
                  <p class="card-text">The Lush-Green Schools's Playgrounds provide space for students to engage in physical activities and play, supporting their social and emotional development.</p>
                </div>
            </div>

            <!-- <div class="card">
              <img class="card-img-top" src="images/transportation.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Transportation</h5>
                <p class="card-text">The school provide transportation facilities of school vans to enable students to travel safely and efficiently to and from school.</p>
              </div>
            </div> -->

          </div>

    </section>
    

    <section id="footer">
    <div class="footer-container">
      <div class="sec f-aboutus">
        <h2>About us</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorum tempora praesentium quia
          obcaecati? Perferendis inventore delectus ipsum temporibus ea numquam. Quos eos nulla culpa ex, vero ad
          numquam autem!
        </p>
      </div>
      <div class="sec f-quick-links">
        <h2>Quick Links</h2>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Admission</a></li>
          <li><a href="#">Gallary</a></li>
          <li><a href="#">Features</a></li>
        </ul>
      </div>

      <div class="sec f-contact">
        <h2>Contact Info</h2>
        <ul class="info">
          <li>
            <span><i class="fa fa-map-marker"></i></span>
            <p>Nasirpur, Sadabad, Hathras  <br> (U.P.) India <br>204101</p>
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

    <div class="copyright">
            <p>&copy; 2024 Shri R.B. Singh Public School | Developed by <a href="https://kratika-singh.github.io/portfolio/" target="_blank"
            rel="noopener noreferrer"><Strong> Kratika Singh</Strong></a>
            </p>
        </div>

  </section>
       
    </footer>


</body>

</html>