<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title id="dynamic-title">Loading...</title> <!-- Title will be set dynamically -->

  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/custom_css.css" rel="stylesheet">

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Define page titles based on URLs
      const pageTitles = {
        "index.php": "Home | Brainiq College of Accounts",
        "about.php": "About Us | Brainiq College of Accounts",
        "courses.php": "Courses | Brainiq College of Accounts",
        "trainers.php": "Our Trainers | Brainiq College of Accounts",
        "events.php": "Events | Brainiq College of Accounts",
        "contact.php": "Contact Us | Brainiq College of Accounts"
      };

      // Get the current page URL
      let currentPage = window.location.pathname.split("/").pop() || "index.html"; // Defaults to index.html

      // Update the title dynamically
      document.title = pageTitles[currentPage] || "Brainiq College of Accounts";

      // Set Active Link
      let menuLinks = document.querySelectorAll(".navmenu a");
      menuLinks.forEach(link => {
        let pageName = link.getAttribute("href").split("/").pop();
        
        // Remove active class from all
        link.classList.remove("active");

        // Add active class if the link matches the current page
        if (pageName === currentPage) {
          link.classList.add("active");
        }
      });
    });
  </script>
</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename"><img src="assets/img/logo1.png" alt="" style="height: 150px; width: 150px;">BRAINIQ</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="trainers.php">Trainers</a></li>
          <li><a href="events.php">Events</a></li>
          <li class="dropdown">
            <a href="#"><span>Courses</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="course-details.php">ATD</a></li>
              <li><a href="course-details.php">CPA</a></li>
              <li><a href="course-details.php">CAMS</a></li>
              <li class="dropdown">
                <a href="#"><span>Short Courses</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Computer Applications</a></li>
                  <li><a href="#">Accounting Packages</a></li>
                  <li><a href="#">Web Design</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="courses.php">Get Started</a>

    </div>
  </header>

</body>

</html>
