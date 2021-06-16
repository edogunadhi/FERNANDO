
    <!-- End of Async Drift Code -->
    <link rel="stylesheet" href="style2.css" />

    <!-- Slider Section -->
    <section class ="signup-form">
     
     <form action="includes/signup.inc.php" method="post">
     <h2>Sign Up</h2>
         <input type="text" name="name" placeholder="Full name...">
         <input type="text" name="email" placeholder="Email...">
         <input type="text" name="uid" placeholder="Username...">
         <input type="password" name="pwd" placeholder="Password...">
         <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
         <button type="submit" name="submit">Sign Up</button>
         </form>

<?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == 'emptyinput') {
            echo "<p>Fill in all filed!</p>";
        }
        else if ($_GET["error"] == 'invalidid') {
            echo "<p>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == 'invalidemail') {
            echo "<p>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == 'passworddontmatch') {
            echo "<p>Password doesn't match!</p>";
        }
        else if ($_GET["error"] == 'stmtfailed') {
            echo "<p>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == 'usernametaken') {
            echo "<p>Username already taken!</p>";
        }
        else if ($_GET["error"] == 'none') {
            echo "<p>You have signed up!</p>";
        }
    }
?>
    </section>




