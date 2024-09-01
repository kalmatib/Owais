<?php
include("./index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>owais</title>
    <link rel="stylesheet" href="./css/navbar.css">
</head>

<body>
    <div class="navbar">
        <div class="container">
            <div class="navbar-left">
                <img class="navbar-logo" src="./img/logo.jpeg" alt="" >
           
            </div>
            <div class="navbar-right">
            <ul class="navbar-link">
            <li><a class="nav-link" href="navbar.php">Home</a> </li>
            <li> <a  class="nav-link"href="about.php">About</a></li>
            <li> <a  class="nav-link"href="contact.php">Contact</a></li>
           </ul> 
            </div>
        </div>
    </div>
    <?php
include("./hero.php");
include("./footer.php");
    ?>
</body>
</html>
