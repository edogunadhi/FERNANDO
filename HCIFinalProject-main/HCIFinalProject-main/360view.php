<?php 
  session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Wonosari Malang</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css" />
  </head>
  <body>
    <section class="sub-header">
      <nav>
        <a href="index.php" class="tulisan">MELAKU2 MALANG</a>
        <div class="nav-links" id="navLinks">
          <i class="fas fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="360view.php">360 View</a></li>
            
            <?php 
            if (isset($_SESSION["useruid"])) {
              echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
            }
            else {
              echo "<li><a href='signup.php'>SIGN UP</a></li>";
              echo "<li><a href='login.php'>LOG IN</a></li>";
            }
            ?>
          </ul>
        </div>
        <i class="fas fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1>360 View</h1>
      <?php 
            if (isset($_SESSION["useruid"])) {
              echo "<p> Hello there, " . $_SESSION["useruid"] . "</p>";
            }
            ?>
    </section>

    <!-- 360 view  -->
    <section class="view">
      <div class="row">
        <div class="view-col">
          <iframe
            src="https://www.google.com/maps/embed?pb=!4v1618082815823!6m8!1m7!1sbMbtatw8Q1xaeIIBJiFbLg!2m2!1d-7.82337571976869!2d112.6447556778794!3f139.51466220219325!4f1.8812043181117417!5f0.7820865974627469"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
        <div class="view-col">
          <iframe
            src="https://www.google.com/maps/embed?pb=!4v1618082692205!6m8!1m7!1snzyfNDWZjFkAQAg_vvtrPQ!2m2!1d-7.822756653981061!2d112.642143031167!3f121.92516196464335!4f-2.0552224424573353!5f0.7820865974627469"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
        <div class="view-col">
          <iframe
            src="https://www.google.com/maps/embed?pb=!4v1618080067261!6m8!1m7!1sxEdwQcX-3uNXocBojmIg8g!2m2!1d-7.82071866434004!2d112.6432683329434!3f243.94282755188863!4f-9.901543908081337!5f0.7820865974627469"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
          ></iframe>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section class="footer">
      <h4>About Us</h4>
      <p>
        Wonosari Agrowisata RT.04/RW.07, Bodean Putuk, Toyomarto, Singosari,
        Malang, East Java 65153
      </p>
      <div class="icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
      </div>
      <p>Copyright ©2021 - Wisata Kebun Teh Wonosari. All Rights Reserved.</p>
    </section>

    <!-- Java Script for Toggle Menu -->
    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>
  </body>
</html>
