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
    <!-- <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css" /> -->
    <link rel="stylesheet" href="font-awesome.css">
    <script src="https://kit.fontawesome.com/ac8d43ee9f.js" crossorigin="anonymous"></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="8d774616-db7c-4e02-96cc-529007c6d5bb";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </head>
  <body>
    <section class="header">
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
      <div class="text-box">
        <h1>Be Relaxed In Nature</h1>
        <p>Rest for a while to relax your mind.</p>
        <?php 
            if (isset($_SESSION["useruid"])) {
              echo "<p> Hello there, " . $_SESSION["useruid"] . "</p>";
            }
            ?>
        <a href="visit.php" class="hero-btn">Visit Us To Know More</a>
      </div>
    </section>

 

    <!-- Popular Package  -->
    <section class="package">
      <div class="row">
        <div class="package-col">
          <i class="fa fa-location-arrow fa-4x text-teal"></i>
          <h3>Choose Package</h3>
          <p>
            Anda bisa memilih beberapa paket yang ditawarkan untuk menikmati
            kawasan Wisata Kebun Teh Wonosari Malang bersama keluarga, sahabat,
            dan lain - lain.
          </p>
        </div>
        <div class="package-col">
          <i class="fa fa-building fa-4x text-teal"></i>
          <h3>Accomodation</h3>
          <p>
            Di kawasan Wisata Kebun Teh Wonosari Malang, tersedia tempat
            penginapan yang dapat dipesan dan dibooking oleh beberapa wisatawan
            yang ingin menginap di kawasan wisata.
          </p>
        </div>
        <div class="package-col">
          <i class="fas fa-utensils fa-4x text-teal"></i>
          <h3>Culinary Food</h3>
          <p>
            Wisata Kebun Teh Wonosari juga menyediakan beberapa rumah makan yang
            menyajikan makanan berat dan makanan ringan yang dapat dinikmati
            wisatawan saat berkunjung di Wisata Kebun Teh Wonosari.
          </p>
        </div>
      </div>
    </section>

    <!-- Popular Places -->
    <section class="places">
      <h1>Our Facilities</h1>
      <p>
        Kebun Teh Wonosari memiliki fasilitas yang banyak, seperti Outbound,
        beberapa tempat yang instagrammable dan tempat camping yang luas.
      </p>

      <div class="row">
        <div class="places-col">
          <img src="images/camp1.jpg" />
          <div class="layer">
            <h3>CAMPING</h3>
          </div>
        </div>
        <div class="places-col">
          <img src="images/instagram1.jpg" />
          <div class="layer">
            <h3>PHOTO SPOT</h3>
          </div>
        </div>
        <div class="places-col">
          <img src="images/atv1.jpg" />
          <div class="layer">
            <h3>OUTBOUND</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- Facilities -->

    <section class="facilities">
      <h1>Our Popular Places</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum sequi
        quam vitae debitis voluptatibus sunt totam, aspernatur accusantium odio
        reprehenderit sed nemo dolorem deserunt aut provident dolores! Hic,
        corrupti similique!
      </p>
      <div class="row">
        <div class="facilities-col">
          <img src="images/arjuna.jpg" />
          <h3>Gunung Arjuna</h3>
          <p>Nikmatilah pemandangan yang indah dari Kaki Gunung Arjuna.</p>
        </div>
        <div class="facilities-col">
          <img src="images/tea1.jpg" />
          <h3>Tea Garden</h3>
          <p>Pemandangan daun teh hijau yang sangat menyejukkan.</p>
        </div>
        <div class="facilities-col">
          <img src="images/pabrik1.jpg" />
          <h3>Tea Factory</h3>
          <p>Lihatlah langsung proses pembuatan teh.</p>
        </div>
      </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonials">
      <h1>What Our Visitors Says</h1>
      <p>Beberapa testimoni dari mereka</p>

      <div class="row">
        <div class="testimonials-col">
          <img src="images/user1.jpg" />
          <div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
              placeat fuga officia eum. Perferendis impedit dolorem tempore,
              aperiam dicta unde maiores nostrum sequi! Id, fuga neque quos quas
              facere blanditiis!
            </p>
            <h3>Benedicta Michel</h3>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        <div class="testimonials-col">
          <img src="images/user2.jpg" alt="">
          <div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
              placeat fuga officia eum. Perferendis impedit dolorem tempore,
              aperiam dicta unde maiores nostrum sequi! Id, fuga neque quos quas
              facere blanditiis!
            </p>
            <h3>Gorge Washington</h3>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- Call To Action -->
    <section class="cta">
      <h1>Book Now</h1>
      <a href="contact.php" class="hero-btn">CONTACT US</a>
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
