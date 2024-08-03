<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RBSPS</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/07c5373a02.js" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.5/index.global.min.js'></script>
    <link rel="stylesheet" href="style.css">

    <style>
        a {
            color: black;
            text-decoration: none;
        }

        #newsletter {
            background-image: url(hero1.jpg);
            background-repeat: no-repeat;
            background-position: 20% 30%;
            background-color: #041e42;
        }

        .newstext {
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/hi_IN/sdk.js#xfbml=1&version=v16.0"
        nonce="nRs2vRYH"></script>
    <section id="header">
        <a href="#"><img src="images/Logo/Logo-with-text.jpg" alt="" width="200px" height="100px"></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="admission.php">Admission</a></li>
                <li><a href="gallary.php">Gallery</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="loginlanding.php">Login</a></li>
            </ul>
        </div>
    </section>

    <Section id="hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/home/hero1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/home/hero2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/home/hero3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </Section>
    <section>
        <div class="container" style="margin-top: 9%; margin-bottom: 2%; ">
            <div class="row">
                <div class="single-column col-md-6 col-sm-12">
                    <h3>Principal's Message</h3>
                    <p style="color:grey;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur eum
                        voluptas odio, fugiat eius enim quae nobis, quaerat soluta nostrum quibusdam eligendi? Velit
                        quia modi ullam reprehenderit distinctio, explicabo corporis?
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi, labore quisquam? Facere
                        perspiciatis nobis, repudiandae nemo adipisci porro quibusdam necessitatibus quos hic velit
                        magni quidem nisi eveniet, rem sequi doloribus!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores vel minima cumque saepe, dicta
                        neque aliquam voluptatibus optio corrupti! Consequatur, ad! Vero eum provident consequuntur
                        ducimus qui maiores dolor quo!
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea labore culpa sapiente! Error dicta
                        quasi impedit aut sunt tempore architecto, expedita labore. Rerum laboriosam perferendis
                        repellendus illo architecto non quod?</p>
                    -Mr. Digambar Singh <br>
                    (Principal)
                </div>
                <div class="single-column col-md-6 col-sm-12" style>
                </div>

            </div>
        </div>
    </section>
    <hr>
    <section style="margin-top: 70px">
        <div class="row">
            <div id='calendar' class="single-column col-md-5 col-sm-9" style="margin: 50px;"></div>

            <div class="fb-page single-column col-md-5 col-sm-9"
                data-href="https://www.facebook.com/profile.php?id=100088898552627" data-tabs="timeline"
                data-width="500" data-height="600" data-small-header="false" data-adapt-container-width="true"
                data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/profile.php?id=100088898552627"
                    class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/profile.php?id=100088898552627">Shri
                        R.B.Singh Public School Nasirpur </a></blockquote>
            </div>
    </section>
    <section class="py-5">
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
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            "Education is the best friend. An educated person is respected everywhere. Education beats the beauty and
            the youth." - Chanakya
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>

</body>

</html>