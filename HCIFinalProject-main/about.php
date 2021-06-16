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
      <h1>About Us</h1>
      <?php 
            if (isset($_SESSION["useruid"])) {
              echo "<p> Hello there, " . $_SESSION["useruid"] . "</p>";
            }
            ?>
    </section>

    <!-- About Us -->
    <section class="about-us">
      <div class="row">
        <div class="about-col">
          <h1>Sejarah Berdirinya</h1>
          <p>
            Kebun teh Wonosari memiliki sejarah panjang sejak zaman kolonial
            Belanda, tepatnya berdiri pada tahun 1910. <br />
            Kebun teh Wonosari merupakan kebun teh pertama di Jawa Timur yang
            bernaung di bawah perusahaan Belanda bernama NV. Cultur Maathappy
            pada saat itu kebun teh ini ditanami teh dan kina.
          </p>
          <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
          <img src="images/about.jpg" />
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
