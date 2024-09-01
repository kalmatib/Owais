<?php
include("./index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send a Message</title>
</head>
<link rel="stylesheet" href="./css/contact.css">
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
    <h1>Send Us a Message</h1>
    <form id="messageForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>

        <input type="submit" value="Send Message">
    </form>

    <script>
        document.getElementById('messageForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Create a message object
            const messageData = {
                name: name,
                email: email,
                message: message,
                timestamp: new Date().toISOString()
            };

            // Save message data to local storage
            let messages = JSON.parse(localStorage.getItem('messages')) || [];
            messages.push(messageData);
            localStorage.setItem('messages', JSON.stringify(messages));

            alert('Message saved successfully.');
            
            document.getElementById('messageForm').reset();
        });
    </script>
     <?php
include("./footer.php");
        ?>
</body>
</html>
