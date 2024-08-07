<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RBSPS</title>

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css'>

    <link rel="stylesheet" href="main-style.css">
    <link rel="stylesheet" href="gallery.css" />

    <script src="https://kit.fontawesome.com/07c5373a02.js" crossorigin="anonymous"></script>
    <script>
        window.console = window.console || function (t) { };
    </script>


</head>

<body translate="no">
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
          <li><a href="index.php" class="nav__link">Home</a></li>
          <li><a href="about.php" class="nav__link">About</a></li>
          <li><a href="admission.php" class="nav__link ">Admission</a></li>
          <li><a href="contact.php" class="nav__link">Contact</a></li>
          <li><a href="#" class="nav__link active">Gallery</a></li>

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
    <h2>Gallery</h2>
  </section>
    <section class="gallery_sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="images/gallery/gallary1.jpg" data-fancybox="gallery">
                        <img src="images/gallery/gallary1.jpg" />
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="images/gallery/gallary2.jpg" data-fancybox="gallery">
                        <img src="images/gallery/gallary2.jpg" />
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="images/gallery/gallary3.jpg" data-fancybox="gallery">
                        <img src="images/gallery/gallary3.jpg" />
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="images/gallery/gallary4.jpg" data-fancybox="gallery">
                        <img src="images/gallery/gallary4.jpg" />
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="images/gallery/gallary1.jpg" data-fancybox="gallery">
                        <img src="images/home/hero1.jpg" />
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="images/gallery/gallary2.jpg" data-fancybox="gallery">
                        <img src="images/about/lib.jpg" />
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="images/gallery/gallary3.jpg" data-fancybox="gallery">
                        <img src="images/home/hero2.jpg" />
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="images/gallery/gallary4.jpg" data-fancybox="gallery">
                        <img src="images/home/hero3.jpg" />
                    </a>
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


    <script
        src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

    <script src='https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js'></script>
    <script id="rendered-js">
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>


</html>