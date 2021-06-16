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
      <h1>Contact Us</h1>
      <?php 
            if (isset($_SESSION["useruid"])) {
              echo "<p> Hello there, " . $_SESSION["useruid"] . "</p>";
            }
            ?>
    </section>

    <!-- Contact us -->
    <section class="location">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.71096200142!2d112.64009271459857!3d-7.82038729436478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d4b6aa5b34bf%3A0x1b4684ca99aa8076!2sWonosari%20Agro%20Tourism!5e0!3m2!1sen!2sid!4v1614712100802!5m2!1sen!2sid"
        width="100%"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
      ></iframe>
    </section>

    <section class="contact-us">
      <div class="row">
        <div class="contact-col">
          <div>
            <i class="fas fa-home"></i>
            <span>
              <h5>
                Wonosari Agrowisata RT.04/RW.07, Bodean Putuk, Toyomarto,
                Singosari
              </h5>
              <p>Malang, East Java, Indonesia</p>
            </span>
          </div>
          <div>
            <i class="fas fa-phone"></i>
            <span>
              <h5>0811-3637-198</h5>
              <p>Monday to Saturday, 10AM to 6PM</p>
            </span>
          </div>
          <div>
            <i class="fas fa-envelope"></i>
            <span>
              <h5>melaku2@gmail.com</h5>
              <p>Email us your query</p>
            </span>
          </div>
        </div>

        <div class="contact-col">
          <form action="form-handler.php" method="post">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter email address" required>
            <input type="text" name="subject" placeholder="Enter your subject" required>
            <textarea name="message" id="" cols="30" rows="8" placeholder="Message"></textarea>
            <button type="submit" class="hero-btn red-btn">Send Message</button>
          </form>
        </div>
        <!-- <div class="contact-col">
          <form action="form-handler.php" method="post">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter email address" required>
            <input type="text" name="subject" placeholder="Enter your subject" required>
            <textarea
              name="message"
              id=""
              cols="30"
              placeholder="Message"
              required
              rows="8"
            ></textarea>
            <button type="submit" class="hero-btn red-btn">Send Message</button>
          </form>
        </div> -->
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
