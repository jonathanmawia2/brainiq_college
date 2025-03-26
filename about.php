<?php 
include "inc/header.php";
?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
                <h1>About Us<br></h1>
                <p class="mb-0">
                  At our college, we bridge creativity and precision through expert-led programs in Web Design              and Accounting. Our web design courses empower students with cutting-edge skills in UI/UX,              coding, and digital creativity, preparing them for dynamic careers in the tech industry.            Meanwhile, our accounting programs provide a strong foundation in financial management,             auditing, and business analytics, equipping students with the expertise needed for success in           the corporate world. Whether you’re designing the future of the web or managing financial growth, we help you build a career with confidence.
                </p>
              </div>

          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">About Us<br></li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Us Section -->
    <section id="about" class="about section">
  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/about-2.jpg" class="img-fluid" alt="Accounting and Web Development">
      </div>

      <div class="col-lg-6 order-2 order-lg-1 content" data-aos="fade-up" data-aos-delay="200">
        <h3>Empower Your Future with Accounting & Web Development</h3>
        <p class="fst-italic">
          Whether you're passionate about numbers or coding, our programs provide the skills you need 
          to excel in **finance** and **technology**. 
        </p>
        <ul>
          <li><i class="bi bi-check-circle"></i> <span><strong>Accounting:</strong> Master financial reporting, taxation, and auditing to drive business success.</span></li>
          <li><i class="bi bi-check-circle"></i> <span><strong>Web Development:</strong> Learn to build responsive, user-friendly websites using modern technologies like HTML, CSS, JavaScript, and frameworks.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Get hands-on experience with real-world projects and expert mentorship to prepare for high-demand careers.</span></li>
        </ul>
        <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section><!-- /About Section -->


    <!-- Counts Section -->
    <section id="counts" class="section counts light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="2" class="purecounter"></span>
              <p>Students</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="2" class="purecounter"></span>
              <p>Courses</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="2" class="purecounter"></span>
              <p>Events</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="2" class="purecounter"></span>
              <p>Trainers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Counts Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section py-5 bg-light">
  <div class="container text-center">
    <h2 class="mb-3">What Our Students Say</h2>
    <p class="text-muted">Hear from our graduates and students about their experiences.</p>
  </div>

  <div class="container">
    <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner">

        <!-- Testimonial 1 (Web Design) -->
        <div class="carousel-item active">
          <div class="testimonial-item text-center text-dark p-5" style="border-radius: 10px; background: url('assets/img/banner-bg.png') center/cover no-repeat;">
            <div class="mb-2">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img rounded-circle" alt="Student Image">
            </div>
            <h4>Emily Johnson</h4>
            <p class="text-success fw-bold text-decoration-underline" style="font-size: 24px;">Web Design Graduate</p>
            <p class="testimonial-text">
              "The web design course provided me with real-world skills in UI/UX and coding. Now, I'm working as a professional front-end developer!"
            </p>
          </div>
        </div>

        <!-- Testimonial 2 (Accounting) -->
        <div class="carousel-item">
          <div class="testimonial-item text-center text-dark p-5" style="border-radius: 10px; background: url('assets/img/banner-bg.png') center/cover no-repeat;">
            <div class="mb-2">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img rounded-circle" alt="Student Image">
            </div>
            <h4>Michael Smith</h4>
            <p class="text-success fw-bold text-decoration-underline" style="font-size: 24px;">Accounting Student</p>
            <p class="testimonial-text">
              "The accounting program gave me hands-on experience with financial analysis and auditing, helping me land an internship at a top firm!"
            </p>
          </div>
        </div>

        <!-- Testimonial 3 (Web Development) -->
        <div class="carousel-item">
          <div class="testimonial-item text-center text-dark p-5" style="border-radius: 10px; background: url('assets/img/banner-bg.png') center/cover no-repeat;">
            <div class="mb-2">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img rounded-circle" alt="Student Image">
            </div>
            <h4>Sophia Williams</h4>
            <p class="text-success fw-bold text-decoration-underline" style="font-size: 24px;">Web Development Student</p>
            <p class="testimonial-text">
              "I learned to build responsive websites and gained confidence in JavaScript. This course truly transformed my career prospects!"
            </p>
          </div>
        </div>

        <!-- Testimonial 4 (Finance) -->
        <div class="carousel-item">
          <div class="testimonial-item text-center text-dark p-5" style="border-radius: 10px; background: url('assets/img/banner-bg.png') center/cover no-repeat;">
            <div class="mb-2">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img rounded-circle" alt="Student Image">
            </div>
            <h4>Daniel Brown</h4>
            <p class="text-success fw-bold text-decoration-underline" style="font-size: 24px;">Finance Graduate</p>
            <p class="testimonial-text">
              "The accounting course was detailed and practical, covering everything from financial modeling to taxation. Highly recommended!"
            </p>
          </div>
        </div>

      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <!-- Carousel Indicators -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3"></button>
      </div>

    </div>
  </div>
</section>

<!-- Bootstrap JS (Required for Carousel) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript to Ensure Auto-Sliding -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    let myCarousel = new bootstrap.Carousel(document.querySelector("#testimonialCarousel"), {
      interval: 5000,
      ride: "carousel",
      pause: false,
      wrap: true
    });
  });
</script>



  </main>

  <?php include "inc/footer.php"?>