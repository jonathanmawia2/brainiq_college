<?php

include "inc/header.php";
?>

<main class="main">
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Contact</h1>
            <p>Contact us for more details.</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </div>
    </nav>
  </div>

  <section id="contact" class="contact section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4">
          <div class="info-item d-flex">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>Nyeri Teachers Plaza</p>
              <a href="https://www.google.com/maps/search/?api=1&query=Nyeri+Teachers+Plaza" target="_blank" class="btn btn-primary btn-sm mt-2">View on Google Maps</a>
            </div>
          </div>
          <div class="info-item d-flex">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+254706400570 | 0780259884 | 0786631783</p>
            </div>
          </div>
          <div class="info-item d-flex">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>brainiqcollege@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">
              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>
              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
</main>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
