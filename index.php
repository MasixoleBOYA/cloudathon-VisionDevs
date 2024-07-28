<?php
require_once ("header.php");
?>

<main class="main">

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
          <h1>Connecting Entrepreneurs with Funding Opportunities</h1>
          <p>Empowering innovation and addressing unemployment in South Africa</p>
          <div class="d-flex">
            <a href="#Join" class="btn-get-started">Get Started</a>
            <a href="https://youtu.be/xvFZjo5PgG0"
              class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Demo
                Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- /Hero Section -->

  <!-- Clients Section -->
  <section id="clients" class="clients section light-background">

    <div class="container" data-aos="zoom-in">

      <div class="swiper init-swiper">
        <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
      </div>

    </div>

  </section><!-- /Clients Section -->

  <!-- <section id="sign-up" class="sign-up">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Create Your Account</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-6">
            <form method="post" action="login-logic.php" class="needs-validation" novalidate>
              <div class="form-group">
                <label for="userType">I am a:</label>
                <select class="form-select" id="userType" name="userType" required>
                  <option value="entrepreneur">Entrepreneur</option>
                  <option value="organization">Organization</option>
                </select>
              </div>
              <div class="form-group mt-3">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group mt-3">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group mt-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
              </div>
              <div class="form-group mt-3">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required>
              </div>

               Entrepreneur Only Fields 
              <div id="entrepreneurFields" class="d-none">
                <div class="form-group mt-3">
                  <label for="profilePicture">Profile Picture</label>
                  <input type="file" class="form-control" name="profilePicture" id="profilePicture">
                </div>
                <div class="form-group mt-3">
                  <label for="introVideo">Introductory Video</label>
                  <input type="file" class="form-control" name="introVideo" id="introVideo">
                </div>
                <div class="form-group mt-3">
                  <label for="idCopy">ID Copy</label>
                  <input type="file" class="form-control" name="idCopy" id="idCopy">
                </div>
              </div>

               Organization Only Fields 
              <div id="organizationFields" class="d-none">
                <div class="form-group mt-3">
                  <label for="organizationName">Organization Name</label>
                  <input type="text" class="form-control" name="organizationName" id="organizationName">
                </div>
                <div class="form-group mt-3">
                  <label for="legalAgreement">Legal Agreement</label>
                  <input type="checkbox" name="legalAgreement" id="legalAgreement" required>
                  <label for="legalAgreement"> I agree to the terms and conditions.</label>
                </div>
              </div>

              <div class="text-center mt-4"><button type="submit">Sign Up</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> -->

  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" >
      <h2>About Us</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6 content" >
          <p>
            Welcome to the Entrepreneurial Funding Platform, a dynamic digital space dedicated to bridging the gap
            between
            visionary entrepreneurs and forward-thinking organizations. Our mission is to address the high unemployment
            rate in South Africa
            by fostering innovation and providing valuable funding opportunities.
          </p>

          <b>What we do:</b>
          <ul>
            <li><i class="bi bi-check2-circle"></i> <span>Secure accounts for both entrepreneurs and
                organizations.</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Facilitate communication between entrepreneurs and
                organizations.</span></li>
            <li><i class="bi bi-check2-circle"></i> <span>Filter profiles to find entrepreneurs that match funding
                criteria.</span></li>
          </ul>
        </div>

        <div class="col-lg-6" >
          <p>We envision a thriving entrepreneurial ecosystem where innovative ideas flourish and find the financial
            support they need to succeed.
            By connecting entrepreneurs with organizations willing to fund and support their ventures,
            we aim to drive economic growth and create a sustainable impact on the unemployment landscape in South
            Africa. </p>
          <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>

      </div>

    </div>

  </section><!-- /About Section -->

  <!-- Call To Action Section -->
  <section id="Join" class="call-to-action section dark-background">

    <img src="assets/img/cta-bg.jpg" alt="">

    <div class="container">

      <div class="row" >
        <div class="col-xl-9 text-center text-xl-start">
          <h3>Join us</h3>
          <p>On our journey to empower entrepreneurs, drive innovation, and 
            make a lasting impact on the economic landscape of South Africa. 
            Together, we can turn visionary ideas into successful ventures.</p>
        </div>
        <div class="col-xl-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="getStarted.php">Sign Up</a>
        </div>
      </div>

    </div>

  </section><!-- /Call To Action Section -->

  <!-- Team Section -->
  <section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" >
      <h2>Team</h2>
      <p>Meet the talented and dedicated individuals who drive our success.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

      <div class="col-lg-6">
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-1.jpeg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nqobile Hlatshwayo</h4>
                <span>Partner</span>
                <p>"Don't watch the clock; do what it does. Keep going"</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" >
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ayanda Thwala</h4>
                <span>Partner</span>
                <p>"In the midst of chas, there is also opportunity"</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" >
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Lusanda Mdhlalose</h4>
                <span>Partner</span>
                <p>"The best way to predict the future is to create it"</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-6" >
            <div class="team-member d-flex align-items-start">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Masixole Boya</h4>
                <span>Partner</span>
                <p>"Every problem is a gift - without problems we would not grow"</p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""> <i class="bi bi-linkedin"></i> </a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- /Team Section -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Contact</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-5">

          <div class="info-wrap">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
              frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>

        <div class="col-lg-7">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="name-field" class="pb-2">Your Name</label>
                <input type="text" name="name" id="name-field" class="form-control" required="">
              </div>

              <div class="col-md-6">
                <label for="email-field" class="pb-2">Your Email</label>
                <input type="email" class="form-control" name="email" id="email-field" required="">
              </div>

              <div class="col-md-12">
                <label for="subject-field" class="pb-2">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject-field" required="">
              </div>

              <div class="col-md-12">
                <label for="message-field" class="pb-2">Message</label>
                <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>

<footer id="footer" class="footer">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6">
          <h4>Join Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="d-flex align-items-center">
          <span class="sitename">Virtual Capital</span>
        </a>
        <div class="footer-contact pt-3">
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
          <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-12">
        <h4>Follow Us</h4>
        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
        <div class="social-links d-flex">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Virtual Capital</strong> <span>All Rights Reserved</span>
    </p>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you've purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

<script>

  document.addEventListener('DOMContentLoaded', function () {
    const entrepreneurBtn = document.getElementById('entrepreneurBtn');
    const organizationBtn = document.getElementById('organizationBtn');
    const formContainer = document.getElementById('formContainer');

    entrepreneurBtn.addEventListener('click', () => {
      formContainer.classList.remove('slide-left');
      formContainer.classList.add('slide-right');
      entrepreneurBtn.classList.add('btn-primary');
      entrepreneurBtn.classList.remove('btn-secondary');
      organizationBtn.classList.add('btn-secondary');
      organizationBtn.classList.remove('btn-primary');
    });

    organizationBtn.addEventListener('click', () => {
      formContainer.classList.remove('slide-right');
      formContainer.classList.add('slide-left');
      organizationBtn.classList.add('btn-primary');
      organizationBtn.classList.remove('btn-secondary');
      entrepreneurBtn.classList.add('btn-secondary');
      entrepreneurBtn.classList.remove('btn-primary');
    });
  });
</script>

</body>

</html>