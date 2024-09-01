<?php
include("./index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section Example</title>
    <link rel="stylesheet" href="./css/hero.css">
</head>
<body>
    <header class="hero-section">
        <div class="hero-content">
            <h1><?php echo "Welcome to Our Awesome Website"; ?></h1>
            <p><?php echo "Discover amazing content and experiences tailored just for you."; ?></p>
            <a href="about.php" class="cta-button"><?php echo "Learn More"; ?></a>
        </div>
        
    </header>
    
    <div class="hero-sections">
            <div class="container">
                <div class="left-section">
                    <h1 class="Frontend-Expertise">Frontend Expertise</h1>
                    <p>On the frontend, I excel in transforming design concepts into responsive and interactive user interfaces. My proficiency in HTML, CSS, and JavaScript allows me to build aesthetically pleasing and highly functional websites. I am skilled in utilizing modern frontend frameworks and libraries, such as React, Angular, or Vue.js, to enhance user experiences and streamline development processes.</p>
                    <div class="Key-Skills">
                    <p> . HTML & CSS: Structuring and styling web content with semantic HTML and advanced CSS techniques.</p>
                    <p> . JavaScript: Implementing dynamic features and client-side logic.</p>
                    <p> . Frameworks & Libraries: Building applications using React, Angular, or Vue.js.</p>
                    <p> . Responsive Design: Ensuring compatibility across various devices and screen sizes.</p>
                    </div>
                    
                </div>
            </div>
       
        
            <div class="container">
                <div class="right-section">
                    <h1 class="Backend-Expertise">Backend Expertise</h1>
                    <p>On the backend, I am proficient in designing and implementing scalable server-side solutions. I have extensive experience with server-side languages and frameworks, such as Node.js, Python, Ruby on Rails, and PHP. My focus is on creating efficient APIs, managing databases, and ensuring data security and integrity.</p>
                    <div class="Key-Skills">
                    <p> . Server-Side Languages: Developing robust applications with Node.js, Python, Ruby on Rails, or PHP.</p>
                    <p> . Database Management: Designing and managing databases using SQL (MySQL, PostgreSQL) and NoSQL (MongoDB) systems.</p>
                    <p> . Authentication & Security: Implementing secure authentication mechanisms and data protection strategies.</p>
                    
                    </div>
                    
                </div>
            </div>
        </div>
</body>
</html>
