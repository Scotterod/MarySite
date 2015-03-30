﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="stylesheetM.css" media="screen" />
    <link rel="shortcut icon" href="/Images/favicon.ico">
    <title>Mary Jansen: Critique Form</title>
</head>
<body>
    <header>
        <!--<hgroup>
            <h1>Mary Jansen</h1>
            <h2>Artist Extraordinaire</h2>
        </hgroup>-->
        <img class="banner" src="Images/tiger head.jpg" alt="Tiger Painting" />
        <nav>
            <ul>
               <li><a href="index.html">Home</a></li>
                <li><a href="galleries.php">Galleries</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="biography.html">Biography</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <hr>
    <section>
        <h1>Mary Jansen</h1>
        <p>To receive your professional critique of your own art work, and a great deal of customized advice, please fill out all fields in the form below.</p>
        <form method="POST" action="emailCritique.php" enctype="multipart/form-data">
            <p>Your Full Name</p>
            <p><label><input type="text" name="nameInput" required placeholder="Your full name"></label></p>
            <p>Your Email Address (where Mary&rsquo;s critique will arrive)</p>
            <p><label><input type="email" name="emailInput" required placeholder="email address"></label></p>
            <p><label>Enter questions or comments to help shape your desired critique (max 500 characters):</label></p>
            <textarea cols="103" rows="5" maxlength="500" name="comments"></textarea>
            <p>Upload a file with your own art:</p>
            <input type="file" name="upFile" />
            <p> <input type="submit" value="Submit"></p>
            <p> <input type="reset" value="Reset Values"></p>
        </form>
    </section>
</body>
</html>