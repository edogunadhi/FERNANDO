
    <!-- End of Async Drift Code -->
    <link rel="stylesheet" href="style2.css" />

    <!-- Slider Section -->
    <section class ="signup-form">
     
     <form action="includes/login.inc.php" method="post">
     <h2>Log In</h2>
         <input type="text" name="uid" placeholder="Username/Email...">
         <input type="password" name="pwd" placeholder="Password...">
         <button type="submit" name="submit">Log In</button>
         </form>
    <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == 'emptyinput') {
            echo "<p>Fill in all filed!</p>";
        }
        else if ($_GET["error"] == 'invalidid') {
            echo "<p>Incorrect login information!</p>";
        }
    }
?>
    </section>


