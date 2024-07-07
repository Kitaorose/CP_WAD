<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
        require_once ("includes/db_connect.php");
        include_once ("Templates/nav.php");
        ?>
    <div class="banner"> <h1>Bamboo by the lake Resort</h1></div>
   <div class="row::after">
    <h1>Contact Us</h1>
    <p>Have any queries or ideas concerning our facilities?<br> Please leave us a message and we will be glad to respond ASAP.</p>
    <h3>Details</h3>
<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post" class="contacts_form label">
    <label for="f&Ln">Fullnames</label><br>
    <input type="text" name="fullname" id="F&Ln " placeholder="First & Last Name"><br>

    <label for="Pn">Phone Number</label><br>
    <input type="number" number_format name="phone number" id="Pn" placeholder="Phone Number"><br>

    <label for="Em">Email Address</label><br>
    <input type="text" name="email" id="Em" placeholder="Email"><br><br>

    <label for="s">Subject</label><br>
                <select name="Subject_line" id="s">
                <option value="">--Select Subject--</option>
                    <option value="booking inquiry">Booking inquiry</option>
                    <option value="review">Review</option>
                </select><br><br>
    <label for="mes">Message</label><br>
    <textarea name="message" rows="4" cols= "50" id="M">Enter Message</textarea><br><br>
    <input type="button" value="Send Message" ><br>
    </form>
   </div>
   <div class="footer">
    &copy;2024|Bamboo by The Lake.|All rights reserved.
   </div>
</body>
</html>