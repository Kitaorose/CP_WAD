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
        include_once ("Templates/nav.php");
        ?>
    <div class="banner"> <h1>Bamboo by the lake Resort</h1></div>
   <div class="row::after">
    <h1>Contact Us</h1>
    <h3>Details</h3>

    <input type="text" name="" id="F&Ln " placeholder="First & Last Name"><br>
    <input type="number" name="" id="Pn" placeholder="Phone Number"><br>
    <input type="text" name="" id="Em" placeholder="Email"><br><br>
    <label for="mes">Message</label><br>
    <textarea name="" id="M">Message</textarea><br><br>
    <input type="button" value="Send Message" ><br>

   </div>
   <div class="footer">
    &copy;2024|Bamboo by The Lake.|All rights reserved.
   </div>
</body>
</html>