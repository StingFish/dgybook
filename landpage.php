<?php
 session_start();
if(isset($_SESSION['User'])) {
     header("Location: storage.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User2'])) {
     header("Location: admin.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User3'])) {
     header("Location: template/menu.php"); // redirects them to homepage
     exit; // for good measure
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="CvSU/logo-removebg.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/slide/slide-1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>DFCAMCLP-IT<br>Digital Yearbook</span></h2>
                <p class="animate__animated animate__fadeInUp">The first ever yearbook system in the campus.</p>
                <a href="LC.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sign In</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Access Anywhere</h2>
                <p class="animate__animated animate__fadeInUp">Enjoy every shared moments with your friends and classmate, reminisce  and be valued. We offered free yearbook to view on your mobile phone. online and portable yearbook in a modern world!</p>
                <a href="LC.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sign In</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">No Registration Needed</h2>
                <p class="animate__animated animate__fadeInUp">You just need to be part of the list of graduation to have access on the website.</p>
                <a href="LC.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sign In</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="landpage.php"><span><img src="CvSU/logo-removebg.png"></span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">features</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="LC.php">Sign In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= More Services Section ======= -->
    <section class="more-services section-bg">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="card">
              <img src="assets/img/more-service-1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">News</a></h5>
                <p class="card-text">Latest news updates about Las Piñas City</p>
                <a href="https://www.facebook.com/lpcupdate" class="btn">Go to site</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="card">
              <img src="assets/img/more-service-2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">Weather</a></h5>
                <p class="card-text">Latest news updates about the weather</p>
                <a href="https://bagong.pagasa.dost.gov.ph/weather" class="btn">Go to site</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="card">
              <img src="assets/img/more-service-3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="">Traffic</a></h5>
                <p class="card-text">Latest news updates about the traffic</p>
                <a href="https://twitter.com/MMDA" class="btn">Go to site</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End More Services Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2 style="color: #0276d8">About the Yearbook</h2>
          <p>A digital yearbook or eYearbook for Dr. Filemon C. Aguilar Memorial College of Las Piñas - Information Technology Campus that holds memories of a given time with a given group of people, most commonly, a school year at a particular school
that exists in digital form.</p>
        </div>
        <div class="section-title">
          <h4 style="color: #0276d8">DFCAMCLP MISSION</h4>
          <p>Guided by its vision, the DFCAMCLP committed to: Motivate and develop competent, productive and ethical professionals, leaders and citizens of Las Piñas.</p>
        </div>
        <div class="section-title">
          <h4 style="color: #0276d8">DFCAMCLP VISION</h4>
          <p>The Dr. Filemon C. Aguilar Memorial College of Las Piñas (DFCAMCLP), as a public institution of higher learning, commits itself to educate and serve the less priviledge but
deserving students of Las Piñas City.<br><br>Through quality tertiary education by emphasizing the importance of knowledge and skills honed through strong values fashioned from the best in human and Filipino tradition. It shall strive to achieve responsible service that will contribute to the common efforts towards community building, national development and global solidarity.</p>
        </div>-
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/about2.jpg" class="img-fluid" alt="" style="border-radius: 10px">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            
            <p class="fst-italic" style="font-size: 35px">
              "Rest assured of steadfast commitment to provide every Las Piñas free and quality education to prepare you become more productive and responsible citizens."
            </p>
            <h3><strong>Mayor Vergel "Nene" Aguilar</strong><br>1947-2021</h3>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2 style="color: #0276d8">Video Presentation</h2>
          
        </div>
        <div class="row">
          <center>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <video style="max-width:100%;" controls>
              <source src="asa.mp4" type="video/mp4">
              Your browser does not support HTML video.
            </video>
          </div>
          <p>This is the Dr. Filemon C. Aguilar Memorial College of Las Piñas - IT Campus Hymn.</p>
        </center>
        </div>

      </div>
    </section>
    <!-- ======= Counts Section ======= 
    <section class="counts section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> consequuntur quae qui deca rode</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> adipisci atque cum quia aut numquam delectus</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> aut commodi quaerat. Aliquam ratione</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> rerum asperiores dolor molestiae doloribu</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section> End Counts Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="features" class="services">
      <div class="container">

        <div class="section-title">
          <h2 style="color: #0276d8">Features</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-bulb"></i></div>
              <h4 class="title"><a href="">MODERN</a></h4>
              <p class="description">It is related to the new generation that will help the campus.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-mobile"></i></div>
              <h4 class="title"><a href="">PORTABLE</a></h4>
              <p class="description">You can access it everywhere you are by just opening it to your browser in smart phones, Laptop, Personal Computer, etc.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-accessibility"></i></div>
              <h4 class="title"><a href="">EASY ACCESS</a></h4>
              <p class="description">No long procedure to access your digital yearbook. Just sign-in and youre good to go.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-badge-dollar"></i></div>
              <h4 class="title"><a href="">FREE</a></h4>
              <p class="description">It is because it has no paper to print and you don't need to wait long time to have it.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Cta Section ======= -->
    <section class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Want to see your digital yearbook?</h3>
          <a class="cta-btn" href="LC.php">Sign In</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">

      <div class="container">

        <div class="section-title">
          <h2 style="color: #0276d8">Developers Team</h2>
          <p>Meet the developers behind the website</p>
        </div>
         
        <div class="row">
            <center>
          <div class="col-xl-3 col-lg-4 col-md-6" style="display: inline-block;">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bachelor of Science in Information Technology</h4>
                  <span>CvSU - Bacoor City Campus</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                </div>
              </div>

            </div>
            <center><h5 style="background-color: white; color: black;margin-top: -20px;">Rodney Arceño</h5></center>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" style="display: inline-block;" data-wow-delay="0.1s">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bachelor of Science in Information Technology</h4>
                  <span>CvSU - Bacoor City Campus</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                </div>
              </div>
            </div>
            <center><h5 style="background-color: white; color: black;margin-top: -20px;">Maricar Cajote</h5></center>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" style="display: inline-block;" data-wow-delay="0.2s">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bachelor of Science in Information Technology</h4>
                  <span>CvSU - Bacoor City Campus</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                </div>
              </div>
            </div>
            <center><h5 style="background-color: white; color: black;margin-top: -20px;">Jennifer Flores</h5></center>
          </div>
          </center>
        </div>
         
  
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">

      <div class="container">
        <div class="section-title">
          <h2 style="color: #0276d8">Contact Us</h2>
        </div>
      </div>

      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch infos">

            <div class="row">

              <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                <i class="bx bx-map" style="color: #0276d8"></i>
                <h4>Address</h4>
                <p>Dandelion St., Doña Manuela Subd., Pamplona 3, Las Piñas City</p>
              </div>
              <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                <i class="bx bx-phone" style="color: #0276d8"></i>
                <h4>Call Us</h4>
                <p>831-3681</p>
              </div>
              <div class="col-lg-6 info info-bg d-flex flex-column align-items-stretch">
                <i class="bx bx-envelope" style="color: #0276d8"></i>
                <h4>Email Us</h4>
                <p>dfcamclpitgto@gmail.com</p>
              </div>
              <div class="col-lg-6 info d-flex flex-column align-items-stretch">
                <i class="bx bx-time-five" style="color: #0276d8"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 7AM to 5PM</p>
              </div>
            </div>

          </div>

          <div class="col-lg-6 d-flex align-items-stretch contact-form-wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d711.4595709860081!2d120.97707156023007!3d14.461864099034237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cdf1139cff7f%3A0x51392535e8d5fa87!2sDr.%20Filemon%20C.%20Aguilar%20Memorial%20College%20of%20Las%20Pi%C3%B1as%20-%20IT%20Campus!5e1!3m2!1sen!2sph!4v1651204171849!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dr. Filemon C. Aguilar Memorial College of Las Piñas - IT Campus</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>