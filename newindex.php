<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main-style.css" />
    <script
      src="https://kit.fontawesome.com/07c5373a02.js"
      crossorigin="anonymous"
    ></script>
    <!-- CSS for full calender -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />
<!-- JS for jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JS for full calender -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
  </head>
  <body>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/hi_IN/sdk.js#xfbml=1&version=v16.0"
        nonce="nRs2vRYH"></script>

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
            <li><a href="#" class="nav__link">Home</a></li>

            <li><a href="#" class="nav__link">About</a></li>
            <li><a href="#" class="nav__link">Admission</a></li>
            <li><a href="#" class="nav__link">Contact</a></li>

            <li><a href="#" class="nav__link">Gallery</a></li>

            <!--=============== DROPDOWN 2 ===============-->
            <li class="dropdown__item">
              <div class="nav__link">
                Login <i class="fa-solid fa-angle-down dropdown__arrow"></i>
              </div>

              <ul class="dropdown__menu">
                <li>
                  <a href="#" class="dropdown__link"> Student </a>
                </li>

                <li>
                  <a href="#" class="dropdown__link"> Teacher </a>
                </li>

                <li>
                  <a href="#" class="dropdown__link"> Admin </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section id="hero">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="d-block w-100"
              src="images/home/hero1.jpg"
              alt="First slide"
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Learning Today, Leading Tomorrow</h5>
                <p>We prepare our students to become the leaders of tomorrow through a comprehensive and holistic education. Our commitment to excellence ensures that each child reaches their full potential.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="images/home/hero2.jpg"
              alt="Second slide"
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Where Every Child Matters</h5>
                <p>We believe that every student is unique and deserves an education tailored to their individual needs. Our inclusive approach ensures that all children thrive academically and personally.
                </p>
              </div>
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="images/home/hero3.jpg"
              alt="Third slide"
            />
            <div class="carousel-caption d-none d-md-block">
                <h5>Empowering Young Minds</h5>
                <p>Our school is dedicated to fostering a love of learning and intellectual curiosity. Through personalized education and a supportive community, we help students unlock their true potential.</p>
              </div>
          </div>
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section id="feature">
        <h1>Welcome to <br/> <span>Shri R. B. Singh Public School</span></h1>
        <p>We prepare our students to become the leaders of tomorrow through a comprehensive and holistic education. Our commitment to excellence ensures that each child reaches their full potential.</p>
        <div class="feature-container">
            <div><i class="fas fa-book-open"></i>Learn</div>
            <div><i class="fas fa-lightbulb"></i>Inspire</div>
            <div><i class="fas fa-star"></i>Dream</div>
            <div><i class="fas fa-search"></i></i>Explore</div>
            <div><i class="fas fa-paint-brush"></i></i>Create</div>
            <div><i class="fas fa-futbol"></i></i>Play</div>
        </div>
    </section>

    <section id="message">
        <h1>Principal's Message</h1>
        <div>
            <div>
                <img src="images/home/principal.jpg" alt="">
            </div>
            <div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione quos magnam fuga quam dolor quod rerum veniam dicta nam alias. Aliquam voluptatem natus fugiat soluta doloremque dolor eum sunt voluptates!
                    <span>Mr. Digamber Singh <br/> (Principal)</span>
                </p>
            </div>
        </div>
        
    </section>

    <section id="bannner-container">
        <div class="banner">
            <div class="image-wrapper">
                <img src="images/home/hero1.jpg" alt="Learn">
                <div class="border-animation"></div>
                <div class="overlay">
                    <h3>Learn</h3>
                    <p>Empowering students with knowledge, skills for lifelong success.</p>
                </div>
            </div>
        </div>
        <div class="banner">
            <div class="image-wrapper">
                <img src="images/home/hero2.jpg" alt="Explore">
                <div class="border-animation"></div>
                <div class="overlay">
                    <h3>Explore</h3>
                    <p>Encouraging curiosity, innovation through hands-on learning experiences.</p>
                </div>
            </div>
        </div>
        <div class="banner">
            <div class="image-wrapper">
                <img src="images/home/hero3.jpg" alt="Inspire">
                <div class="border-animation"></div>
                <div class="overlay">
                    <h3>Inspire</h3>
                    <p>Motivating students to reach their highest potential in all endeavors.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="notice" class="py-5">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2>Notice Board</h2>
                    <hr color="#000" />
                    <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
                        <ul>
                            <li>

                                <?php

                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $database = "school_db";
                                // $user = $_GET['username'];
                                $conn = mysqli_connect($servername, $username, $password, $database);
                                $sql = "SELECT * FROM `notice`";
                                $result = mysqli_query($conn, $sql);
                                $sno = 0;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $sno += 1;


                                    echo
                                        $row['description'];
                                    echo '<br>';
                                }

                                ?>
                            </li>
                        </ul>
                    </marquee>

                </div>
            </div>
        </div>
    </section>

    <section id="social">
        <div>
        <div id="calendar"></div>
            <div class="fb-page single-column col-md-5 col-sm-9"
                data-href="https://www.facebook.com/profile.php?id=100088898552627" data-tabs="timeline"
                data-width="500" data-height="600" data-small-header="false" data-adapt-container-width="true"
                data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/profile.php?id=100088898552627"
                    class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=100088898552627">Shri
                        R.B.Singh Public School Nasirpur </a></blockquote>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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